
<?php
session_start();
if (isset($_POST['valider'])){
  if(!empty($_POST['id']) and !empty($_POST['mdp'])){
    $pseudo_par_defaut ='admin';
    $mdp_par_defaut ='admin1234';

    $pseudo_saisi= htmlspecialchars($_POST['id']);
    $mdp_saisi = htmlspecialchars($_POST['mdp']);

    if( $pseudo_saisi == $pseudo_par_defaut and $mdp_saisi ==$mdp_par_defaut) {
        $_SESSION['user']= $mdp_saisi ;
        header('Location: index.php');
        exit();


    }else{
      echo "mot de passe ou pseudo incorrecte";
    }

  }else{
    echo "Completez les deux champs";
  }
}



?>

<div style="display: flex; justify-content: center;">
<form action="" method="POST">

  <div>
    <label for="id">Pseudo</label>
    <input type="text" name="id" >
  </div>

  <div>
    <label for="mdp">MotdePasse</label>
    <input type="password" name="mdp" >
  </div>

  <button type="submit" name="valider">valider</button>
</form>
</div>