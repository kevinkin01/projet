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
<h2>présentation d'un tuto</h2>
<h3>GIT-Pull-PUSH</h3>

<h4 id="push">PUSH</h4>
<p>le Push sert a deposer un ou plusieurs fichier de notre ordinateur sur Git hub</p>
<p> 1- telecharger git sur </p> <a href="https://git-scm.com/downloads">https://git-scm.com/downloads</a>
<p> 2- aller dans le repertoire concerné et faites un click droit puis aller sur git bash</p>
<p> 3- vous devriez tomber sur ça :</p>
<p> 4- commencer par faire un git init</p>
<p> 5- un dossier .git devrait apparaite</p>
<p> 6- si il apprait pas aller sur afficahge et cochez elements masqué </p>
<p> 7- normalement il devrait apparaitre</p>
<p> 8-  puis sur le terminal mettez la commande git commit -m "votre commentaire" cela permet d'avoir un commentaire a coté de vos ficher sur git hub</p>
<p> 9- tappez git remote add origin "le liens de votre repertoire git hub"</p>
<p> 10- pour terminer tappez git push -u origin master</p>
<p> voici le resultat obtenu</p>


<h4 id="pull">PULL</h4>

<p>le push sert a prendre des fichiers deposés sur git hub et les mettre sur notre ordinateur</p>
<p> -1 les 6 premiere étape son les meme que pour le Push voir au dessus</p>
<p> -2 tappez git remote add origin "le liens de votre repertoire git hub" </p>
<p> -3 tappez git add . pour ajouter les fichiers</p>
<p> -4 tappez git pull origin master</p>
<p> -5 voici le résultat obtenue</p>
</body>
</html>
