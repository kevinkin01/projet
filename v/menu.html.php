<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="./">Kevin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="./">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <?php
        foreach ($menu as $m) {
            ?>
            <li class="nav-item">
            <a class="nav-link" href="?categ=<?=$m['idcateg']?>"><?=$m['name']?></a>
            </li>
            <?php
        }
            ?>
        </ul>
        <a class="btn btn-outline-secondary" href="v/login.php">Connexion</a>
    </div>
</nav>