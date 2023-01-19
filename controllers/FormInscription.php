<?php
include '../Database.php';
use Models\User;

session_start();
try {
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!empty($_POST['email']) && !empty($_POST['mot_passe'])  && !empty($_POST['nom']  && !empty($_POST['prenom']))){
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $email = $_POST['email'];
      $mot_passe = $_POST['mot_passe'];
      User::create('utilisateur',['prenom', 'nom', 'email','mot_passe'], [$prenom, $nom, $email, $mot_passe], $con);
      header('Location: home');
    } else {
      $_SESSION['error_msg'] = "Erreur lors de l'envoi";
      include '../views/Inscription.php';

    }
  }
  else {
    if(isset($_SESSION['error_msg'])) {
      unset($_SESSION['error_msg']);
    }
    include '../views/Inscription.php';
  }
  
    
}  catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
  }
  
?>