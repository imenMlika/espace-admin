
// sécuriser la connexion 

<?php
session_start();
if(!$_SESSION['user']){
    header('Location: connexion.php');
    exit();
}
?>

<html>
    <head>
        <title>Home</title>

    </head>

    <body>
        <a href="membres.php"> Afficher tous les memebres </a> 
    </body>


</html>