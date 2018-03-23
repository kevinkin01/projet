<?php
/**
 * fonctions liées à la table news
 */

function listNews($db){
    $sql="SELECT n.idnews, n.title, SUBSTR(n.content, 1, 220) AS content, n.publication, GROUP_CONCAT(c.idcateg) AS idcateg, GROUP_CONCAT(c.name SEPARATOR '_€.€_') AS name 
	FROM news n
		LEFT JOIN news_has_categ h
			ON h.news_idnews = n.idnews
		LEFT JOIN categ c
			ON h.categ_idcateg = c.idcateg
    WHERE n.visible=1
    GROUP BY n.idnews;";
    $recup = mysqli_query($db,$sql);
    if(mysqli_num_rows($recup)){
        return mysqli_fetch_all($recup,MYSQLI_ASSOC);
    }else{
        return false;
    }
}