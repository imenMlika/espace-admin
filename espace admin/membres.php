<?php

session_start();
$dns='mysql:host=localhost;dbname=espace_admin';
$user='root';
$pwd='Ayimem123456789.';

$pdo= new PDO($dns,$user,$pwd);




if(!$_SESSION['user']){
    header('Location: connexion.php');
    exit();
}
?>

<html>
    <head>
        <title>  Affichage des membres</title>
    </head>

    <body>

    <?php
    $membre_recup= $pdo->query('SELECT * FROM membres');
    while ($user = $membre_recup->fetch()){
        echo $user['pseudo'];
    }



    ?>




    </body>






</html>


