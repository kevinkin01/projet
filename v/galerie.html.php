<?php include_once "header.html.php";

?>
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
            var URLgrandephoto = URLvignette.substr(0,(URLvignette.length - 4)) + "_grand.png";
            console.log(URLgrandephoto);
            /* Modifier l'attribut src de la grande photo */
            var grandePhoto = document.querySelector("#grandephoto img");
            grandePhoto.setAttribute("src", URLgrandephoto);
            grandePhoto.setAttribute("alt", imageCliquee.alt);

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
<?php
include "menu.html.php"
?>
<body>
<div id="global">

    <section id="vignettes">
        <ul>
            <li><img src="datas/images/pendu.png" alt="Pendu" width="128px" height="220px" onclick="afficheGrandePhoto(this);" /></li>
            <li><img src="datas/images/admin.png" alt="Admin" width="121px" height="68px" onclick="afficheGrandePhoto(this);"/></li>
            <li><img src="datas/images/geo.png" alt="Geo" width="128px" height="72px" onclick="afficheGrandePhoto(this);" /></li>
           >
        </ul>
    </section>
    <section id="grandephoto">
        <img src="datas/images/pendu_grand.png" alt="pendu" width="512" height="777" />

    </section>
</div>
</body>
</html>
