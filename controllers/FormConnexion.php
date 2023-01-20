<?php
use Models\User;
include '../Database.php';

try {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST['email']) && !empty($_POST['mot_passe'])){
            $email = $_POST['email'];
            $mot_passe = $_POST['mot_passe'];
            $user = User::check($email, $mot_passe, $con);
            if($user) {
                $_SESSION['id'] = $user['id'];
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
                $_SESSION['role'] = $user['role'];
                header('Location: admin');
            } else{
                $_SESSION['error_msg'] = "Erreur lors de l'envoi";
                include '../views/SeConnecter.php';
            }
        }
        else{
            $_SESSION['error_msg'] = "Erreur lors de l'envoi";
            include '../views/SeConnecter.php';
        }

    }else{
        if(isset($_SESSION['error_msg'])) {
            unset($_SESSION['error_msg']);
        }
        include '../views/SeConnecter.php';
    }

    
    
} catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
  }
?>