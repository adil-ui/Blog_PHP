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
}

?>