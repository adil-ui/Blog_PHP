<?php
include '../Database.php';
use Models\User;
try {
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!empty($_POST['email']) && !empty($_POST['mot_passe'])  && !empty($_POST['nom']  && !empty($_POST['prenom']))){
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $email = $_POST['email'];
      $mot_passe = password_hash(trim($_POST['mot_passe']), PASSWORD_DEFAULT);
      try {
        User::create('utilisateur',['prenom', 'nom', 'email','mot_passe', 'role'], [$prenom, $nom, $email, $mot_passe, 'user'], $con);
        header('Location: connection');
      } catch(PDOException $e){
      $_SESSION['error_msg'] = "Erreur lors de l'envoi";
        echo "Erreur : " . $e->getMessage();
      }
      
    } else {
      $_SESSION['error_msg'] = "Vueillez Remplir tous les champs";
      include '../views/Inscription.php';
    }
  }
  else {
    if(isset($_SESSION['error_msg'])) {
      unset($_SESSION['error_msg']);
    }
    include '../views/Inscription.php';
  }
}catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
  }
  
?>