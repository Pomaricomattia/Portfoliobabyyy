<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Galerie</title>
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

<div class="containergalerie">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2">
    <img src="../img/sea-5382490_640.jpg" alt="..." class="img-thumbnail">
    </div>
    <div class="col-md-auto">
    <img src="../img/hot-air-balloon-5390487_640.jpg" alt="..." class="img-thumbnail">
    </div>
    <div class="col col-lg-2">
    <img src="../img/water-lily-5397116_640.jpg" alt="..." class="img-thumbnail">
    </div>
  </div>
  <div class="row">
    <div class="col">
    <img src="../img/porsche-5377019_640.jpg" alt="..." class="img-thumbnail">
    </div>
    <div class="col-md-auto">
    <img src="../img/moonlight-5362539_640.jpg" alt="..." class="img-thumbnail">
    </div>
    <div class="col col-lg-2">
    <img src="../img/butterfly-5398476_640.jpg" alt="..." class="img-thumbnail">
    </div>
  </div>
</div>

</body>
</html>