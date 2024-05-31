    <!-- code php -->
    <?php

    session_start(); // Démarrage de la session

    $message = ''; // message d'erreur

    // Informations de connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $server_pass = "";
    $db_name = "archeoit";

    $connect = mysqli_connect($servername, $username, $server_pass, $db_name);

    if (!empty($_POST)) {
        $email = $_POST["email"];
        $mdp = md5($_POST["mdp"]);
        if (empty($email) || empty($mdp)) {
            $message = "Veuillez saisir vos parametres de connexion";
        } else {



            $req = mysqli_query($connect, "SELECT email, mdp from admin where email='$email' && mdp = '$mdp'");


            $nbre_ligne = mysqli_num_rows($req);


            if ($nbre_ligne == 1) {
                $req = mysqli_query($connect, "select email, mdp from admin where email='$email' && mdp = '$mdp'");


                if ($ro = mysqli_fetch_object($req)) {


                    $_SESSION['id'] = $ro->id;
                    $_SESSION['email'] = $ro->email;



                    header('location:dashboard_contact.php');
                }
            } else {
                $message = "Erreur : mauvais email ou mot de passe incorrecte";
            }
        }
    }

    ?>


    <!-- fin php -->



    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/admin.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title id="pageTitle">Connexion</title>
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
                            <li class="nav-item ">
                                <a class="nav-link" href="site_fouine.php">Sites de fouines</a>
                            </li>
                            <li class="nav-item ">
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
                            <li class="nav-item active">
                                <a href=" admin.php" class="nav-link">Connexion</a>

                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- <div class="titre-banner">
            <h1>Titre de la bannière</h1>
            <p>Description de la bannière...</p>
        </div> -->

            <!-- Fin header -->

            <!-- Debut body -->
            <!-- Header -->

            <!-- body -->

            <head>
                <link rel="stylesheet" href="style.css">
            </head>
            <div class="container-fluid">
                <!-- En-tête de la page -->
                <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
                    <!-- Contenu du menu -->
                </nav>

                <!-- Contenu principal de la page -->
                <div class="block">
                    <div class="under-block">
                        <div class="container mt-5">
                            <div class="big-block">
                                <!-- Formulaire de connexion -->
                                <form action="" method="post">
                                    <h2 class="text-center"> Veuillez vous <span class="marqueur">connecter</span></h2>

                                    <label><b>Email :</b></label>
                                    <input type="text" placeholder="Entrer le nom d'utilisateur" name="email" required>

                                    <label><b>Mot de passe :</b></label>
                                    <input type="password" placeholder="Entrer le mot de passe" name="mdp" required>

                                    <input type="submit" id='submit' value='LOGIN'>
                                    <!-- Affichage du message d'erreur -->
                                    <tr>
                                        <td colspan="2"><?php echo $message; ?></td>
                                    </tr>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br><br><br><br><br><br><br><br>
                
                <!-- Pied de page -->
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
            </div>

            <!-- Scripts JavaScript -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>

    </html>