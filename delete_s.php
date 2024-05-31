 <?php
    // connexion server 
    $servername = "localhost";
    $username = "root";
    $server_pass = "";
    $db_name = "archeoit";



    $connect = mysqli_connect($servername, $username, $server_pass, $db_name);

    if (isset($_GET['delete'])) {
        $userid = $_GET['delete'];

        $query = "DELETE FROM stages WHERE id = {$userid}";
        $delete_query = mysqli_query($connect, $query);
        header("Location: dashboard_stage.php");
    }
    ?>