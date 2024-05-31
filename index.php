<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title id="pageTitle">Accueil</title>
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
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Accueil</span></a>
                        </li>
                        <li class="nav-item">
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

        <video autoplay muted loop class="object-fit-cover" id="video-banner" width="100%" height="auto">
            <source src="videos/banner-1.mp4" type="video/mp4">non supporte par votre navigateur
        </video>

        <!-- <div class="titre-banner">
            <h1>Titre de la bannière</h1>
            <p>Description de la bannière...</p>
        </div> -->

        <!-- Fin header -->


        <!-- Debut body -->
        <!-- Debut a propos de nous -->
        <div class="row d-flex " id="block-2">
            <div class="col-md-5 ">
                <h2 class="titre-1">QUI SOMMES-<span class="marqueur"> NOUS ?</span></h2>
                <p>Fondée en 1994, l'association "<b>Archéo-IT</b>" est le fruit de la passion commune de quelques archéologues et passionnés d'histoire pour
                    la préservation et la valorisation du patrimoine archéologique français. Depuis sa création, notre association s'est engagée dans des missions variées, allant de la participation à des fouilles de sites historiques à la publication de revues scientifiques reconnues.
                </p>
            </div>
            <img class=" img-fluid col-md-4 " alt="image qui sommes nous" title="qui sommes nous" src="images/presentation.jpg">

        </div>
        <!-- Fin a propos de nous -->

        <!-- Debut nos activites -->
        <div class="row  " id="block-3">
            <h2 class="titre-2 col-md-10">NOS<span class="marqueur"> ACTIVITES</span></h2>
            <div class="card-group row d-flex justify-content-center col-md-10 space-between">
                <div class="card" id="c">
                    <img src="images/fouille.png" class="card-img-top" alt="fouille" title="fouille archeologique">
                    <div class="card-body">
                        <h5 class="card-title"><b class="marqueur">Participation à des fouilles archéologiques</b></h5>
                        <p class="card-text">Notre équipe d'archéologues experts collabore avec diverses institutions et organismes pour mener des fouilles sur des sites historiques à travers la France. Nos recherches ont permis de découvrir et de documenter des vestiges datant de différentes époques, contribuant ainsi à enrichir notre compréhension de l'histoire.</p>
                    </div>
                </div>
                <div class="card" id="c">
                    <img src="images/scientifique.png" class="card-img-top" alt="scientifique" title="scientifiques">
                    <div class="card-body">
                        <h5 class="card-title"><b class="marqueur">Mise à disposition de scientifiques pour l'INRAP</b></h5>
                        <p class="card-text">En partenariat avec l'Institut National de Recherches Archéologiques Préventives (INRAP), nous mettons à disposition notre expertise pour soutenir les projets de recherche et de préservation du patrimoine archéologique national.</p>
                    </div>
                </div>
                <div class="card" id="c">
                    <img src="images/conference.png" class="card-img-top" alt="conference" title="conference">
                    <div class="card-body">
                        <h5 class="card-title"><b class="marqueur">Organisation de conférences</b></h5>
                        <p class="card-text">Nous organisons régulièrement des conférences ouvertes au public, animées par des experts dans divers domaines de l'archéologie. Ces événements permettent de partager nos découvertes, d'échanger des idées et de sensibiliser le public à l'importance de la préservation du patrimoine.</p>
                    </div>
                </div>
            </div>

            <div class="card-group row d-flex justify-content-center col-md-10 space-between">
                <div class="card" id="c">
                    <img src="images/revu.png" class="card-img-top" alt="revue" title="revue">
                    <div class="card-body">
                        <h5 class="card-title t-activite"><b class="marqueur">Publication de revues scientifiques</b></h5>
                        <p class="card-text"> Nos membres contribuent activement à la rédaction et à la publication de revues scientifiques spécialisées dans l'archéologie et l'histoire. Ces publications fournissent une plateforme pour la diffusion de recherches académiques et de découvertes importantes.</p>
                    </div>
                </div>
                <div class="card" id="c">
                    <img src="images/voyage.png" class="card-img-top" alt="voyage" title="voyage">
                    <div class="card-body">
                        <h5 class="card-title"><b class="marqueur">Organisation de voyages archéologiques</b></h5>
                        <p class="card-text">Parcourez les terres chargées d'histoire avec nos voyages archéologiques guidés. Immergez-vous dans le passé en visitant des sites emblématiques, en explorant des musées et en participant à des ateliers interactifs animés par nos experts. Que vous soyez passionné par l'Égypte ancienne, la Grèce antique ou les civilisations mésoaméricaines, nos voyages vous offrent une expérience unique pour découvrir les trésors de l'humanité.</p>
                    </div>
                </div>
                <div class="card" id="c">
                    <img src="images/education.png" class="card-img-top" alt="education" title="education">
                    <div class="card-body">
                        <h5 class="card-title"><b class="marqueur">Éducation et sensibilisation</b></h5>
                        <p class="card-text">Nous croyons en l'importance de l'éducation et de la sensibilisation du public à l'archéologie et à la préservation du patrimoine. À travers des programmes éducatifs et des initiatives de sensibilisation, nous travaillons avec les écoles, les universités et les communautés locales pour partager notre passion pour l'histoire et l'archéologie. </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- Fin nos activites -->

        <!-- Debut nos stages -->
        <div class="row d-flex " id="block-4">
            <img class=" img-fluid col-md-5 " alt="stage" src="images/stage_img.jpg" title="stage">
            <div class="col-md-6 ">
                <h2 class="titre-3">NOS<span class="marqueur"> STAGES</span></h2>
                <p class="c-stage">Découvrez le monde fascinant de l'archéologie à travers nos stages d'expérimentation, conçus pour les amateurs et les passionnés de tous âges. Nos stages offrent une immersion complète dans le travail de terrain des archéologues, avec des activités pratiques telles que la fouille, la documentation et l'analyse des découvertes. Que vous soyez un étudiant en archéologie en quête d'expérience pratique ou un amateur curieux désireux de découvrir les secrets du passé, nos stages sont conçus pour vous.

                </p>
            </div>

        </div>
        <!-- Fin nos stages -->

        <!-- Debut nos actualites -->

        <div class="row  " id="block-3">
            <h2 class="titre-2 col-md-10">NOS<span class="marqueur"> ACTUALITES</span></h2>
            <div class="card-group row d-flex justify-content-center col-md-10 space-between">

                <div class="card" id="c">
                    <img src="images/st_denis_11.15_005-min.jpg" class="card-img-top" alt="occupation rurale" title="occupation rurale">
                    <div class="card-body">
                        <h6 class="card-title">
                            </h5><b class="marqueur">Une occupation rurale et une installation monumentale antiques à chamborêt (haute-vienne)</b></h5>
                            <p class="card-text">En amont de travaux sur la RN147 au niveau du tronçon Limoges-Bellac, les archéologues de l’Inrap ont fouillé une surface de 8800m2 et mis en évidence une occupation antique agropastorale et les indices d'une monumentalisation atypique dès le IIIe siècle, autour d’un captage de source. Le site apporte une information inédite sur l'évolution du territoire des Lémovices au cours de l'Antiquité tardive. </p>
                    </div>
                </div>
                <div class="card" id="c">
                    <img src="images/espace_f.png" class="card-img-top" alt="espace funéraire" title="espace funéraire">
                    <div class="card-body">
                        <h6 class="card-title">
                            </h5><b class="marqueur">Un espace funéraire médiéval sur les rives du lac léman (haute-savoie)</b></h5>
                            <p class="card-text">L'Archeo-it vient de fouiller une surface de 900 m2 en amont de la restructuration de la RD 1005 et d’un parking desservant les HLM de Haute-Savoie Habitat sur la commune de Publier (Haute-Savoie). Une quarantaine de sépultures ont été mises au jour, attribuées à la période médiévale d’après les découvertes anciennes et les modalités d’inhumation et restant à préciser par des datations radiocarbones .</p>

                    </div>
                </div>
                <div class="card" id="c">
                    <img src="images/tombe.jpg" class="card-img-top" alt="tombes et des bûchers" title="tombes et des bûchers">
                    <div class="card-body">
                        <h6 class="card-title">
                            </h5><b class="marqueur">Des tombes et des bûchers en bord de voies romaines à nîmes (gard)</b></h5>
                            <p class="card-text">À l’occasion de l’aménagement d’une résidence de logements sociaux rue de Beaucaire, l’Inrap a mis au jour les aménagements bordiers de la voie Domitienne ainsi qu’une seconde voie. Leurs abords témoignent d’implantations funéraires (tombes et bûchers) qui s’échelonnent entre les IIe-Ier siècle avant J.-C. et le courant du IIe siècle après J.-C. Un site à découvrir à l'occasion d'une porte ouverte ce 13 avril.</p>
                    </div>
                </div>
            </div>

        </div>


        <!-- Fin nos actualites -->


        <!-- Debut carte 1-->
        <div class="carte1">
            <h2 class="titre-4">SITES DE<span class="marqueur"> FOUINES</span></h2>
            <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-inner ">
                    <div class="carousel-item active ">
                        <img src="images/fouine1.jpg" class="d-flex w-100 " alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/fouine2.jpg" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/fouine3.jpg" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/fouine4.jpg" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/fouine5.jpg" class="d-flex w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Fin carte 1-->
        <!-- Debut carte 2-->

        <div class="carte2">

            <h2 class="titre-4">SITES DE<span class="marqueur"> FOUINES</span></h2>

            <div class="accordion">
                <div class="tab">
                    <img src="images/fouine1.jpg" alt="">
                    <div class="caption">
                        <h2>Grotte du Mas-d'Azil (Ariège)</h2>
                        <p>Grotte préhistorique contenant des peintures et des gravures, ainsi qu'un important site d'habitat.</p>
                    </div>
                </div>
                <div class="tab">
                    <img src="images/fouine2.jpg" alt="">
                    <div class="caption">
                        <h2>Bibracte (Saône-et-Loire)</h2>
                        <p>Site archéologique gaulois comprenant des vestiges de ville, de fortifications et de sanctuaires.</p>
                    </div>
                </div>
                <div class="tab">
                    <img src="images/fouine3.jpg" alt="">
                    <div class="caption">
                        <h2>Puymin (Vaucluse)</h2>
                        <p> Site archéologique de la ville romaine antique d'Orange, comprenant un théâtre bien conservé.</p>
                    </div>
                </div>
                <div class="tab">
                    <img src="images/fouine4.jpg" alt="">
                    <div class="caption">
                        <h2>ascaux (Dordogne)</h2>
                        <p>Célèbre pour ses peintures rupestres préhistoriques, datant d'environ 17 000 ans.</p>
                    </div>
                </div>
                <div class="tab">
                    <img src="images/fouine5.jpg" alt="">
                    <div class="caption">
                        <h2>Le Pont du Gard (Gard)</h2>
                        <p>Aqueduc romain spectaculaire, classé au patrimoine mondial de l'UNESCO.</p>
                    </div>
                </div>
            </div>
        </div>
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