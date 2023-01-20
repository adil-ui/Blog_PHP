<?php 
use Models\Article;
include '../Database.php';

$id_article = $_GET["id"];
Article::delete('article',$id_article, $con);
header('Location: admin')
?>