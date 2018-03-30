<?php
include "header.html.php";
session_start();

// variables sous forme de tableaux pour se connecter
$login=["admin"];
$pwd = ["admin"];
$perm = [0,1,2,2];

// si on a cliqué sur connexion (existence des 2 variables post)
if(isset($_POST['lelogin'],$_POST['lepwd'])){

    // pseudo sécurité (pas de db)
    $lelogin = trim($_POST['lelogin']);
    $lepwd = trim($_POST['lepwd']);

    // si le $lelogin est bien dans le tableau $login => utilisateur existant => in_array >> est une valeur dans le tableau
    if(in_array($lelogin,$login)){

        // on met dans la variable clef celle correspondant aux 3 tableaux pour vérifier le mdp
        $key = array_search($lelogin,$login);

        // le mdp correspond au login
        if($lepwd == $pwd[$key]){

            // création de nos variables de session
            $_SESSION['clef'] = session_id(); // id de session dans "clef"
            $_SESSION['nom'] = $lelogin;
            $_SESSION['permission'] = $perm[$key];

            // redirection vers l'accueil
            header("Location: ./");

        }else{
            $affiche = "Mot de passe incorrecte";
        }

    }else{
        $affiche = "Login inconnu!";
    }

}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
<?php
include "menu.html.php";
?>
<form class="form-signin">
    <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Connectez-vous</h1>
    <label for="user" class="sr-only">User</label>
    <input type="email" id="inputuser" class="form-control" placeholder="User" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

</form>
</body>
</html>