<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre;port=3306','root','');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['formconnexion']))
{
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);
    if(!empty($mailconnect) AND !empty($mdpconnect))
    {
        $requser = $bdd->prepare("SELECT * FROM membres WHERE Mail = ? AND mdp = ? ");
        $requser->execute(array($mailconnect, $mdpconnect));
        $userexist = $requser->rowCount();
        if($userexist == 1)
        {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['mail'] = $userinfo['mail'];
            header("Location: Profil.php?id=".$_SESSION['id']);
        }
        else
        {
            $erreur = "Mauvais mail ou mot de passe ";
        }
    }
    
    else
    {
        $erreur = "Tous les champs doivent être complétés !";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link type="text/css" href="style.css" rel="stylesheet">
    <title>Connexion</title>
</head>
<body>
    <div align="center" > 
    <h2>Connexions</h2>
    <div  class="cadre" > 

    <form method="POST" action=""> 
        <input type="email" name="mailconnect" placeholder="Mail":>
        <input type="password" name="mdpconnect" placeholder="Mot de passe"/>
        <input type="hidden" name="formconnexion" value="Inscription"/>
        <input type="submit"  value="Se connecter"/>
    </form>
    </div>  
    <?php
    var_dump($_POST);
    if(isset($erreur))
    {
        echo $erreur;
    }
    ?>
    
    </div>
</body>
</html>