<?php
/**
 * Contrôleur public
 */

// chargement des modèles
require_once "m/categModel.php";
require_once "m/newsModel.php";

// on charge les données du menu du head
$menu = listCateg($mysqli);

/*
 * si on est sur l'accueil
 */

// chargement des articles pour l'accueil
$articles = listNews($mysqli);
// chargement de la vue
require_once "v/accueil.html.php";