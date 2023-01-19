<?php
namespace Models;

class Post extends Model{
    protected $description;
    protected $auteur;
    protected $date_publication;
    protected $id_admin;

    function __construct($description, $auteur, $date_publication, $id_admin){
        $this->description = $description;
        $this->auteur = $auteur;
        $this->date_publication = $date_publication;
        $this->id_admin = $id_admin;
    }

}



?>