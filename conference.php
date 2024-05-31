<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/conference.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title id="pageTitle">Sites de fouines</title>
</head>

<body>

    <!-- Debut header -->
    <div class="container-fluid">
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand" href="index.php">
                    <img src="images/Yellow and Blue Bold Icon Typographic Business Logo (1).png" alt="Logo" width="200">
                </a>

                <!-- Bouton burger pour afficher le menu sur mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>

                <!-- Menu -->
                <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo02">
                    <ul class="navbar-nav  ">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Accueil </span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="stages.php">Stages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="site_fouine.php">Sites de fouines</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="conference.php">Conferences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="revue.php">Revues</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Membres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <img src="images/banniere-conf.jpg" class="object-fit-cover" id="banner" width="100%" height="auto">

        <!-- <div class="titre-banner">
            <h1>Titre de la bannière</h1>
            <p>Description de la bannière...</p>
        </div> -->

        <!-- Fin header -->

        <!-- Debut body -->
        <!-- Debut nos activites stages-->
        <div class=" d-flex justify-content-center">
            <h2 class="titre-1-c mb-4">DECOUVREZ NOS <span class="marqueur"> CONFERENCES</span></h2>
        </div>
        <div class="row contain">
            <div class="card-group col-md-11">
                <div class="card " id="card2">
                    <img src="images/17.png" class="card-img-top" alt="Vallée des Rois" title="Vallée des Rois">
                    <div class="card-body">
                        <h5 class="card-title">
                            <p class="marqueur">Découvertes récentes dans la Vallée des Rois</p>
                        </h5>
                        <p class="card-text">Lieu : Musée du Louvre, Paris </p>
                        <p class="card-text">Conférencier : Dr. Émilie Durand, archéologue spécialisée dans l'Égypte antique.</p>

                        <small class="text-body-secondary">Date : 15 avril 2024</small>

                    </div>
                    <div class="card-footer">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Voir plus...
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Nouvelles perspectives sur l'ancienne Égypte</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Cette conférence explorera les dernières découvertes et les interprétations les plus récentes sur les mystères des pyramides égyptiennes. Des archéologues renommés partageront leurs recherches passionnantes sur la construction, la signification symbolique et la fonction des pyramides, offrant ainsi un nouvel éclairage sur l'ancienne civilisation égyptienne.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" id="card2">
                    <img src="images/18.png" class="card-img-top" alt="cités perdues" title="cités perdues">
                    <div class="card-body">
                        <h5 class="card-title">
                            <p class="marqueur">Exploration des cités perdues de la jungle amazonienne</p>
                        </h5>
                        <p class="card-text">Lieu : Musée des civilisations, Marseille</p>
                        <p class="card-text">Conférencière : Prof. Ana Silva, archéologue experte en Amérique latine.</p>

                        <small class="text-body-secondary">Date : 22 mai 2024</small>
                    </div>
                    <div class="card-footer">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Voir plus...
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Nouvelles perspectives à la lumière des découvertes récentes</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Cette conférence explorera les dernières avancées dans notre compréhension des premiers hommes en Europe. Des chercheurs présenteront des découvertes récentes telles que des outils en pierre, des peintures rupestres et des ossements humains, offrant ainsi de nouvelles perspectives sur les migrations humaines, les modes de vie et les interactions avec l'environnement au Paléolithique. </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" id="card2">
                    <img src="images/19.png" class="card-img-top" alt="mystères des mégalithes" title="mystères des mégalithes">
                    <div class="card-body">
                        <h5 class="card-title">
                            <p class="marqueur">Les mystères des mégalithes</p>
                        </h5>
                        <p class="card-text">Lieu : Centre de recherche archéologique, Lyon</p>
                        <p class="card-text">Conférencière : Dr. Jacques Dubois, archéologue spécialisé dans la préhistoire européenne.</p>

                        <small class="text-body-secondary">Date : 10 juillet 2024</small>
                    </div>
                    <div class="card-footer">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Voir plus...
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Mythe ou réalité archéologique ?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Cette conférence explorera le débat entourant l'existence de l'Atlantide, une légende ancienne qui a captivé l'imagination depuis des siècles. Des archéologues examineront les preuves archéologiques et les théories alternatives concernant l'emplacement et la disparition de l'Atlantide, offrant ainsi un aperçu des enjeux historiques et scientifiques entourant ce mystère.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-group col-md-11">
                <div class="card" id="card2">
                    <img src="images/22.png" class="card-img-top" alt="Trésors engloutis" title="Trésors engloutis">
                    <div class="card-body">
                        <h5 class="card-title">
                            <p class="marqueur">Trésors engloutis</p>
                        </h5>
                        <p class="card-text">Lieu : Aquarium de la Rochelle</p>
                        <p class="card-text">Conférencière : Prof. Marine Leclerc, archéologue sous-marin.</p>

                        <small class="text-body-secondary">Date : 5 septembre 2024</small>
                    </div>
                    <div class="card-footer">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Voir plus...
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Découvertes archéologiques sous-marines et exploration des civilisations perdues</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Cette conférence plongera dans le monde fascinant des découvertes archéologiques sous-marines, mettant en lumière les trésors engloutis et les vestiges des civilisations anciennes qui reposent au fond des océans. Des plongeurs et des archéologues maritimes partageront leurs expériences de recherche sous-marine et leurs découvertes extraordinaires, offrant ainsi un aperçu des défis et des possibilités uniques de l'archéologie subaquatique.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" id="card2">
                    <img src="images/21.png" class="card-img-top" alt="rôle de la technologie" title="rôle de la technologie">
                    <div class="card-body">
                        <h5 class="card-title">
                            <p class="marqueur">Le rôle de la technologie dans la préservation du patrimoine archéologique</p>
                        </h5>
                        <p class="card-text">Lieu : Centre de recherche en archéologie numérique, Toulouse</p>
                        <p class="card-text">Conférencière : Dr. Sophie Dubois, archéologue spécialisée dans l'archéologie numérique et la préservation du patrimoine.</p>

                        <small class="text-body-secondary">Date : 20 novembre 2024</small>
                    </div>
                    <div class="card-footer">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Voir plus...
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Nouvelles perspectives sur l'histoire de la Terre depuis l'espace</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Cette conférence examinera le rôle croissant de l'exploration spatiale dans la recherche archéologique, mettant en évidence les technologies et les méthodes utilisées pour cartographier, surveiller et étudier les sites archéologiques depuis l'espace. Des experts en télédétection et en analyse d'imagerie satellitaire partageront leurs découvertes et leurs applications pratiques, offrant ainsi un aperçu des avantages et des défis de l'archéologie spatiale.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" id="card2">
                    <img src="images/20.png" class="card-img-top" alt="Archéologie urbaine" title="Archéologie urbaine">
                    <div class="card-body">
                        <h5 class="card-title">
                            <p class="marqueur">Archéologie urbaine</p>
                        </h5>
                        <p class="card-text">Lieu : Université de Bordeaux</p>
                        <p class="card-text">Conférencière : Dr. Pierre Martin, spécialiste de l'archéologie urbaine.</p>

                        <small class="text-body-secondary">Date : 8 octobre 2024</small>
                    </div>
                    <div class="card-footer">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Voir plus...
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Fin nos conference -->


        <!-- Debut footer -->

        <div class="row d-flex justify-content-center" id="footer">
            <div class="col-md-4">
                <img src="images/Yellow and Blue Bold Icon Typographic Business Logo (1).png" alt="Logo" width="230">

            </div>
            <div class="col-md-4">
                <h4 class="t-footer">Informations</h4>
                <ul class="list-unstyled">
                    <li>Accueil</li>
                    <li>Stages</li>
                    <li>Sites de fouine</li>
                    <li>Conferences</li>
                    <li>Revues</li>
                    <li>Membres</li>
                    <li>Contact</li>
                    <li>Connexion</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4 class="t-footer">Contact</h4>
                <ul class="list-unstyled">
                    <li>+33 7 80 70 81 74</li>
                    <li>deutouraphael@gmail.com</li>
                    <li>2 Place du val</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <p></p>
        </div>


        <!-- Fin footer -->




        <!-- Fin body -->


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">

    </script>
</body>

</html>