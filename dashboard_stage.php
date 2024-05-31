<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/stages.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title id="pageTitle">Dashboard</title>
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
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard_contact.php">Liste contacts</a>
                        </li>
                        <li class="nav-item active ">
                            <a class="nav-link" href="dashboard_stage.php">Liste stages</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php

        // connexion server 
        $servername = "localhost";
        $username = "root";
        $server_pass = "";
        $db_name = "archeoit";



        $connect = mysqli_connect($servername, $username, $server_pass, $db_name);
        ?>

        <!-- <div class="titre-banner">
            <h1>Titre de la bannière</h1>
            <p>Description de la bannière...</p>
        </div> -->
        <div class="row d-flex justify-content-center col-md-12">
            <h2 class="text-center">FORMULAIRE DE <span class="marqueur"> STAGE</span></h2>
            <div class="container ">

                <tr>
                    <td><button class=" btn imprime" onclick="printTable()">Imprimer le tableau</button>
                        <script>
                            function printTable() {
                                var printContents = document.getElementById('myTable').outerHTML;
                                var originalContents = document.body.innerHTML;
                                document.body.innerHTML = printContents;
                                window.print();
                                document.body.innerHTML = originalContents;
                            }
                        </script>
                    </td>

                    <td> <a href="deconnexion.php" id="button" class="btn btn-danger deconnexion">Deconnecter</a></td>

                <tr>
                    <table id="myTable" class="table table-striped table-bordered table-hover ">
                        <thead class="table-dark">


                            <th scope="col">ID</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col"> Email</th>
                            <th scope="col"> Categorie</th>
                            <th scope="col"> Choix de stage</th>
                            <th scope="col"> Message</th>
                            <th scope="col"> Date de naissance</th>


                </tr>
                </thead>
                <tbody>
                    <tr>

                        <?php
                        //  first we check using 'isset() function if the variable is set or not'
                        //Processing form data when form is submitted
                        if (!$connect) {
                            die('Erreur de connection : ' . mysqli_connect_error());
                            exit();
                        } else {
                            /** Recupérer data - SELECT **/
                            /* ma requete*/
                            $requete = "SELECT id, nom_s, prenom_s, email_s, categorie, stage_choix, messages_choix, date_s FROM stages";
                            /* excution de la requete*/
                            $execution = mysqli_query($connect, $requete);
                            /* affichage des données */
                            echo "<form method='post'>";


                            while ($row = mysqli_fetch_array($execution)) {
                                $userid = $row['id'];
                                $nom = $row['nom_s'];
                                $prenom = $row['prenom_s'];
                                $email = $row['email_s'];
                                $categorie = $row['categorie'];
                                $stage_choix = $row['stage_choix'];
                                $messages = $row['messages_choix'];
                                $date = $row['date_s'];



                                echo "<tr >";
                                echo " <td >{$userid}</td>";
                                echo " <td > {$nom}</td>";
                                echo " <td > {$prenom}</td>";
                                echo " <td >{$email} </td>";
                                echo " <td >{$categorie} </td>";
                                echo " <td >{$stage_choix} </td>";
                                echo " <td >{$messages} </td>";
                                echo " <td >{$date} </td>";
                                echo " <td  class='text-center'>  <a href='delete_s.php?delete={$userid}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";


                                echo " </tr> ";
                            }
                        }
                        ?>
                    </tr>
                </tbody>
                </table>

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

<style>
    .imprime {
        border-radius: 5px;
        background-color: #4863A0;
        text-decoration: none;
        color: white;
        padding: 8px;
        margin-bottom: 10px;

    }

    .deconnexion {
        border-radius: 5px;
        background-color: #A63D26;
        text-decoration: none;
        color: white;
        padding: 8px;
        margin-bottom: 10px;

    }

    .imprime:hover {
        background-color: #A63D26;
        color: white;
    }

    .deconnexion:hover {
        background-color: #4863A0;
        color: white;
        border-color: #4863A0;
    }
</style>

</html>

<!-- Footer -->