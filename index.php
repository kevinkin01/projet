<?php
/**
 * Contrôleur frontal
 */

// lancement de session
session_start();

// récupération du fichier de configuration
require_once "config.php";

// connexion à la db dans $mysqli
require_once "m/ConnectDBModel.php";


// si nous sommes connectés
if(isset($_SESSION['myKey'])){
    require_once "c/AdminController.php";

// sinon on appel le contrôleur public
}else{
    require_once "c/PublicController.php";

}

if(empty($_GET)){
    require_once "c/PublicController.php";


}elseif(isset($_GET['categ'] )&& $_GET['categ']==4){
    require_once "c/ContactController.php";

}elseif (isset($_GET['categ'] )&& $_GET['categ']==3){
    require_once "c/GalerieController.php";

}elseif(isset($_GET['categ'] )&& $_GET['categ']==1){
require_once "c/LiensController.php";

}elseif (isset($_GET['categ'] )&& $_GET['categ']==2) {
    require_once "c/CVController.php";

}
else{
    require_once "c/PublicController.php";
}