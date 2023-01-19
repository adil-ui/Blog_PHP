<?php 
use Models\Article;
include '../Database.php';

$rows = Article::getAll('article', $con);
include "../views/home.php";
?>