<?php

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre;port=3306','root','');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['forminscription'])){
        $pseudo = htmlspecialchars($_POST['Pseudo']);
        $mail = htmlspecialchars($_POST['Mail']);
        $mdp = sha1($_POST['mdp']);
        $mdp2= sha1($_POST['mdp2']);

    
    if(!empty($_POST['Pseudo']) AND !empty($_POST['Mail']) AND!empty($_POST['mdp']) AND!empty($_POST['mdp2']))
    {
        

        $pseudolength = strlen($pseudo);
        if($pseudolength <= 255)
        {

              if(filter_var($mail,FILTER_VALIDATE_EMAIL)) {
                  $reqmail = $bdd->prepare("SELECT * FROM membres WHERE Mail = ?");
                  $reqmail->execute(array($mail));
                  $mailexist = $reqmail->rowCount();
                  if ($mailexist == 0) {

              
                if($mdp == $mdp2) {
                    $insertmbr = $bdd->prepare("INSERT INTO membres(Pseudo ,Mail , mdp) VALUES (? , ?, ?)");
                    $insertmbr ->execute(array($pseudo,$mail,$mdp));
                    $_SESSION['comptecree'] = "votre compte a bien été créé";
                    header('Location: ../index.php');
                }
                else {
                $erreur = " Vos mot de passe ne correspondent pas !";
                }   
            }
            else {
                $erreur = "Adresse mail deja utilisée";
            }
                }

                      if ($mdp == $mdp2) {
                          $insertmbr = $bdd->prepare("INSERT INTO membres(Pseudo, Mail, mdp) VALUES (? , ?, ?)");
                          $insertmbr->execute(array($pseudo, $mail, $mdp));
                          $_SESSION['comptecree'] = "votre compte a bien été créé";
                          header('Location: ../index.php');
                      } else {
                          $erreur = " Vos mot de passe ne correspondent pas !";
                      }
                  } else {
                      $erreur = "Adresse mail deja utilisée";
                  }
              }
                
         else {
             $erreur = "Votre adresse mail n'est pas valide !";
         }
    
        else {
            $erreur = "Votre pseudo ne doit pas dépasser 255 caractères";
        }
    }
        else {
        $erreur ="tous les champs doivent être remplis !";
    }






?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link type="text/css" href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div align="center" >
    <h2>Inscriptions</h2>
    <div  class="cadre" >
TEST
    <form method="POST"  action="">
    <table>
    <tr>
    <td>
    <label for="pseudo">Pseudo :</label>
    </td>
    <td>
    <input type="text" placeholder="Votre pseudo" name="Pseudo" />
    <td>
    </tr>
    <tr>
    <td>
    <label for="email">Mail : </label>
    </td>
    <td>
    <input type="email" placeholder="Votre mail" id="mail" name="Mail"  />
    <td>
    </tr>
    <tr>
    <td>
    <label for="mdp">Mot de Passe :</label>
    </td>
    <td>
    <input type="Password" placeholder="mot de passe " id="mdp" name="mdp" />
    <td>
    </tr>
    <tr>
    <td>
    <label for="mdp2">Mot de Passe :</label>
    </td>
    <td>
    <input type="Password" placeholder="Confirmer mot de passe " id="mdp2" name="mdp2"  />
    <td>
    </tr>
    <tr>
    <td></td>
    <td>
    <input type="hidden" name="forminscription" value="Inscription"/>
    <input type="submit" value="Inscription"/>
    </tr>
    </td>
    </table>
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