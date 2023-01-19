<?php
namespace Models;

class Commentaire extends Post{
    public $id;
    public $id_article;
    public $id_utilisateur;

    function __construct($id, $description, $auteur, $date_publication, $id_admin){
        super($description, $auteur, $date_publication, $id_admin);
        $this->id = $id;  
        $this->id_article = $id_article;  
        $this->id_utilisateur = $id_utilisateur;  
    }

}



?>