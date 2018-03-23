<?php
/**
 * Gestion des catégories
 */

function listCateg($db){
    $sql = "SELECT idcateg, name FROM categ ORDER BY idcateg ASC;";
    $recup = mysqli_query($db,$sql);
    // si on a au moins une catégorie
    if(mysqli_num_rows($recup)){
        // on envoie le tableau indexé contenant tous les résultats au format tableau associatif (MYSQLI_ASSOC)
        return mysqli_fetch_all($recup,MYSQLI_ASSOC);
    }else{
        return false;
    }

}