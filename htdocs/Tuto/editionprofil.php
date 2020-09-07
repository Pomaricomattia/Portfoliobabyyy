<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre;port=3306','root','');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_SESSION['id']) AND $_GET['id'] > 0)
{
    $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?")
    $requser->execute(array($_SESSION['id']))
    $user = $requser->fetch()

        if(isset($_POST['newpseudo']) AND !empty($_POS['newpseudo']) AND $_POST['newpseudo']!= $user['pseudo']){
            
            $newpseudo = htmlspecialchars($_POST['newpseudo']);
            $insertpseudo = $bdd->prepare("UPDATE membres SET pseudo = ? WHERE id = ?");
            $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
            header('Location: profil.php?id='.$_SESSION['id']);
        }
        
        if(isset($_POST['newmail']) AND !empty($_POS['newmail']) AND $_POST['newmail']!= $user['pseudo']){
            
        
            $newmail = htmlspecialchars($_POST['newmail']);
            $insertmail = $bdd->prepare("UPDATE membres SET mail = ? WHERE id = ?");
            $insertmail->execute(array($newmail, $_SESSION['id']));
            header('Location: profil.php?id='.$_SESSION['id']);
        }
         
        if(isset($_POST['newmdp']) AND !empty($_POS['newmdp']) isset($_POST['newmdp2']) AND !empty($_POS['newmdp2'])){
            
            $mdp1 = sha1($_POST['newmdp1']);
            $mdp2 = sha1($_POST['newmdp2']);

            if($mdp1 == $mdp2)
            {
                $insertmdp = $bdd->prepare("UPDATE membres SET motdepasse = ? WHERE id=");
                $insertmdp->execute(array($mdp1, $_SESSION['id']));
                header('Location: profil.php?id='.$_SESSION['id']);
            }
            else{
                $msg = "Vos deux mot de passe ne correspondent pas! " ;
            }
        }
        if(isset($_POST['newpseudo']) AND $_POST['newpseudo']) == $user['pseudo']){
            header('Location: profil.php?id='.$_SESSION['id']);

        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link type="text/css" href="style.css" rel="stylesheet">
    <title>Profil</title>
</head>
<body>
    <div align="center" > 
    <h2>Edition de mon profil?></h2>
    <form mehtod="POST" action=" ">
    <label>Pseudo:</label>
    <input type="text" name="newpseudo" Placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>" />
    <label>Email:</label>
    <input type="mail" name="newmail" Placeholder="Mail"  value="<?php echo $user['mail']; ?>"/>
    <label>Mot de passe </label>
    <input type="password" name="mdp" Placeholder="Mot de passe" />    
    <label>Confirmez mot de passe </label>
    <input type="password" name="mdp2" Placeholder="Confirmez mot de passe"/>
    <input type="Submit" value="validez le changement" />


    </form>
     <?php if(isset($msg)) {echo $msg;} ?>
    
    </div>
</body>
</html>   <?php
    }
    else{
        header("Location: Connexion.php")
    }
    ?>