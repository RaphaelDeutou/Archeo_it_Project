<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/membres.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title id="pageTitle">Contacts</title>
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
                        <li class="nav-item ">
                            <a class="nav-link" href="membres.php">Membres</a>
                        </li>
                        <li class="nav-item active">
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

        <img src="images/banniere_s.jpg" class="object-fit-cover" id="banner" width="100%" height="auto">

        <!-- <div class="titre-banner">
            <h1>Titre de la bannière</h1>
            <p>Description de la bannière...</p>
        </div> -->

        <!-- Fin header -->

        <!-- Debut body -->
        <!-- Debut nos activites stages-->
        <div class=" d-flex justify-content-center">
            <h2 class="titre-1-c mb-4 mt-4">NOUS <span class="marqueur"> CONTACTER</span></h2>
        </div>
        <div class="contact">
            <form class=" row d-flex justify-content-center col-md-8" action="confirmation.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom : </label>
                    <input type="text" name="nom" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Prenom : </label>
                    <input type="text" name="prenom" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email : </label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Message : </label>
                    <textarea name="messages" class="form-control" cols="30" rows="5"></textarea>

                </div>
                <input class="mb-4 doc" type="submit" value="Envoyer">
            </form>
        </div>

        <!-- Formulaire stagiaire -->
        <div class=" d-flex justify-content-center">
            <h2 class="titre-1-c mb-4 mt-4">FORMULAIRE <span class="marqueur"> STAGE</span></h2>
        </div>
        <div class="contact">
            <form class=" row d-flex justify-content-center col-md-8 mb-5" action="confirmation_stage.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom : </label>
                    <input type="text" name="nom_s" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Prenom : </label>
                    <input type="text" name="prenom_s" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email : </label>
                    <input type="email" name="email_s" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date de naissance : </label>
                    <input type="date" name="date_s" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" value="Enfant" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Stage pour enfants
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="Adulte" type="radio" checked name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Stage pour adultes
                    </label>
                </div>

                <select class="form-select mb-3" name="stage_choix" aria-label="Default select example">
                    <option selected>Choisissez votre stage</option>
                    <option value="Archéo-Explorateurs en Herbe">Archéo-Explorateurs en Herbe</option>
                    <option value="Explorateurs du Passé">Explorateurs du Passé</option>
                    <option value="Archéo-Immersion">Archéo-Immersion</option>
                    <option value="Archéo-Découverte">Archéo-Découverte</option>
                </select>
                <div class="mb-3">
                    <label for="exampleInputEmail1 mb-3" class="form-label">Message : </label>
                    <textarea name="messages_choix" class="form-control" cols="30" rows="5"></textarea>

                </div>
                <input class="mb-4 doc" type="submit" value="Envoyer">
            </form>
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
        <div class="row">
            <p></p>
        </div>



        <!-- Fin footer -->




        <!-- Fin body -->


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">

    </script>
</body>

<style>
    .contact {
        display: flex;
        justify-content: center;
    }

    .doc {
        border-radius: 5px;
        background-color: #4863A0;
        text-decoration: none;
        color: white;
        padding: 8px;

    }

    form {
        background-color: #bfcbe7;
padding: 30px;

        
    }
</style>



</html>