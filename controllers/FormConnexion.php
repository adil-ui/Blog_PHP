<?php
include '../Database.php';

try {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST['email']) && !empty($_POST['mot_passe'])){
            $email = $_POST['email'];
            $mot_passe = $_POST['mot_passe'];
            $sql = "SELECT * FROM utilisateur  WHERE email = ? AND mot_passe = ? ";
            $stmt= $con->prepare($sql);
            $stmt->execute([$email, $mot_passe]);
            $rows = $stmt->rowCount();
            if($rows > 0) {
                $res = $stmt->fetchAll();
                $_SESSION['id'] = $res[0]['id'];
                $_SESSION['nom'] = $res[0]['nom'];
                $_SESSION['prenom'] = $res[0]['prenom'];
                header('Location: home');
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