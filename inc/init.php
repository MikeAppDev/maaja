<?php

//CONNEXION A LA BASE DE DONNEE

//SESSION
session_start();

//CONSTANTE
define("RACINE_SITE", $_SERVER['DOCUMENT_ROOT'] . '/PHP/marion/');
// $_SERVER['DOCUMENT_ROOT'] --> E:/Install-xampp/htdocs
// echo RACINE_SITE . '<hr>'; // E:/Install-xampp/htdocs/PHP/portfolio/

// Cette constante retourne le chemin physique du dossier portfolio sur le serveur lical xampp
// Lors de l'enregistrement d'une image.photo, nous aurons besoin du chemin physique complet vers le dossier photo sur le serveur pour enregistrer la photo dans le bon dossier sur le serveur.

define("URL", "http://localhost/PHP/marion/");

// $image = URL . 'assets/photos/toto.jpg'
// echo '<img src="' . $image . '"alt="">'; ou echo"<img src='$image' alt''>";

// Cette constante servira a enregistré l'URL de l'image dans la BDD

// FAILLE XSS
foreach ($_POST as $key => $value)
    {
     $_POST[$key] = htmlspecialchars($value);
    }

// INCLUSION FICHIERS
// en incluant le fichier init.php, on inclut également le fichier fonction.php
// require_once('fonction.php');
