<?php
use Models\Article;
include '../Database.php';
try {
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!empty($_POST['titre']) && !empty($_POST['image'])  && !empty($_POST['description']) && !empty($_POST['auteur'])){
      $titre = $_POST['titre'];
      $image = $_POST['image'];
      $description = $_POST['description'];
      $auteur = $_POST['auteur'];
      $date_publication = date('Y-m-d');
      $id_admin = 1;
      Article::create('article',['titre', 'image', 'description','auteur', 'date_publication', 'id_admin'], [$titre, $image, $description,$auteur, $date_publication, $id_admin], $con);
      $_SESSION['success_msg'] = "evoi avec succès";
      header('Location: home'); 
    } else {
      $_SESSION['error_msg'] = "Erreur lors de l'envoi";
      include '../views/addArticle.php';     
    }
  }
  else{
    if(isset($_SESSION['error_msg'])) {
      unset($_SESSION['error_msg']);
    }
    include '../views/addArticle.php';

  }
  
    
}  catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
  }
  
?>