<?php include_once "header.html.php"?>


<html>
</head>
<body>

<?php include "menu.html.php"?>


        <?php

    if(!$articles){
        ?>

        <?php
    }else{
        foreach($articles as $item) {
        ?>
        <h3><?=$item['title']?></h3>
            <h5><?php
            $idcateg = explode(",",$item['idcateg']);
            $name = explode("_€.€_",$item['name']);
            foreach ($idcateg as $key => $id){
                ?>
            <a href="?categ=<?=$id?>"><?=$name[$key]?></a>
                <?php
            }
            ?></h5>
        <p class="text-success"><?=$item['publication']?></p>
        <p><?php
            // on affiche les 220 derniers caractères venant de la requête, on veut éviter de couper un mot, on cherche la dernière position de l'espace strrpos($item['content']," "), et on coupe la chaîne avec substr($chaine, 0, position dernier espace)
            echo substr($item['content'],0,strrpos($item['content']," "));
            ?> ... <a href="?news=<?=$item['idnews']?>">lire la suite</p>
        <hr>
        <?php
        }
    }
    ?>


</body>
</html>
