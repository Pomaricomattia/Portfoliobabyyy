<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre;port=3306','root','');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_GET['id']) AND $_GET['id'] > 0)
{
    $getid = intval($_GET['id']);
    $requser =  $bdd->prepare('SELECT * FROM membres WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
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
    <h2>Profil de  <?php echo $userinfo['Pseudo']; ?></h2>
    <div> 

    <p>Mail = <?php echo $userinfo['Mail']; ?></p>
   
    </div>  
    <?php
    if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
    {
        ?>
        <a href="#">Editer mon profil</a>
        <a href="deconnexions.php"> Se deconnecter </a>
        <?php
    }
    ?>
    
    </div>
</body>
</html>