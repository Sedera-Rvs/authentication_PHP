<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espaces_membres;','root','');

if(isset($_GET['id']) AND !empty($_GET['id'])){
    echo "coucou";
}else{
    echo "tsy coucou";
}

?>