<?php 
use Models\Article;
use Models\User;
include '../Database.php';
if($_SESSION['role'] == 'admin'){
    $articles = Article::getAll('article', $con);

}else{
    $user = User::getById('utilisateur',$_SESSION['id'], $con);

try {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      if(!empty($_POST['email']) && !empty($_POST['mot_passe'])  && !empty($_POST['nom']  && !empty($_POST['prenom']))){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $mot_passe = $_POST['mot_passe'];
        try {
            User::update('utilisateur', ['prenom', 'nom', 'email','mot_passe'], [$prenom, $nom, $email, $mot_passe], $_SESSION['id'], $con);
        } catch(PDOException $e){
            $_SESSION['error_msg'] = "Erreur lors de l'envoi";
          echo "Erreur : " . $e->getMessage();
        }
        
      } else {
        $_SESSION['error_msg'] = "Vueillez Remplir tous les champs";
      }
    }
    else {
      if(isset($_SESSION['error_msg'])) {
        unset($_SESSION['error_msg']);
      }
    }
  }catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
    }
  
}


include "../views/admin.php";
?>