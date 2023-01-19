<?php
namespace Models;

class Article extends Post{
    public $id;
    public $titre;
    public $image;

    function __construct($id, $titre, $image, $description, $auteur, $date_publication, $id_admin){
        super($description, $auteur, $date_publication, $id_admin);
        $this->id = $id;  
        $this->titre = $titre;
        $this->image = $image;
    }

}


?>