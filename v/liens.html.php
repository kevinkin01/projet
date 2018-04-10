<?php include_once "header.html.php"; ?>
<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="public/css/liens.css" />
    <title>Liens</title>
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1>Liens</h1>
            </div>
        </div>
    </main>
</head>
<body>
<?php
include "menu.html.php"
?>
<h2>Présentation d'un tuto GIT-Pull-PUSH</h2>

<br>
<h4 id="push">PUSH</h4>
<br>
<p><span>Le Push sert a déposer un ou plusieurs fichiers de notre ordinateur sur Git hub</span></p>
<p><span> 1 - télécharger git sur <a href="https://git-scm.com/downloads">https://git-scm.com/downloads</a></span></p>
<p><span> 2 - aller dans le répertoire concerné et faites un click droit puis aller sur git bash</span></p>
<p><span> 3 - vous devriez tomber sur ça :</span></p>
<p><span> 4 - commencer par faire un git init</span></p>
<p><span> 5 - un dossier.git devrait apparaître</span></p>
<p><span> 6 - s'il apparaît  pas aller sur affichage et cochez éléments masqué</span> </p>
<p><span> 7 - normalement, il devrait apparaître</span></p>
<p><span> 8- puis sur le terminal mettez la commande git commit -m "votre commentaire" cela permet d'avoir un commentaire a coté de vos ficher sur git hub</span></p>
<p><span> 9 - tapez git remote add origin "le lien de votre répertoire git hub"</span></p>
<p><span> 10 - pour terminer tapez git push -u origin master</span></p>


<br>
<h4 id="pull">PULL</h4>
<br>
<p><span>Le push sert à prendre des fichiers déposés sur git hub et les mettre sur notre ordinateur</span></p>
<p><span> -1 les 6 première étape son les même que pour le Push voir au dessus</span></p>
<p><span> -2 tapez git remote add origin "le lien de votre répertoire git hub"</span> </p>
<p><span> -3 tapez git add . pour ajouter les fichiers</span></p>
<p><span> -4 pour terminer tapez git pull origin master</span></p>

<br>
<br>
<h2>Critique d'un tuto en ligne </h2>
<br>
<br>
<p>Le tuto que j'ai choisi est sur la concaténation de deux chaines de caractère que vous pouvez trouver sur ce lien <a href="http://www.lephpfacile.com/cours/5-concatener-deux-chaines">http://www.lephpfacile.com/cours/5-concatener-deux-chaines</a>.<br> Ce tuto nous explique comment faire pour concaténer deux chaines de caractère ensemble . Pour des personnes qui débuterai en PHP .<br> J'ai choisi ce tuto car c'est important d'apprendre la concaténation pour la suite . Voici mes critiques sur ce tuto : </p><br>
<p>- ils expliquent pas vraiment le fonctionnement de la concatenation <br> -Un debutant aura du mal a comprendre et a réaliser du premier coups le tuto <br> - Ils auraient du montrer un cas ou on concatène pas pour voir la différence entre les deux</p>



















</body>
</html>
