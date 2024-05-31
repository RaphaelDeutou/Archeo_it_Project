<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/membres.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title id="pageTitle">Membres</title>
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
                        <li class="nav-item ">
                            <a class="nav-link" href="revue.php">Revues</a>
                        </li>
                        <li class="nav-item active">
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

        <img src="images/banniere5.jpg" class="object-fit-cover" id="banner" width="100%" height="auto">

        <!-- <div class="titre-banner">
            <h1>Titre de la bannière</h1>
            <p>Description de la bannière...</p>
        </div> -->

        <!-- Fin header -->

        <!-- Debut body -->
        <!-- Debut nos activites stages-->
        <div class=" d-flex justify-content-center">
            <h2 class="titre-1-c mb-4 mt-4">DECOUVREZ NOS <span class="marqueur"> MEMBRES</span></h2>
        </div>

        <div class="row d-flex justify-content-center space-between">
            <div class="col-4 fixed-left">
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="#list-item-1">Président</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-2">Vice
                        président</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-3">Secrétaire</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Trésorier</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-5"> 500 membres actifs</a>
                </div>
            </div>
            <div class="col-7 row d-flex justify-content-center">
                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" tabindex="0" style="overflow: auto; position: relative; height: 100vh;">
                    <div id="list-item-1" class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/1.png" class="img-fluid rounded-start" alt="président" title="président">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <p class="marqueur">Raphael Deutou</p>
                                    </h5>
                                    <p class="card-text">Le président est le leader de l'association. Il préside les réunions du conseil d'administration et supervise les activités générales de l'organisation. Il est responsable de représenter l'association dans les événements publics et de prendre des décisions stratégiques.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="list-item-2" class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/2.png" class="img-fluid rounded-start" alt="vice-président" title="vice-président">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <p class="marqueur">Kwame Bernard</p>
                                    </h5>
                                    <p class="card-text">Le vice-président assiste le président dans ses tâches et le remplace en son absence. Il peut également être chargé de superviser des projets spécifiques ou des comités au sein de l'association.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="list-item-3" class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/5.png" class="img-fluid rounded-start" alt="secrétaire" title="secrétaire">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <p class="marqueur">Aminata Mirabelle</p>
                                    </h5>
                                    <p class="card-text">Le secrétaire est responsable de la documentation et de la tenue des archives de l'association. Il rédige les procès-verbaux des réunions, gère la correspondance officielle et maintient à jour la liste des membres.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="list-item-4" class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/7.png" class="img-fluid rounded-start" alt="trésorier" title="trésorier">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <p class="marqueur">Nkosana Jeanne</p>
                                    </h5>
                                    <p class="card-text">Le trésorier est chargé de la gestion financière de l'association. Il tient à jour les registres financiers, supervise les dépôts et retraits d'argent, prépare les rapports financiers et présente les budgets aux membres lors des réunions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="list-item-5" class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/6.png" class="img-fluid rounded-start" alt="membres actifs" title="membres actifs">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <p class="marqueur">500 membres actifs</p>
                                    </h5>
                                    <p class="card-text">Les membres actifs forment une communauté engagée et dynamique qui travaille ensemble pour promouvoir les valeurs et les objectifs de l'association, et qui contribue à son succès à long terme.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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