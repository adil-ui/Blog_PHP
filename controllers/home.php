<?php 
use Models\Article;

session_start();
include '../Database.php';



$rows = Article::getAll('article', $con);
include "../views/home.php";
?>