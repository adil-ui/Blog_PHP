<?php 
use Models\Article;
use Models\Commentaire;
include '../Database.php';
if(!isset($_GET['id'])) {
  header("location: home");
}

$id_article = $_GET["id"];

$article = Article::getById('article', $id_article, $con);
$comment = Commentaire::getComment($id_article, $con);


try {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      if(!empty($_POST['auteur']) && !empty($_POST['description'])){
        $auteur = $_POST['auteur'];
        $description = $_POST['description'];
        $date_publication = date('Y-m-d');
        $date_publication = date('Y-m-d');
        try {
          Commentaire::create('commentaire',['auteur', 'description', 'date_publication','id_article'], [$auteur, $description, $date_publication, $id_article], $con);
        } catch(PDOException $e){
        $_SESSION['error_msg'] = "Erreur lors de l'envoi";
          echo "Erreur : " . $e->getMessage();
        }
        
      } else {
        $_SESSION['error_msg'] = "Vueillez Remplir tous les champs";
        include '../views/details.php';
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









include "../views/details.php";
?>