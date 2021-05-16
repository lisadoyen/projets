<?php /** @noinspection DuplicatedCode */


namespace App\Security;

use App\Repository\PanierRepository;
use App\Repository\StatutRepository;
use App\Service\EmptyPanier;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter;

class SessionIdleListener
{
    /**
     * @var int
     */
    private $maxIdleTime;

    /**
     * @var Session
     */
    private $session;

    /**
     * @var TokenStorageInterface
     */
    private $tokenStorage;

    /**
     * @var RouterInterface
     */
    private $router;

    /**
     * @var AuthorizationCheckerInterface
     */
    private $checker;

    /**
     * @var EmptyPanier
     */
    private $emptyPanier;

    public function __construct(string $maxIdleTime,
                                Session $session,
                                TokenStorageInterface $tokenStorage,
                                RouterInterface $router,
                                AuthorizationCheckerInterface $checker,
                                EmptyPanier $emptyPanier)
    {
        $this->maxIdleTime = (int) $maxIdleTime;
        $this->session = $session;
        $this->tokenStorage = $tokenStorage;
        $this->router = $router;
        $this->checker = $checker;
        $this->emptyPanier = $emptyPanier;
    }

    public function onKernelRequest(RequestEvent $event): void
    {
        if (!$event->isMasterRequest()
            || $this->maxIdleTime <= 0
            || $this->isAuthenticatedAnonymously()) {
            return;
        }

        $session = $this->session;
        $session->start();

        if ((time() - $session->getMetadataBag()->getLastUsed()) <= $this->maxIdleTime) {
            return;
        }

        $this->tokenStorage->setToken();
        $session->getFlashBag()->add('danger', 'Vous avez été deconnecté après une trop grande période d\'inactivité');

        // vide le panier
        $user = $event->getRequest()->getUser();
        $this->emptyPanier->emptyPanier($user);

        $event->setResponse(new RedirectResponse($this->router->generate('security_logout')));
    }

    private function isAuthenticatedAnonymously(): bool
    {
        return !$this->tokenStorage->getToken()
            || !$this->checker->isGranted(AuthenticatedVoter::IS_AUTHENTICATED_FULLY);
    }
}