<?php
namespace App\Data;

use App\Entity\Categorie;
use App\Entity\Genre;
use App\Entity\Rubrique;
use App\Entity\Statut;
use App\Entity\TrancheAge;
use DateTime;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class SearchData{

    /**
     * @var string
     */
    public $q = '';
    /**
     * @var string
     */
    public $dateMin = '';
    /**
     * @var string
     */
    public $dateMax = '';
    /**
     * @var Genre[]
     */
    public $genre = [];
    /**
     * @var Categorie[]
     */
    public $categorie = [];
    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    public $nouveaute = false;
    /**
     * @var Statut[]
     */
    public $statut = [];
    /**
     * @var TrancheAge[]
     */
    public $age = [];
    /**
     * @var Rubrique[]
     */
    public $rubrique = [];

}