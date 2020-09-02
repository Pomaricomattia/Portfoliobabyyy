<?php
/*
 * Front Controller
 */

// session créée ou continuée si existante
session_start();

// dependencies

require_once "Pages/Accueil.php";





// existence de la connexion valide pour l'admin
if(isset($_SESSION['notresession'])&&$_SESSION['notresession']===session_id()) {

    // routing admin

    // routing public

    if (isset($_GET['pg'])) {
        switch ($_GET['pg']) {
            case "galerie":
                require_once "Pages/Galerie.php";
                break;
            case "liens":
                require_once "Pages/Liens.php";
                break;
            case "tuto1":
                require_once "Pages/tutos.php";
                break;
            case "contact":
                require_once "Pages/Contacts.php";
                break;
            default:
                require_once "PAges/Accueil.php";
        }
    } 
}