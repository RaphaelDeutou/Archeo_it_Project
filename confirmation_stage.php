<?php

// connexion server 
$servername = "localhost";
$username = "root";
$server_pass = "";
$db_name = "archeoit";

$categorie = $_POST['flexRadioDefault'];
$stage_choix = $_POST['stage_choix'];
$date_s = $_POST['date_s'];
$nom_s = $_POST['nom_s'];
$prenom_s = $_POST['prenom_s'];
$email_s = $_POST['email_s'];
$messages_choix = $_POST['messages_choix'];


$connect = mysqli_connect($servername, $username, $server_pass, $db_name);
//mysqli_connect(SERVER, LOGIN, PASS, MABDD);
if (!$connect) {
    die('Erreur de connection : ' . mysqli_connect_error());
    exit();
} else {
    /** Requete insertion - INSERT INTO **/
    $insert = "INSERT INTO stages (`nom_s`,`prenom_s`,`email_s`,`categorie`,`stage_choix`,`messages_choix`,`date_s`) VALUES ('$nom_s', '$prenom_s','$email_s','$categorie','$stage_choix','$messages_choix','$date_s')";
    $execution = mysqli_query($connect, $insert);

    if (!$execution) {
        echo "Erreur de requete : " . var_dump($insert);
    }
}
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Confirmation stages</title>
</head>

<body>
    <div class="alert alert-success " role="alert">
        <center>Merci <?php echo "$nom_s"  ?> , votre candidature pour le stage a ete envoye Avec succes</center>
    </div>

    <div class="row  d-flex justify-content-center">
        <a class="col-md-4 doc" href="index.php">Revenir a la page d'accueil</a>

    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    
</script>

</html>

<style>
    .doc {
        border-radius: 5px;
        background-color: #4863A0;
        text-decoration: none;
        color: white;
        padding: 8px;
        display: flex;
        text-align: center;
        justify-content: center;

    }
</style>