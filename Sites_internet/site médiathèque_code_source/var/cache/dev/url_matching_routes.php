<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/annonce' => [[['_route' => 'annonce_index', '_controller' => 'App\\Controller\\AnnonceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/annonce/new' => [[['_route' => 'annonce_new', '_controller' => 'App\\Controller\\AnnonceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/article_admin' => [[['_route' => 'article_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/article_admin/new' => [[['_route' => 'article_new', '_controller' => 'App\\Controller\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/articles/show' => [[['_route' => 'articles_show', '_controller' => 'App\\Controller\\Articles\\ArticleController::showAll'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/articles/test' => [[['_route' => 'articles_show_test', '_controller' => 'App\\Controller\\Articles\\ArticleController::sign_request'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/article/filtre/clear' => [[['_route' => 'filter_clear', '_controller' => 'App\\Controller\\Articles\\ArticleController::clearFiltrer'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/articles/getISBN' => [[['_route' => 'get_ISBN', '_controller' => 'App\\Controller\\Articles\\ArticleController::getISBN'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/articles/add' => [[['_route' => 'add_livre', '_controller' => 'App\\Controller\\Articles\\ArticleController::addLivre'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/bdd/transfert' => [[['_route' => 'modifVideold', '_controller' => 'App\\Controller\\Articles\\ArticleController::transfertBDD'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/bdd/transfert/entite' => [[['_route' => 'modifEntite', '_controller' => 'App\\Controller\\Articles\\ArticleController::transfertEntite'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/testxml' => [[['_route' => 'testxml', '_controller' => 'App\\Controller\\Articles\\ArticleController::testxml'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/transfertLivre' => [[['_route' => 'modifLivre', '_controller' => 'App\\Controller\\Articles\\ArticleController::transfertBDDLivre'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie' => [[['_route' => 'categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/new' => [[['_route' => 'categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/articles' => [[['_route' => 'operations_articles', '_controller' => 'App\\Controller\\DataBaseController::index'], null, null, null, false, false, null]],
        '/database/articles' => [[['_route' => 'data_base_articles', '_controller' => 'App\\Controller\\DataBaseController::DataBaseArticle'], null, null, null, true, false, null]],
        '/database/users' => [[['_route' => 'data_base_users', '_controller' => 'App\\Controller\\DataBaseController::DataBaseUsers'], null, null, null, true, false, null]],
        '/emprunts' => [[['_route' => 'emprunts', '_controller' => 'App\\Controller\\EmpruntController::emprunt'], null, null, null, false, false, null]],
        '/emprunts/gestion' => [[['_route' => 'gestion_emprunts', '_controller' => 'App\\Controller\\EmpruntController::empruntGestion'], null, null, null, false, false, null]],
        '/entite' => [[['_route' => 'entite_index', '_controller' => 'App\\Controller\\EntiteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/entite/new' => [[['_route' => 'entite_new', '_controller' => 'App\\Controller\\EntiteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/entreprise' => [[['_route' => 'entreprise_index', '_controller' => 'App\\Controller\\EntrepriseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/entreprise/new' => [[['_route' => 'entreprise_new', '_controller' => 'App\\Controller\\EntrepriseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/favoris' => [[['_route' => 'favoris', '_controller' => 'App\\Controller\\FavorisController::favoris'], null, null, null, false, false, null]],
        '/favoris/vider' => [[['_route' => 'vider_favoris', '_controller' => 'App\\Controller\\FavorisController::viderFavoris'], null, ['DELETE' => 0], null, false, false, null]],
        '/fonction' => [[['_route' => 'fonction_index', '_controller' => 'App\\Controller\\FonctionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/fonction/new' => [[['_route' => 'fonction_new', '_controller' => 'App\\Controller\\FonctionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/genre' => [[['_route' => 'genre_index', '_controller' => 'App\\Controller\\GenreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/genre/new' => [[['_route' => 'genre_new', '_controller' => 'App\\Controller\\GenreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\IndexController::accueil'], null, null, null, false, false, null]],
        '/crud_list' => [[['_route' => 'crud_list', '_controller' => 'App\\Controller\\IndexController::crudlist'], null, null, null, false, false, null]],
        '/lien' => [[['_route' => 'lien_index', '_controller' => 'App\\Controller\\LienController::index'], null, ['GET' => 0], null, true, false, null]],
        '/lien/new' => [[['_route' => 'lien_new', '_controller' => 'App\\Controller\\LienController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panier' => [[['_route' => 'panier', '_controller' => 'App\\Controller\\PanierController::panier'], null, null, null, false, false, null]],
        '/panier/vider' => [[['_route' => 'vider_panier', '_controller' => 'App\\Controller\\PanierController::viderPanier'], null, ['DELETE' => 0], null, false, false, null]],
        '/panier/recap' => [[['_route' => 'recap_panier', '_controller' => 'App\\Controller\\PanierController::recapPanier'], null, null, null, false, false, null]],
        '/rubrique' => [[['_route' => 'rubrique_index', '_controller' => 'App\\Controller\\RubriqueController::index'], null, ['GET' => 0], null, true, false, null]],
        '/rubrique/new' => [[['_route' => 'rubrique_new', '_controller' => 'App\\Controller\\RubriqueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\Security\\SecurityController::registration'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\Security\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\Security\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/statistiques' => [[['_route' => 'admin_statistiques', '_controller' => 'App\\Controller\\StatistiquesController::statistiques'], null, ['GET' => 0], null, false, false, null]],
        '/tag' => [[['_route' => 'tag_index', '_controller' => 'App\\Controller\\TagController::index'], null, ['GET' => 0], null, true, false, null]],
        '/tag/new' => [[['_route' => 'tag_new', '_controller' => 'App\\Controller\\TagController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/trancheAge' => [[['_route' => 'tranche_age_index', '_controller' => 'App\\Controller\\TrancheAgeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/trancheAge/new' => [[['_route' => 'tranche_age_new', '_controller' => 'App\\Controller\\TrancheAgeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/typeEntite' => [[['_route' => 'type_entite_index', '_controller' => 'App\\Controller\\TypeEntiteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/typeEntite/new' => [[['_route' => 'type_entite_new', '_controller' => 'App\\Controller\\TypeEntiteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\Users\\ProfilController::index'], null, null, null, false, false, null]],
        '/profil/MesDonnees' => [[['_route' => 'mes_donnees', '_controller' => 'App\\Controller\\Users\\ProfilController::donneePerso'], null, null, null, false, false, null]],
        '/profil/data/download' => [[['_route' => 'mes_donnees_download', '_controller' => 'App\\Controller\\Users\\ProfilController::mesDonneeDownload'], null, null, null, false, false, null]],
        '/profil/edit' => [[['_route' => 'edit_profil', '_controller' => 'App\\Controller\\Users\\ProfilController::editProfil'], null, null, null, false, false, null]],
        '/profil/edit/password' => [[['_route' => 'edit_password_profil', '_controller' => 'App\\Controller\\Users\\ProfilController::editPassword'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'users_accueil', '_controller' => 'App\\Controller\\Users\\UserController::accueilUser'], null, null, null, false, false, null]],
        '/users/show' => [[['_route' => 'users_show', '_controller' => 'App\\Controller\\Users\\UserController::showUser'], null, null, null, false, false, null]],
        '/users/add' => [[['_route' => 'users_add', '_controller' => 'App\\Controller\\Users\\UserController::addUser'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/elfinder.main.js' => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|nnonce/([^/]++)(?'
                        .'|(*:192)'
                        .'|/edit(*:205)'
                        .'|(*:213)'
                    .')'
                    .'|pi/livre/search/([^/]++)(*:246)'
                    .'|rticle(?'
                        .'|_admin/([^/]++)(?'
                            .'|(*:281)'
                            .'|/edit(*:294)'
                            .'|(*:302)'
                        .')'
                        .'|s/(?'
                            .'|categorie/([^/]++)/(?'
                                .'|show(*:342)'
                                .'|genres/([^/]++)/show(*:370)'
                            .')'
                            .'|genres/([^/]++)/show(*:399)'
                        .')'
                        .'|(?:/([^/]++))?(*:422)'
                    .')'
                .')'
                .'|/categorie/([^/]++)(?'
                    .'|(*:454)'
                    .'|/edit(*:467)'
                    .'|(*:475)'
                .')'
                .'|/database/([^/]++)/file(*:507)'
                .'|/ent(?'
                    .'|ite/([^/]++)(?'
                        .'|(*:537)'
                        .'|/edit(*:550)'
                        .'|(*:558)'
                    .')'
                    .'|reprise/([^/]++)(?'
                        .'|(*:586)'
                        .'|/edit(*:599)'
                        .'|(*:607)'
                    .')'
                .')'
                .'|/([^/]++)/articles/([^/]++)/remove/favoris(*:659)'
                .'|/favoris/remove(?:/([^/]++))?(*:696)'
                .'|/([^/]++)/favoris/add(?:/([^/]++))?(*:739)'
                .'|/fonction/([^/]++)(?'
                    .'|(*:768)'
                    .'|/edit(*:781)'
                    .'|(*:789)'
                .')'
                .'|/genre/([^/]++)(?'
                    .'|(*:816)'
                    .'|/edit(*:829)'
                    .'|(*:837)'
                .')'
                .'|/lien/([^/]++)(?'
                    .'|(*:863)'
                    .'|/edit(*:876)'
                    .'|(*:884)'
                .')'
                .'|/p(?'
                    .'|anier/(?'
                        .'|add(?:/([^/]++))?(*:924)'
                        .'|remove(?:/([^/]++))?(*:952)'
                        .'|move/([^/]++)/favoris(*:981)'
                    .')'
                    .'|rofil/edit/avatar(?:/([^/]++))?(*:1021)'
                .')'
                .'|/rubrique/([^/]++)(?'
                    .'|(*:1052)'
                    .'|/edit(*:1066)'
                    .'|(*:1075)'
                .')'
                .'|/t(?'
                    .'|ag/([^/]++)(?'
                        .'|(*:1104)'
                        .'|/edit(*:1118)'
                        .'|(*:1127)'
                    .')'
                    .'|rancheAge/([^/]++)(?'
                        .'|(*:1158)'
                        .'|/edit(*:1172)'
                        .'|(*:1181)'
                    .')'
                    .'|ypeEntite/([^/]++)(?'
                        .'|(*:1212)'
                        .'|/edit(*:1226)'
                        .'|(*:1235)'
                    .')'
                .')'
                .'|/e(?'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:1287)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:1331)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        192 => [[['_route' => 'annonce_show', '_controller' => 'App\\Controller\\AnnonceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        205 => [[['_route' => 'annonce_edit', '_controller' => 'App\\Controller\\AnnonceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        213 => [[['_route' => 'annonce_delete', '_controller' => 'App\\Controller\\AnnonceController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        246 => [[['_route' => 'api_livre_search_isbn', '_controller' => 'App\\Controller\\Api\\LivreApiController::getDataFromIsbn'], ['isbn'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        281 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        294 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        302 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        342 => [[['_route' => 'categories_id_articles_show', 'idCategorie' => null, '_controller' => 'App\\Controller\\Articles\\ArticleController::showAll'], ['idCategorie'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        370 => [[['_route' => 'categories_id_genres_id_articles_show', 'idGenre' => null, 'idCategorie' => null, '_controller' => 'App\\Controller\\Articles\\ArticleController::showAll'], ['idCategorie', 'idGenre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        399 => [[['_route' => 'genres_id_articles_show', 'idGenre' => null, '_controller' => 'App\\Controller\\Articles\\ArticleController::showAll'], ['idGenre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        422 => [[['_route' => 'article_details', 'id' => 1, '_controller' => 'App\\Controller\\Articles\\ArticleController::livreDetails'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        454 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        467 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        475 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        507 => [[['_route' => 'data_base_file', 'table' => null, '_controller' => 'App\\Controller\\DataBaseController::backupDataBase'], ['table'], null, null, false, false, null]],
        537 => [[['_route' => 'entite_show', '_controller' => 'App\\Controller\\EntiteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        550 => [[['_route' => 'entite_edit', '_controller' => 'App\\Controller\\EntiteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        558 => [[['_route' => 'entite_delete', '_controller' => 'App\\Controller\\EntiteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        586 => [[['_route' => 'entreprise_show', '_controller' => 'App\\Controller\\EntrepriseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        599 => [[['_route' => 'entreprise_edit', '_controller' => 'App\\Controller\\EntrepriseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        607 => [[['_route' => 'entreprise_delete', '_controller' => 'App\\Controller\\EntrepriseController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        659 => [[['_route' => 'remove_article_favoris', 'id' => 1, '_controller' => 'App\\Controller\\FavorisController::removeFavoris'], ['page', 'id'], null, null, false, false, null]],
        696 => [[['_route' => 'remove_favoris', 'id' => 1, '_controller' => 'App\\Controller\\FavorisController::removeFavoris2'], ['id'], null, null, false, true, null]],
        739 => [[['_route' => 'add_article_favoris', 'id' => 1, '_controller' => 'App\\Controller\\FavorisController::addFavoris'], ['page', 'id'], null, null, false, true, null]],
        768 => [[['_route' => 'fonction_show', '_controller' => 'App\\Controller\\FonctionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        781 => [[['_route' => 'fonction_edit', '_controller' => 'App\\Controller\\FonctionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        789 => [[['_route' => 'fonction_delete', '_controller' => 'App\\Controller\\FonctionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        816 => [[['_route' => 'genre_show', '_controller' => 'App\\Controller\\GenreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        829 => [[['_route' => 'genre_edit', '_controller' => 'App\\Controller\\GenreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        837 => [[['_route' => 'genre_delete', '_controller' => 'App\\Controller\\GenreController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        863 => [[['_route' => 'lien_show', '_controller' => 'App\\Controller\\LienController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        876 => [[['_route' => 'lien_edit', '_controller' => 'App\\Controller\\LienController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        884 => [[['_route' => 'lien_delete', '_controller' => 'App\\Controller\\LienController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        924 => [[['_route' => 'add_article_panier', 'id' => 1, '_controller' => 'App\\Controller\\PanierController::addArticlePanier'], ['id'], null, null, false, true, null]],
        952 => [[['_route' => 'remove_article_panier', 'id' => 1, '_controller' => 'App\\Controller\\PanierController::removeArticlePanier'], ['id'], null, null, false, true, null]],
        981 => [[['_route' => 'move_article_panier_favoris', 'id' => 1, '_controller' => 'App\\Controller\\PanierController::moveArticlePanierFavoris'], ['id'], null, null, false, false, null]],
        1021 => [[['_route' => 'edit_color_avatar_profil', 'color' => null, '_controller' => 'App\\Controller\\Users\\ProfilController::editAvatarColorProfil'], ['color'], null, null, false, true, null]],
        1052 => [[['_route' => 'rubrique_show', '_controller' => 'App\\Controller\\RubriqueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1066 => [[['_route' => 'rubrique_edit', '_controller' => 'App\\Controller\\RubriqueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1075 => [[['_route' => 'rubrique_delete', '_controller' => 'App\\Controller\\RubriqueController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1104 => [[['_route' => 'tag_show', '_controller' => 'App\\Controller\\TagController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1118 => [[['_route' => 'tag_edit', '_controller' => 'App\\Controller\\TagController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1127 => [[['_route' => 'tag_delete', '_controller' => 'App\\Controller\\TagController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1158 => [[['_route' => 'tranche_age_show', '_controller' => 'App\\Controller\\TrancheAgeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1172 => [[['_route' => 'tranche_age_edit', '_controller' => 'App\\Controller\\TrancheAgeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1181 => [[['_route' => 'tranche_age_delete', '_controller' => 'App\\Controller\\TrancheAgeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1212 => [[['_route' => 'type_entite_show', '_controller' => 'App\\Controller\\TypeEntiteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1226 => [[['_route' => 'type_entite_edit', '_controller' => 'App\\Controller\\TypeEntiteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1235 => [[['_route' => 'type_entite_delete', '_controller' => 'App\\Controller\\TypeEntiteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1287 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        1331 => [
            [['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
