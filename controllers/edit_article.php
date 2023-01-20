<?php
use Models\Article;
include '../Database.php';
try {
$id_article = $_GET['id'];
$article = Article::getById('article', $id_article, $con);
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!empty($_POST['titre']) && !empty($_POST['image'])  && !empty($_POST['description'])){
      $titre = $_POST['titre'];
      $image = $_POST['image'];
      $description = $_POST['description'];
      $auteur = $_SESSION['prenom'] . " " . $_SESSION['nom'];
      $date_publication = date('Y-m-d');
      $id_admin = 1;
      
      Article::update('article',['titre', 'image', 'description','auteur', 'date_publication', 'id_admin'], [$titre, $image, $description,$auteur, $date_publication, $id_admin], $id_article, $con);
      $_SESSION['success_msg'] = "envoi avec succès";
      header('Location: admin'); 
    } else {
      $_SESSION['error_msg'] = "Erreur lors de l'envoi";
      include '../views/edit_article.php';     
    }
  }
  else{
    if(isset($_SESSION['error_msg'])) {
      unset($_SESSION['error_msg']);
    }
    include '../views/edit_article.php';

  }
  
    
}  catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
  }
  
?>