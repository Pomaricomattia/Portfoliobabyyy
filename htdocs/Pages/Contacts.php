<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <title>Accueil</title>
</head>
<body class="bodycontact">

<nav class="navbar fixed-top navbar-light bg-secondary">
  <a class="navbar-brand" href="../Index.php"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg></a>
  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-gallery-tab" data-toggle="pill" href="Galerie.php" role="tab" aria-controls="pills-gallery" aria-selected="true">Galerie</a>
  </li>
    <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-Liens-tab" data-toggle="pill" href="Liens.php" role="tab" aria-controls="pills-Liens" aria-selected="false">Liens</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="Contacts.php" role="tab" aria-controls="pills-contacts" aria-selected="false">Contacts</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-tutos-tab" data-toggle="pill" href="tutos.php" role="tab" aria-controls="pills-tutos" aria-selected="false">tutos</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
<form method="POST" action=""> 
        <input type="email" name="mailconnect" placeholder="Mail":>
        <input type="password" name="mdpconnect" placeholder="Mot de passe"/>
        <input type="hidden" name="formconnexion" value="Inscription"/>
        <input type="submit"  value="Se connecter"/>
    </form>

</div>
</nav>

<div id="form-main">
  <div id="form-div">
  <h2 class="formcontact">Formulaire de contact</h2>

    <form class="form" id="form1">
      
      <p class="nom">
        <input name="nom" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Nom" id="nom" />
      </p>
      
      <p class="email">
        <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
      </p>
      
      <p class="Sujet">
        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="Sujet" placeholder="Sujet"></textarea>
      </p>
      
      <div class="boutoncentre">
      <a href="#" class="envoyerform">Envoyer</a>
      </div>  
      </div>
    </form>
  </div>