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

    $message = '<h1>Message envoyé depuis Maaja.com</h1>
    <p><b>Nom : </b>' . $_POST['nom'] . '<br>
    <b>Prénom : </b>' . $_POST['prenom'] . '<br>
    <p><b>Téléphone : </b>' . $_POST['tel'] . '<br>
    <p><b>Email : </b>' . $_POST['email'] . '<br>
    <p><b>Presta : </b>' . $_POST['presta_1'] . '<br>
    <b>Presta : </b>' . $_POST['presta_2'] . '<br>
    <b>Presta : </b>' . $_POST['presta_3'] . '<br>
    <p><b>Demande : </b>' . htmlspecialchars($_POST['commentaire']) . '</p>';

    $retour = mail('michael.sarrazin.ms@gmail.com', 'MAAJA.COM', $message, $entete);

    

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

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>



    <link rel="stylesheet" href="rendu.css">
    <title>Maaja - décoratrice d'intérieur</title>
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
                <img class="logo_maaja" src="./assets/maaja_logo.png" alt="">
            </div>
        </div>

        <div class="center">
            <!-- <button class="myButton"><a href="#contact"> Me contacter</button></a> -->
            <!-- <a class="btn-origin marginB" href="#contact">Me Contacter</a> -->
        </div>
        <div class="center">
            <div class="sociaux">
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-twitter-square"></i></a>
                    <a href=""><i class="fab fa-facebook-square"></i></a>
            </div>
        </div>

    </section>

    <!-- second -->
    <section class="second">
        <div class="second__titreP"><h1 id="presentation" class="title">MAAJA</h1></div>
        

        <div class="blocpres">
            <div class="pres1">
                
                <div class="text-content">
                <p>Vous sentir bien chez vous c’est l’objet de mon intervention. 
Votre style sera mon style, mon travail est de faire en sorte que vos goûts et vos besoins s’harmonisent pour créer un espace qui vous ressemble. 
Je vous accompagne dans vos projets sur tout le Tarn et Garonne, et grâce à mes prestations à distance c’est dans toute la France que j’interviens ! 
Marion Bezghiche  / Décoratrice d’Intérieur
                </p>
            </div>
                
                <img class="imagepresentation" src="assets/Profil_MAAJA.jpg" alt="">
            </div>
            <div class="pres2">
                <img class="imagepresentation" src="assets/Decoration_MAAJA.jpg" alt="">
                <p class="text-content">Sublimer vos boutiques fait aussi parti de mon quotidien. 
Cette partie de mon travail me permet d’imaginer, créer et fabriquer chaque vitrine pour vous proposer des univers différents tout au long de l’année. 
                </p>
            </div>
        </div>
    </section>

    <section class="sliders">
        <div class="center bot sliders__titreP">
            <h2 class="title2">REALISATION</h2>
        </div>
            <div class="buttonDir">
                <div><a id="btn0" class="btn-origin">Salon</a></div>
                <div><a id="btn1" class="menuTarif">Bureau</a></div>
                <div><a id="btn2" class="menu">Terasse</a></div>
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
            <!-- CARD -->
            <div class="containerCard">
                <div class="card">
                    <div class="card-front prestaCoaching">
                        <!-- <div><img src="assets/front-presta1.png" alt=""></div> -->
                        <div class="backTitle"><h4    class="titleCard">COACHING</h4></div>
                        <!-- <div ><h4 class="titleCard ita blanc">75€</h4></div>
                        <div><p class="detailTitleCard">A partir de</p></div> -->
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
            <!-- CARD -->
            <div class="containerCard">
                <div class="card">
                    <div class="card-front prestaProjet">
                        <!-- <div><img src="assets/front-presta1.png" alt=""></div> -->
                        <div class="backTitle"><h4    class="titleCard">PROJET</h4></div>
                        <!-- <div ><h4 class="titleCard ita blanc">75€</h4></div> -->
                        <!-- <div><p class="detailTitleCard">A partir de</p></div> -->
                    </div>
                    <div class="card-back">
                        <h3>COACHING DECO</h3>
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
                        <div class="separator"></div>
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
            <div class="containerCard">
                <div class="card">
                    <div class="card-front prestaAtelier">
                        <!-- <div><img src="assets/front-presta1.png" alt=""></div> -->
                        <div class="backTitle"><h4    class="titleCard">ATELIER</h4></div>
                        <!-- <div ><h4 class="titleCard ita blanc">75€</h4></div> -->
                        <!-- <div><p class="detailTitleCard">A partir de</p></div> -->
                    </div>
                    <div class="card-back">
                        <h3>COACHING DECO</h3>
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
                        <div class="separator"></div>
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
        </div>
    </section>

    <section class="Pro">
        <div class="content">
        <div class="prestation__titreP"><h2 id="presentation" class="title2">PROFESSIONNELS</h2></div>
            <div class="content__dispo">
                <div class="content__text">
                    <p>Sublimer vos boutiques fait aussi parti de mon quotidien. Cette partie de mon travail me permet d'imaginer, créer et fabriquer chaque vitrine pour vous proposer des univers différents et parsonnalisés tout au long de l'année.</p>
                </div>
                <div class="content__img">
                    <div class="content__img__1">
                        <a href="./assets/maaja-prestation-vitrine-de-commerce-tarn-et-garone.pdf"><img class="content__img__1__detail" src="./assets/Profil_MAAJA.png" alt=""></a>
                        
                    </div>
                    <div class="content__img__1">
                    <a href="./assets/maaja-prestation-agence-immobiliere-tarn-et-garone.pdf"><img class="content__img__1__detail" src="./assets/Profil_MAAJA.png" alt=""></a>
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
  <div class="footer__addr">
    <h4 class="footer__logo">Maaja</h4>
        
    <h4>Contact</h4>
    
    <address>
    2 Rue Edouard Herriot 82100 Castelsarrasin <br>
          
      <a class="footer__btn" href="mailto:maaja@gmail.com">Ecrivez-nous</a>
    </address>
  </div>
  

</footer>

    <script src="app.js"></script>
</body>
</html>