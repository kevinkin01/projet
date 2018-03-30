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
<h2>présentation d'un tuto GIT-Pull-PUSH</h2>

<br>
<h4 id="push">PUSH</h4>
<br>
<p>Le Push sert a déposer un ou plusieurs fichiers de notre ordinateur sur Git hub</p>
<p class="git"> 1 - télécharger git sur </p><a class="lien" href="https://git-scm.com/downloads">https://git-scm.com/downloads</a>
<p> 2 - aller dans le répertoire concerné et faites un click droit puis aller sur git bash</p>
<p> 3 - vous devriez tomber sur ça :</p>
<p> 4 - commencer par faire un git init</p>
<p> 5 - un dossier.git devrait apparaître</p>
<p> 6 - s'il apparaît  pas aller sur affichage et cochez éléments masqué </p>
<p> 7 - normalement, il devrait apparaître</p>
<p> 8- puis sur le terminal mettez la commande git commit -m "votre commentaire" cela permet d'avoir un commentaire a coté de vos ficher sur git hub</p>
<p> 9 - tapez git remote add origin "le lien de votre répertoire git hub"</p>
<p> 10 - pour terminer tapez git push -u origin master</p>
<p> Voici le résultat obtenu</p>

<br>
<h4 id="pull">PULL</h4>
<br>
<p>Le push sert à prendre des fichiers déposés sur git hub et les mettre sur notre ordinateur</p>
<p> -1 les 6 première étape son les même que pour le Push voir au dessus</p>
<p> -2 tapez git remote add origin "le lien de votre répertoire git hub" </p>
<p> -3 tapez git add . pour ajouter les fichiers</p>
<p> -4 tapez git pull origin master</p>
<p> -5 voici le résultat obtenu</p>
<br>
</body>
</html>
