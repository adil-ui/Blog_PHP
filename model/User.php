<?php
namespace Models;

class User extends Model {
    protected $id;
    protected $nom;
    protected $prenom;
    protected $email;
    protected $mot_passe;
    protected $role;

    public function __construct($id,$nom, $prenom, $email, $mot_passe, $role){
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mot_passe = $mot_passe;
        $this->role = $role;
    }
    public static function check($email, $mot_passe, $con){
        $sql = "SELECT * FROM utilisateur  WHERE email = ?";
        $stmt= $con->prepare($sql);
        $stmt->execute([$email]);
        $rows = $stmt->rowCount();
        if($rows > 0){
            $user = $stmt->fetchAll()[0];
            if(password_verify($mot_passe, $user['mot_passe'])){
                return $user;
            }
            return false;
        } else{
            return false;
        }
    }
}

?>