<?php
$idcontact = (int) $_GET["categ"];

// si on a tenté de nous attaquer
if($idcontact===0){
    // on redirige vers un site externe avec header("location: url d'un site")
    header("Location: https://fr.wiktionary.org/wiki/d%C3%A9chet");
    die();
}

$menu = listCateg($mysqli);

require_once "v/contact.html.php";