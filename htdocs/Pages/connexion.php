<?php
session_start();

include 'config.php';

if(isset($_POST['buttonconexion']))
{
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mdp = sha1($_POST['mdp']);
    if(!empty($pseudo) AND !empty($mdp))
    {
            $requser = $bdd->prepare("SELECT * FROM membres WHERE pseudo = ? AND password = ?");
            $requser->execute(array($pseudo, $mdp));
            $userexist = $requser->rowCount();
            if($userexist == 1)
            {
                $userinfo = $requser->fetch();
                $_SESSION['id'] = $userinfo['id'];
                $_SESSION['pseudo'] = $userinfo['pseudo'];
                header("Location: profil.php?id=".$_SESSION['id']);
            }
            else
            {
                $erreur = "mauvais pseudo ou mdp";
            }
    }
    else
    {
        $erreur = "Tous les champs doivent être remplit !";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Pages/Style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Connexions</title>
</head>
<body>

<div class="container">
  <form method="POST" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Pseudo</label>
    <input type="name" name="pseudo"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="mdp" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Cochez moi</label>
  </div> 
  <button type="submit" name="buttonconexion" class="btn btn-primary">Submit</button>
  </div>
</form>
</body>
</html>