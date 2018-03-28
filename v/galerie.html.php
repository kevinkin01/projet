<?php include_once "header.html.php"?>
<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="public/css/galerie.css" />
    <title>Galerie</title>
    <script type="text/javascript">
        function afficheGrandePhoto(imageCliquee) {
            /* je récupère dans l'attribut alt de l'image cliquée son nom */
            console.log("afficheGrandePhoto : " + imageCliquee.alt);
            /* URL de la vignette cliquée ? */
            var URLvignette = imageCliquee.getAttribute("src");
            console.log("URL de la photo cliquée : " + URLvignette);
            /* Enlever dans l'URL de ma vignette le "128" et le remplacer par "512" pour avoir l'URL de la grande photo correspondante */
            var URLgrandephoto = URLvignette.substr(0,(URLvignette.length - 7)) + "512.jpg";
            console.log(URLgrandephoto);
            /* Modifier l'attribut src de la grande photo */
            var grandePhoto = document.querySelector("#grandephoto img");
            grandePhoto.setAttribute("src", URLgrandephoto);
            grandePhoto.setAttribute("alt", imageCliquee.alt);
            var titrePhoto = document.querySelector("#grandephoto p");
            titrePhoto.innerHTML = imageCliquee.alt;
        }
    </script>
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1>Galerie</h1>
            </div>
        </div>
    </main>
</head>
<body>
<div id="global">

    <section id="vignettes">
        <ul>
            <li><img src="datas/pendu_petit.png" alt="pendu" width="128" height="96" onclick="afficheGrandePhoto(this);" /></li>
            <li><img src="images/Desert_128.jpg" alt="Desert" width="128" height="96" onclick="afficheGrandePhoto(this);"/></li>
            <li><img src="images/Koala_128.jpg" alt="Koala" width="128" height="96" onclick="afficheGrandePhoto(this);" /></li>
            <li><img src="images/Penguins_128.jpg" alt="Penguins" width="128" height="96" onclick="afficheGrandePhoto(this);" /></li>
            <li><img src="images/Tulips_128.jpg" alt="Tulips" width="128" height="96" onclick="afficheGrandePhoto(this);" /></li>
            <li><img src="images/Tulips_128.jpg" alt="Tulips" width="128" height="96" onclick="afficheGrandePhoto(this);" /></li>
            <li><img src="images/Tulips_128.jpg" alt="Tulips" width="128" height="96" onclick="afficheGrandePhoto(this);" /></li>
            <li><img src="images/Tulips_128.jpg" alt="Tulips" width="128" height="96" onclick="afficheGrandePhoto(this);" /></li>
            <li><img src="images/Tulips_128.jpg" alt="Tulips" width="128" height="96" onclick="afficheGrandePhoto(this);" /></li>
        </ul>
    </section>
    <section id="grandephoto">
        <img src="datas/pendu_petit.png" alt="pendu" width="512" height="384" />

    </section>
</div>
</body>
</html>
<?php
include "menu.html.php"
?>
