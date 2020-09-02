<?php

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Portfolio | Liens</title>
    <style>
    </style>

</head>
<body>

<nav class="navbar fixed-top navbar-light bg-secondary">
  <a class="navbar-brand" href="../Index.php"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg></a>
  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link " id="pills-gallery-tab" data-toggle="pill" href="Galerie.php" role="tab" aria-controls="pills-gallery" aria-selected="true">Galerie</a>
  </li>
    <li class="nav-item" role="presentation">
    <a class="nav-link " id="pills-Liens-tab" data-toggle="pill" href="Liens.php" role="tab" aria-controls="pills-Liens" aria-selected="false">Liens</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link " id="pills-contact-tab" data-toggle="pill" href="Contacts.php" role="tab" aria-controls="pills-contacts" aria-selected="false">Contacts</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-tutos-tab" data-toggle="pill" href="tutos.php" role="tab" aria-controls="pills-tutos" aria-selected="false">tutos</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
</div>
</nav>
<div class="liens">
<header class="jumbotron">
    <h1 class="display-4 text-center mb-4">Portfolio | Liens</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed itaque neque doloremque animi est praesentium. Autem dignissimos ipsam itaque quibusdam placeat iste accusamus quasi modi reiciendis. Cumque neque aut, excepturi.</p>
</header>
<form class="formliens">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputsubject3" class="col-sm-2 col-form-label">Liens</label>
    <div class="col-sm-10">
      <input type="subject" class="form-control" id="inputsubject">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Sujet</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            Liens divertissement
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Projet Web
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" >
          <label class="form-check-label" for="gridRadios3">
            Offres d'embauches
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <button type="submit"  class="btn btn-secondary btn-sm">Envoyer<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"/>
  <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z"/>
</svg></button>
</form>
      </div>  
    </div>
  </div>
</form>

</body>
</html>
