<?php
require_once('inc/init.php');


if($_POST)
{
        $border = 'border border-danger';


        if(empty($_POST['pseudo']))
        {
         $errorPseudo = "<small class='fst-italic text-danger'>Veuillez saisir un Pseudo
        </small>";
        $cool = true;
        }


    if(empty($_POST['email']))
        {
            
            $errorEmail = "<small class='fst-italic text-danger'>Merci de saisir une adresse Email.</small>";

            $cool = true;
        }
    elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        {
           

            $errorEmail = "<small class='fst-italic text-danger'>Merci de vérifier votre adresse mail svp.</small>";
            $cool = true;
        }
        
// if(!isset($error))
// {
//     $req = "INSERT INTO user (prenom, nom, email, commentaire) VALUES (:prenom, :nom, :email, :commentaire)";
        
//     $result = $bdd->prepare($req);

//     // echo $req . '<hr>';

//     $result = $bdd->prepare($req);
//     $result->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
//     $result->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
//     $result->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
//     $result->bindValue(':commentaire', $_POST['commentaire'], PDO::PARAM_STR);
//     $result->execute(); 
    
   
// }

if(isset($_POST['commentaire'])){
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From: ' . $_POST['email'] . "\r\n";

    $message = '<h1>Message envoyé depuis mon Portfolio.fr</h1>
    <p><b>Nom : </b>' . $_POST['nom'] . '<br>
    <p><b>Prénom : </b>' . $_POST['prenom'] . '<br>
    <p><b>Téléphone : </b>' . $_POST['tel'] . '<br>
    <b>Email : </b>' . $_POST['email'] . '<br>
    <b>checkbox : </b>' . $_POST['checkbox'] . '<br>
    <b>Demande : </b>' . htmlspecialchars($_POST['commentaire']) . '</p>';

    $retour = mail('michael.sarrazin.ms@gmail.com', 'PORTFOLIO', $message, $entete);
    if($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    
}

$cool = "<p class='alert alert-success text-center col-md-6 mx-auto'> $_POST[prenom] $_POST[nom] ! Votre demande est bien envoyée ! </p>";
}




     
// require_once('inc/header.php');
// include_once('inc/nav.php');
?>





 

    <div class="" style="background-color: #E9ECEF;">

            <h1 class="">Contactez-moi</h1>
            <?php if(isset($cool)) echo $cool; ?>
                
            <form method="post" class=""> 
        <!-- Prenom -->
        <div class="">
            <label for="prenom" class="">Prénom</label>
            <input type="text" class="" id="prenom" name="prenom" placeholder="Prénom">
            
        </div>
        <!-- Nom -->
        <div class="">
            <label for="nom" class="">Nom</label>
            <input type="text" class="" id="nom" name="nom" placeholder="nom">
        </div>
                <!-- Telephone -->
        <div class="">
            <label for="tel" class="">Téléphone</label>
            <input type="text" class="" id="tel" name="tel" placeholder="tel">
        </div>
        <!-- Email -->
        <div class="">
            <label for="email" class="">email</label>
            <input type="email" class=" <?php if(isset($errorEmail)) echo $border; ?>" id="email" name="email" placeholder="email">
        
            <?php 
            if(isset($errorEmail)) echo $errorEmail; 
            ?> 
        </div>
        <!-- Choice -->
        <p>Sélectionnez la / les prestations qui vous interesses : </p>

            <div>
            <input type="checkbox" id="scales" name="scales"
                    checked>
            <label for="presta_1">Coaching</label>
            </div>
            <div>
            <input type="checkbox" id="horns" name="horns">
            <label for="presta_2">Projet</label>
            </div>
            <div>
            <input type="checkbox" id="horns" name="horns">
            <label for="presta_3">Atelier</label>
            </div>
        <!-- Commentaire demande -->
        <div class="">
             <label for="commentaire" class="">Commentaire / Demande / Information</label>
             <textarea class="" id="commentaire" name="commentaire" rows="3" placeholder="Objet de la demande"></textarea>
        </div>
      <!-- Bouton -->
    <div class="">
        <button type="submit" class="">Envoyer</button>
    </div>
        </form>

        </div>



<?php
    // include('inc/footer.php');
?>