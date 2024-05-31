<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/stages.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title id="pageTitle">Stages</title>
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
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php">Accueil </span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="stages.php">Stages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="site_fouine.php">Sites de fouines</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="conference.php">Conferences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="revue.php">Revues</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="membres.php">Membres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a href=" admin.php" class="nav-link">Connexion</a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <img src="images/stages.jpg" class="object-fit-cover" id="banner" width="100%" height="auto">

        <!-- <div class="titre-banner">
            <h1>Titre de la bannière</h1>
            <p>Description de la bannière...</p>
        </div> -->

        <!-- Fin header -->

        <!-- Debut body -->

        <!-- Debut a propos de nous -->
        <div class="row d-flex " id="block-2">
            <div class="col-md-5 ">
                <h2 class="titre-1">NOS<span class="marqueur"> STAGES</span></h2>
                <p>Nos stages offrent une opportunité unique d'explorer le monde de l'archéologie et de découvrir les secrets enfouis de notre passé. Archeo-IT réalise des missions d’expertises, d’études, de valorisation et de fouilles sur les sites, les monuments et les objets archéologiques des périodes allant de la protohistoire à nos jours. Nos équipes, réparties en quatre agences (Toulouse, Bordeaux, Clermont-Ferrand et Arles), représentent un effectif permanent d’une soixantaine de personnes qui interviennent de l’Atlantique à la Méditerranée et des Pyrénées jusqu’au nord du Massif Central, plus ponctuellement aux Antilles et à l’étranger.
                </p>
            </div>
            <img class=" img-fluid col-md-4 " alt="enfant" title="enfant_stage" src="images/stage3.jpg">

        </div>
        <!-- Fin a propos de nos stages -->

        <!-- Debut nos activites stages-->
        <div class=" d-flex justify-content-center">
            <h2 class="titre-1-s mb-4">ACTIVITES DES<span class="marqueur"> STAGIAIRES</span></h2>
        </div>
        <div class="row  d-flex justify-content-center">
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card" id="card1">
                    <div class="card-body">
                        <h5 class="card-title">Stage pour enfants</h5>
                        <p class="card-text">Offrez à vos enfants une expérience éducative et ludique où ils pourront explorer le monde de l'archéologie à travers des activités adaptées à leur âge.</p>
                        <a href="contact.php" class="btn btn-light anabled" tabindex="-1" role="button" aria-disabled="true">S'inscrire</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" id="card2">
                    <div class="card-body">
                        <h5 class="card-title">Stage pour adultes</h5>
                        <p class="card-text"> Plongez-vous dans l'aventure de l'archéologie en participant à nos stages conçus pour les adultes, où vous pourrez acquérir de nouvelles compétences et approfondir vos connaissances.</p>
                        <a href="contact.php" class="btn btn-light anabled" tabindex="-1" role="button" aria-disabled="true">S'inscrire</a>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">

                <img src="images/stage4.png" alt="" class="col-sm-4">
            </div>

        </div>
        <!-- Fin nos activites -->

        <!-- Debut nos stages -->
        <div class=" d-flex justify-content-center">
            <h2 class="titre-1-s mb-5 mt-5">NOS OFFRES DE <span class="marqueur"> STAGE</span></h2>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
            <div class="col">
                
                    <div class="card">
                        <img src="images/stage_enfant.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Archéo-Explorateurs en Herbe</h5>
                            <p class="card-text">Ce stage d'une semaine est parfait pour les jeunes aventuriers âgés de 8 à 12 ans. Ils auront l'occasion de découvrir le monde fascinant de l'archéologie à travers des activités interactives telles que la fouille de faux sites archéologiques, la reconstitution de poteries antiques, et la création de cartes au trésor.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Dernière mise à jour il y a 5 minutes</small>
                        </div>
                    </div>
                
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/stage_enfant.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Explorateurs du Passé</h5>
                        <p class="card-text">Ce stage est destiné aux jeunes explorateurs âgés de 9 à 13 ans passionnés par l'histoire ancienne. Pendant trois jours excitants, les enfants auront l'opportunité de plonger dans l'univers fascinant de l'archéologie et de découvrir les coutumes et les traditions des civilisations antiques. À travers des jeux de piste, des expériences pratiques et des discussions animées.

                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Dernière mise à jour il y a 3 minutes</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/stage_adulte.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Archéo-Immersion</h5>
                        <p class="card-text"> Ce stage pratique est destiné aux adultes débutants souhaitant acquérir des compétences en archéologie. Pendant cinq jours de formation intensive, les participants apprendront les techniques de fouille, la manipulation des outils, la documentation des découvertes et la préservation du patrimoine archéologique.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Dernière mise à jour il y a 10 minutes</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/stage_adulte.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> Archéo-Découverte</h5>
                        <p class="card-text">Ce stage est destiné aux adultes amateurs d'histoire et d'archéologie. Pendant une semaine immersive, les participants auront l'opportunité de découvrir les richesses archéologiques de leur région à travers des fouilles sur le terrain, des visites de musées et des conférences animées par des experts du domaine.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Dernière mise à jour il y a 30 minutes</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin nos stages -->

        <!-- Debut nos actualites -->




        <!-- Fin nos actualites -->


        <!-- Debut carte 1-->

        <!-- Fin carte 1-->
        <!-- Debut carte 2-->


        <!-- Fin carte 2-->

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
        


        <!-- Fin footer -->




        <!-- Fin body -->


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">

    </script>
</body>

</html>

