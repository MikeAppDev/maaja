<?php
require_once('inc/init.php');

if($_POST)
{
    // if(empty($_POST['Prenom']))
    // {
    //  $errorPseudo = "<class=''>Veuillez saisir un Pseudo
    // </small>";
    // $cool = true;
    // }


if(empty($_POST['email']))
    {
        
        $errorEmail = "<class=''>Merci de saisir une adresse Email.</small>";

        $cool = true;
    }
elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
    {
       

        $errorEmail = "<class=''>Merci de vérifier votre adresse mail svp.</small>";
        $cool = true;
    }
// echo '<pre>'; print_r($_POST); echo '</pre>';

    if(isset($_POST['commentaire'])){
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From: ' . $_POST['email'] . "\r\n";

    $message = '<h1>Message envoyé depuis Maaja.fr</h1>
    <p><b>Nom : </b>' . $_POST['nom'] . '<br>
    <b>Prénom : </b>' . $_POST['prenom'] . '<br>
    <p><b>Téléphone : </b>' . $_POST['tel'] . '<br>
    <p><b>Email : </b>' . $_POST['email'] . '<br>
    <p><b>Presta : </b>' . $_POST['presta_1'] . '<br>
    <b>Presta : </b>' . $_POST['presta_2'] . '<br>
    <b>Presta : </b>' . $_POST['presta_3'] . '<br>
    <b>Presta : </b>' . $_POST['presta_4'] . '<br>
    <b>Presta : </b>' . $_POST['presta_5'] . '<br>
    <p><b>Demande : </b>' . htmlspecialchars($_POST['commentaire']) . '</p>';

    $retour = mail('marion@maaja.fr', 'MAAJA.FR', $message, $entete);

    

// $cool = "<p class=''> $_POST[prenom] $_POST[nom] ! Votre demande est bien envoyée ! </p>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Lien description google metadonné -->
    <meta name="description" content="Maaja décoratrice d’intérieur vous accompagne dans vos projets d'aménagement dans le Tarn et Garonne mais aussi dans toute la France. Mon rôle est de vous accompagner pour vous sentir chez vous.">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>


    <link rel="icon" type="image/png" sizes="32x32" href="./assets/fav-icon-maaja-decoratrice-d-interieur.png">
    <link rel="stylesheet" href="rendu.css">
    <title>Maaja - Décoratrice d'Intérieur - Tarn et Garonne</title>
</head>
<body>
    <!-- first -->
    <section class="first">
        <div class="logoSociaux">
            <div class="hautDePage">    

                <div class="menuGlobal">
                    <a class="btn-origin" href="#presentation">Présentation</a>
                    <a class="menuTarif" href="#tarif">Tarif</a>
                    <a class="menu" href="#contact">Me Contacter</a>
                </div>
            </div>
        </div>

        <div class="titre">
            <div class="center">
                <img class="logo_maaja" src="./assets/maaja_logo_v2.png" alt="logo maaja décoratrice d'intérieur tarn et garonne">
            </div>
        </div>

        <div class="center">
        </div>
        <div class="center">
            <div class="sociaux">
                    <a href="https://www.instagram.com/maaja.deco/?hl=fr"><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-twitter-square"></i></a>
                    <a href="https://www.facebook.com/maaja.deco/"><i class="fab fa-facebook-square"></i></a>
            </div>
        </div>

    </section>

    <!-- second -->
    <section class="second">
        <div class="second__titreP"><h1 id="presentation" class="title">MAAJA</h1></div>
        

        <div class="blocpres">
            <div class="pres1">
                
                <div class="text-content">
                    <div class="espacement">
                        <p class="text">Maaja décoratrice d’intérieur vous accompagne dans vos projets d'aménagement dans le Tarn et Garonne mais aussi dans toute la France.
                        </p>
                    </div>
                    <div class="espacement">
                        <p class="text">
                        Tout le monde rêve d'un chez soi qui lui ressemble , où l'on s'y sent bien , un « Chez nous » ! Selon nos goûts et nos besoins ! Mon rôle est de vous accompagner pour vous sentir chez vous.
                        </p>
                    </div>
                    <div class="espacement">
                        <p class="text">
                        Je ferai de votre appartement, maison un cocon où il fait bon vivre , un espace de vie lumineux, aéré, coloré ou plus sobre selon vos critères.
                        </p>
                    </div>
            </div>
                <img class="imagepresentation" src="assets/Profil_MAAJA.webp" alt="Maaja décoratrice d'intérieur tarn et garonne photo de marion bezghiche de profil sur fond blanc">
            </div>
            
            <div class="pres2">
                <img class="imagepresentation" src="assets/Decoration_MAAJA.jpg" alt="Maaja décoratrice d'intérieur tarn et garonne plance dedécoration sur tabouret sur fond blanc">
                <p class="text-content text">
                Je vous propose de valoriser vos espaces et leurs volumes, d’harmoniser teintes et matériaux, de retravailler la lumière, de repenser/changer la disposition de vos meubles afin de mettre en place une décoration qui vous ressemble . 
                </p>
            </div>
        </div>
    </section>
    <!-- SLIDERS -->
    <section class="sliders">
        <div class="center bot sliders__titreP">
            <h2 class="title2">REALISATION</h2>
        </div>
            <div class="buttonDir">
                <div><a id="btn0" class="btn-origin">Salon</a></div>
                <div><a id="btn1" class="menuTarif">Bureau</a></div>
                <div><a id="btn2" class="menu">Terrasse</a></div>
                <div><a id="btn4" class="menuTarif">Salle de bain</a></div>
            </div>
        
        
        <div id='action' class="container">
            <div class="slider slider--avpre">
              <div id="show" class="slider__before"></div>
              <div class="slider__separator"></div>
              <div id="show2" class="slider__after"></div>
              <input class="slider__range" type="range" min="0" max="100" value="50"/>
            </div>
            <!-- <div class="slider">
              <div class="slider__before"></div>
              <div class="slider__separator"></div>
              <div class="slider__after"></div>
              <input class="slider__range" type="range" min="0" max="100" value="50"/>
            </div> -->
          </div>
    </section>

    <section id="tarif" class="prestation">
    <div class="prestation__titreP"><h2 id="presentation" class="title2">PRESTATIONS</h2></div>
        <div class="prestationCard">
            <!-- CARD COACHING-->
            <div class="containerCard">
                <div class="card">
                    <div class="card-front prestaCoaching">
                        <div class="backTitle"><h4    class="titleCard">COACHING</h4></div>
                    </div>
                    <div class="card-back">
                        <div><h3 class="titleBack">COACHING DECO</h3></div>
                        
                        <div class="prestaPrix">
                            <div>
                                <p>A DISTANCE</p>
                                <p>A PARTIR DE PHOTOS ET/OU VIDEOS</p>
                            </div>
                            <div>
                                <h4 class="titleCard ita">75€</h4>
                            </div>
                        </div>
                        <div class="prestaPrix">
                            <div>
                                <div><p>A DOMICILE</p></div>
                                <div><p>ENVIRON 1H30 A 2H DE RDV</p></div>
                            </div>
                            <div>
                                <h4 class="titleCard ita">135€</h4>
                            </div>
                        </div>
                        <div class="separator"> </div>
                        <div class="detailBackCard">
                            <div>
                            <ul type="disc">
                                <li>PROPOSITION D'AMENAGEMENT, OPTIMISATION DES ESPACES</li>
                                <li>CONSEIL COULEUR & MATERIAUX</li>
                                <li>CONSEIL AMBIANCE, DECO & MOBILIER</li>
                                <li>ASTUCES DECO & DIY (DO IT YOURQILF)</li>
                                <li>CONSEIL SUR LE RELOOKING DE VOS MEUBLES</li>
                            </ul>
                            </div>
                        </div>
                        <div class="">
                            <a class="btn-contact-card" href="#contact">Me Contacter</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CARD PROJET-->
            <div class="containerCard">
                <div class="card">
                    <div class="card-front prestaProjet">
                        <div class="backTitle"><h4    class="titleCard">PROJET</h4></div>
                    </div>
                    <div class="card-back">
                        <h3>PROJET DECO</h3>
                        <div class="prestaPrix">
                            <div class="">
                                <h4 class="prestaPrix__title">1 PIECE SIMPLE</h4>
                                <p>(salon - chambre - bureau - entrée...)</p>
                            </div>
                            <div class="prestaPrix__descriptif">
                                <p>A DISTANCE</p>
                                <h4 class="titleCard ita titleCard__price">145€</h4>
                            </div>
                            <div class="prestaPrix__descriptif">
                                <p>A DOMICILE</p>
                                <h4 class="titleCard ita titleCard__price">215€</h4>
                            </div>
                        </div>
                        <div class="separator separator__card"></div>
                        <div class="prestaPrix">
                            <div class="">
                                <h4 class="prestaPrix__title">1 PIECE TECHNIQUE</h4>
                                <p>(salle de bain - cuisine)</p>
                            </div>
                            <div class="prestaPrix__descriptif">
                                <p>A DISTANCE</p>
                                <h4 class="titleCard ita titleCard__price">165€</h4>
                            </div>
                            <div class="prestaPrix__descriptif">
                                <p>A DOMICILE</p>
                                <h4 class="titleCard ita titleCard__price">245€</h4>
                            </div>
                        </div>
                        <div class="separator separator__card"></div>
                        <div class="prestaPrix">
                            <div class="">
                                <h4 class="prestaPrix__title">1 PIECE MULTIFONCTION</h4>
                                <p>(suite parentale - pièce ouverte)</p>
                            </div>
                            <div class="prestaPrix__descriptif">
                                <p>A DISTANCE</p>
                                <h4 class="titleCard ita titleCard__price">245€</h4>
                            </div>
                            <div class="prestaPrix__descriptif">
                                <p>A DOMICILE</p>
                                <h4 class="titleCard ita titleCard__price">425€</h4>
                            </div>
                        </div>
                        
                        <div class="">
                            <a class="btn-contact-card" href="#contact">Me Contacter</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CARD ATELIER-->
            <div class="containerCard">
                <div class="card">
                    <div class="card-front prestaAtelier">
                        <div class="backTitle"><h4    class="titleCard">ATELIER</h4></div>
                    </div>
                    <div class="card-back">
                        <h3>ATELIER DECO</h3>
                        <div class="prestaPrix">
                            <div class="">
                                <h4 class="prestaPrix__title">1 personne</h4>
                            </div>
                            <div class="prestaPrix__descriptif">
                                <p>A DOMICILE</p>
                                <h4 class="titleCard ita titleCard__price">80€</h4>
                            </div>
                        </div>
                        <div class="separator separator__card"></div>
                        <div class="prestaPrix">
                            <div class="">
                                <h4 class="prestaPrix__title">2 personne</h4>
                            </div>
                            <div class="prestaPrix__descriptif">
                                <p>A DOMICILE</p>
                                <h4 class="titleCard ita titleCard__price">140€</h4>
                            </div>
                            <div><p>70€ / pers</p></div>
                        </div>
                        <div class="separator separator__card"></div>
                        <div class="prestaPrix">
                            <div class="">
                                <h4 class="prestaPrix__title">4 personne</h4>
                            </div>
                            <div class="prestaPrix__descriptif">
                                <p>A DOMICILE</p>
                                <h4 class="titleCard ita titleCard__price">260€</h4>
                            </div>
                            <div><p>70€ / pers</p><p>50€ pour l'hôte</p></div>
                        </div>
                        <div class="">
                            <a class="btn-contact-card" href="#contact">Me Contacter</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Pro">
        <div class="content">
        <div class="prof__titreP"><h2 id="presentation" class="title2">PROFESSIONNELS</h2></div>
            <div class="content__dispo">
                <div class="content__text text">
                    <div class="espacement">
                        <p>
                            Une vitrine bien présentée, décorée avec goût attire toujours plus le regard de votre future clientèle. Je vous propose de l'imaginer, de la créer, de la fabriquer et ce au gré des saisons. Toute l’année!
                        </p>
                    </div>
                    <div class="espacement">
                        <p class="text__gras">
                            Un gain de temps pour exercer votre activité.
                        </p>
                    </div>
                    <div>
                        <p class="text__gras">
                            Consultez nos offres !
                        </p>
                    </div>
                    
                </div>
                <div class="content__img">
                    <div class="content__img__1">
                        <a href="./assets/maaja-prestation-vitrine-de-commerce-tarn-et-garonne.pdf" target="_blank"><img class="content__img__1__detail" src="./assets/maaja-sublimer-votre-boutique-tarn-et-garonne-miniature-profesionnel.png" alt="Maaja décoratrice d'intérieur tarn et garonne prestation vitrine pour les commercants"></a>
                        
                    </div>
                    <div class="content__img__1">
                    <a href="./assets/maaja-prestation-agence-immobiliere-tarn-et-garonne.pdf" target="_blank"><img class="content__img__1__detail" src="./assets/maaja-home-staging-tarn-et-garonne-miniature-profesionnel.png" alt="Maaja décoratrice d'intérieur tarn et garonne prestation agence immobilière"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- contact -->
        <section id="contact" class="contact"> 

            <div class="contactForm">
                <div class="">
                    <h2 class="title2 title2__bottop">Contactez-moi</h2>
                </div>
                <?php
                // if($retour)
                //     echo '<p class="red">Votre message a bien été envoyé.</p>';
    
                ?>
                <?php if(isset($cool)) echo $cool; ?>
                    
                    <form method="post" class="formu"> 
                        <div class="formu__content">
                            <div class="formu__block__espace">
                                <!-- Prenom -->
                                <div class="formu__saisi">
                                    <!-- <label for="prenom" class="contentPosition">Prénom</label> -->
                                    <input type="text" class="" id="prenom" name="prenom" placeholder="Prénom">
                                </div>
                                <!-- Nom -->
                                <div class="formu__saisi">
                                    <!-- <label for="nom" class="contentPosition">Nom</label> -->
                                    <input type="text" class="" id="nom" name="nom" placeholder="nom">
                                </div>
                                    <!-- Telephone -->
                                <div class="formu__saisi">
                                    <!-- <label for="tel" class="contentPosition">Téléphone</label> -->
                                    <input type="text" class="" id="tel" name="tel" placeholder="tel">
                                </div>
                                <!-- Email -->
                                <div class="formu__saisi">
                                        <!-- <label for="email" class="contentPosition">email</label> -->
                                        <input type="email" class=" <?php if(isset($errorEmail)); ?>" id="email" name="email" placeholder="email">
                                    <?php 
                                    if(isset($errorEmail)) echo $errorEmail; 
                                    ?> 
                                </div>
                            </div>
                            <!-- Choice -->
                            
                            
                            <div class="formu__block">
                            <div>
                                <h5 class="contentPosition center title2__bottop">
                                Sélectionnez la / les prestations qui vous interesses : 
                                </h5>
                            </div>

                                <div class="contentPosition__pad">
                                    <input type="checkbox" id="presta_1" name="presta_1" value="Coaching">
                                    <label for="presta_1">Coaching</label>
                                </div>
                                <div class="contentPosition__pad">
                                    <input type="checkbox" id="presta_2" name="presta_2" value="Projet">
                                    <label for="presta_2">Projet</label>
                                </div>
                                <div class="contentPosition__pad">
                                    <input type="checkbox" id="presta_3" name="presta_3" value="Atelier">
                                    <label for="presta_3">Atelier</label>
                                </div>
                                <div class="contentPosition__pad">
                                    <input type="checkbox" id="presta_4" name="presta_4" value="Atelier">
                                    <label for="presta_3">Vitrine</label>
                                </div>
                                <div class="contentPosition__pad">
                                    <input type="checkbox" id="presta_5" name="presta_5" value="Atelier">
                                    <label for="presta_3">Home Staging</label>
                                </div>
                            </div>
                        </div>
                        <!-- Commentaire demande -->
                        <div class="contentPosition__center">
                            <div class="contentPosition__marbot">
                                <label for="commentaire" class="contentPosition"> Demande / Information</label>
                            </div>
                            
                            <textarea class="" id="commentaire" name="commentaire" rows="3" placeholder="Objet de la demande"></textarea>
                        </div>
                        <!-- Bouton -->
                        <div class="contentPosition center">
                            <button type="submit" class="btnSend">Envoyer</button>
                        </div>
                    </form>

            </div>

    </section>

<footer class="footer">

<div class="footer__content">
    <div class="">
        <img class="footer__logo" src="./assets/logo-maaja-marion-decoratrice-interieur.png" alt="logo maaja décoratrice d'intérieur tarn et garone">
    </div>
    <div class="footer__content__text">
        <div><h4 class="footer__titre">MAAJA ©</h4></div>
        <div><p class="footer__sousTitre">Décoratrice d'intérieur</p></div>
        
    </div>
    <div class="footer__content__reseau">
        <a href="https://www.instagram.com/maaja.deco/?hl=fr"><i class="fab fa-instagram footer__instafoot"></i></a>
    </div>
</div>



</footer>

    <script src="app.js"></script>
</body>
</html>