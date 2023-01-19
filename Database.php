<?php
$servname = 'localhost';
$dbname = 'blog';
$user = 'root';

try {
    $con =  new PDO("mysql:host=$servname;dbname=$dbname", $user, "");

} catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
  }



