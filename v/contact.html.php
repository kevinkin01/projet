
<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="public/css/contact.css" />
    <script type="text/javascript" language="JavaScript" src="public/jquery.min.js"></script>
    <title>Contact</title>
    <script type="text/javascript">

            $("#envoyer").click(function () {
                valid=true;
                if ($("#nom").val()==""){
                    $("#nom").css("border-color","#ff0000");
                    $("#nom").next(".error-message").text("champ pas valide");
                    return false;
                    valid=false;
                }else {
                    $("#nom").css("border-color","#00ff00");

                }

                if  ($("#email").val()==""){
                    $("#email").css("border-color","#ff0000");
                    $("#email").next(".error-message").text("champ pas valide");
                    return false;
                    valid=false;
                }else {
                    if (!$("#email").val().match("/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i")){
                        $("#email").css("border-color","#ff0000");
                        $("#email").next(".error-message").text("veuillez entrer un email valide");
                        return false;
                        valid = false;

                    }else{
                        $("#email").css("border-color","#00ff00");
                    }}

                    if  ($("#message").val()==""){
                        $("#message").css("border-color","#ff0000");
                        $("#message").next(".error-message").text("veuillez entrer un message");
                        valid=false;
                        return false;
                    }else{
                        $("#message").css("border-color","#00ff00");

                    }
                });

    </script>


</head>
<?php
if (!empty($_POST)){
    extract($_POST);
    $valid =true;
    if (empty($nom)){
        $valid=false;
        $erreurnom="vous n'avez pas rempli votre nom";
    }
    if (!preg_match("/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i",$email)) {
        $valid=false;
        $erreuremail="votre email n'est pas valide ";
    }

    if (empty($email)){
        $valid=false;
        $erreuremail="vous n'avez pas rempli votre email";
    }

    if (empty($message)){
        $valid=false;
        $erreurmessage="vous n'avez pas rempli votre message";
    }

    if ($valid){
        $to ="kevinkinanga41@gmail.com";
        $sujet = $nom." a contacté du site";
        $header = "from: $nom <$email> \n";
        $header .= "reply-to: $email";
        $message = stripcslashes($message);
        $nom = stripcslashes($nom);
        if(mail($to,$sujet,$message,$header)){
            $correct = "votre message nous est bien parvenu";
            unset($nom);
            unset($email);
            unset($message);

        }
        else{
            $erreur = "une erreur est survenue veuillez réesseyer";
        }
    }
}
?>
<body>
<?php
include "header.html.php";
include "menu.html.php";
?>
<main role="main">
    <div class="jumbotron">
        <div class="container">
            <h1>Contact</h1>
        </div>
    </div>
</main>
<?php
if (isset($erreur)){
    echo "<p>$erreur</p>";
}if (isset($correct)){
    echo "<p>$correct</p>";
}
?>
<form method="post" action="">
    <label for="nom" class="nom">Nom :</label>
    <input type="text" name="nom" id="nom" value="<?php if (isset($nom)){echo $nom;} ?>"/>
    <span class="error-message"><?php if (isset($erreurnom)){echo $erreurnom;} ?></span>

    <label for="email" class="email">E-mail :</label>
    <input type="email" name="email" id="email" value="<?php if (isset($email)){echo $email;} ?>"/>
    <span class="error-message"><?php if (isset($erreuremail)){echo $erreuremail;} ?></span>

    <label for="message" class="message">Votre message :</label>
    <textarea name="message" id="message"<?php if (isset($message)){echo $message;} ?> ></textarea>
    <span class="error-message"><?php if (isset($erreurmessage)){echo $erreurmessage;} ?></span>

    <input type="submit" value="Envoyer" id="envoyer"/>

</form>
</body>
</html>