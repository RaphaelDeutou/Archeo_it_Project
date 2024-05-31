<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/revue.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title id="pageTitle">Revues</title>
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
                        <li class="nav-item ">
                            <a class="nav-link" href="conference.php">Conferences</a>
                        </li>
                        <li class="nav-item active">
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

        <img src="images/banniere3.jpg" class="object-fit-cover" id="banner" width="100%" height="auto">

        <!-- <div class="titre-banner">
            <h1>Titre de la bannière</h1>
            <p>Description de la bannière...</p>
        </div> -->

        <!-- Fin header -->

        <!-- Debut body -->
        <!-- Debut nos activites stages-->
        <div class=" d-flex justify-content-center">
            <h2 class="titre-1-c mb-4">DECOUVREZ NOS <span class="marqueur"> REVUES</span></h2>
        </div>
        <div class="row contain">
            <div class="card-group col-md-11">
                <div class="card " id="card2">
                    <img src="images/11.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title ">
                            <p class="marqueur">Avancées récentes en paléontologie</p>
                        </h5>
                        <p class="card-text">Cette revue présente les dernières avancées dans le domaine de la paléontologie, incluant de nouvelles découvertes sur les dinosaures, les premiers hominidés, et les anciennes formes de vie sur Terre. Des chercheurs renommés partagent leurs études et leurs perspectives sur l'évolution de la vie sur notre planète.</p>
                    </div>
                    <div class="card-footer">
                        <a href="images/ArcheoIT.pdf" class="doc" download="ArcheoIT.pdf">Télécharger</a>
                        <small class="text-body-secondary">01/05/2024</small>
                    </div>
                </div>
                <div class="card" id="card2">
                    <img src="images/12.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <p class="marqueur">Découvertes récentes dans la région méditerranéenne</p>
                        </h5>
                        <p class="card-text"> Cette revue présente les résultats des dernières fouilles archéologiques menées dans la région méditerranéenne, mettant en lumière de nouvelles découvertes sur les civilisations antiques, les modes de vie anciens et les échanges culturels.</p>
                    </div>
                    <div class="card-footer">
                        <a href="images/ArcheoIT.pdf" class="doc" download="ArcheoIT.pdf">Télécharger</a>
                        <small class="text-body-secondary">29/04/2024</small>
                    </div>
                </div>
                <div class="card" id="card2">
                    <img src="images/14.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <p class="marqueur">Les grands événements du Moyen Âge européen</p>
                        </h5>
                        <p class="card-text"> Cette revue explore les grands événements qui ont marqué le Moyen Âge européen, de la chute de l'Empire romain à l'émergence des grandes dynasties royales. Des articles détaillés examinent les batailles, les alliances politiques, et les développements culturels de cette période tumultueuse.</p>
                    </div>
                    <div class="card-footer">
                        <a href="images/ArcheoIT.pdf" class="doc" download="ArcheoIT.pdf">Télécharger</a>
                        <small class="text-body-secondary">25/04/2024</small>
                    </div>
                </div>
            </div>

            <div class="card-group col-md-11">
                <div class="card" id="card2">
                    <img src="images/9.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <p class="marqueur">Exploration des traditions artistiques du monde</p>
                        </h5>
                        <p class="card-text">Cette revue célèbre la diversité des traditions artistiques à travers le monde, en mettant en avant les œuvres d'art, les pratiques artisanales et les expressions culturelles uniques de différentes régions. Des analyses approfondies explorent les influences historiques, sociales et environnementales sur l'art et la culture.</p>
                    </div>
                    <div class="card-footer">
                        <a href="images/ArcheoIT.pdf" class="doc" download="ArcheoIT.pdf">Télécharger</a>
                        <small class="text-body-secondary">25/04/2024</small>
                    </div>
                </div>
                <div class="card" id="card2">
                    <img src="images/10.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <p class="marqueur">Analyse des grands classiques de la littérature mondiale</p>
                        </h5>
                        <p class="card-text"> Cette revue propose des analyses approfondies des grands classiques de la littérature mondiale, des œuvres de Shakespeare aux romans modernes. Des critiques littéraires renommés examinent les thèmes, les personnages et les techniques narratives qui ont fait de ces œuvres des incontournables de la littérature.</p>
                    </div>
                    <div class="card-footer">
                        <a href="images/ArcheoIT.pdf" class="doc" download="ArcheoIT.pdf">Télécharger</a>
                        <small class="text-body-secondary">22/04/2024</small>
                    </div>
                </div>
                <div class="card" id="card2">
                    <img src="images/16.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <p class="marqueur">Exploration des mystères de l'univers</p>
                        </h5>
                        <p class="card-text"> Cette revue plonge dans les mystères de l'univers, de la physique quantique à l'astronomie. Des articles récents examinent les trous noirs, les particules subatomiques et les théories sur l'origine de l'univers, offrant un aperçu fascinant des dernières découvertes en sciences cosmiques.</p>
                    </div>
                    <div class="card-footer">
                        <a href="images/ArcheoIT.pdf" class="doc" download="ArcheoIT.pdf">Télécharger</a>
                        <small class="text-body-secondary">19/04/2024</small>
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
        


        <!-- Fin footer -->




        <!-- Fin body -->


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">

    </script>
</body>

</html>