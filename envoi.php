<html>

  <head>
      <title>Traitement du formulaire</title>
  </head>
  <body bgcolor="#FFFFFF" text="#000000">

  <?php

include '../../mainfile.php';
include '../../header.php';
include 'include_var.php';

// On vérifie que l'internaute a entré son nom et son e-mail.
// sinon on arrête tout.
if (($nom) && ($email)) {
    //on vérifie que l'internaute a entré le nom et l'e-mail d'un moins un ami

    // sinon on arrête tout

    if (($nom1) && ($email1)) {
        // Début de la collecte d'informations du formulaire vers l'e-mail

        // On regarde si l'internaute a entré un commentaire,

        // sinon on attribue une valeur nous-même

        if (empty($comm)) {
            $comm = $nom . " n'a pas entré de commentaire.";

            $commentaire = $comm;
        } else {
            $commentaire = $comm;
        }

        //Objet du message.

        $mailsubject = '' . $nom . ' vous recommande ' . $sitename . ' !';

        // Envoi du message à l'ami(e) N°1

        if (isset($nom1)) {
            $mailbody1 = 'Bonjour ' . $nom1 . ", \n
Vore ami(e) " . $nom . ' vient de visiter notre site, ' . $sitename . ", et a souhaité vous le faire connaître.\n
Si vous souhaitez visiter notre site, vous pouvez vous rendre à cette adresse : " . $siteurl . "\n\n
Voici le commentaire que votre ami(e) " . $nom . " vous a laissé :\n"
. $commentaire . "\n\n" .
"Merci d'avoir pris le temps de lire ce message.\n
Cordialement,
Le webmaster de " . $sitename . '';

            $result1 = mail((string)$email1, (string)$mailsubject, (string)$mailbody1, "From: $email");
        }

        // Envoi du message à l'ami(e) N°2

        if (isset($nom2)) {
            $mailbody2 = 'Bonjour ' . $nom2 . ", \n
Vore ami(e) " . $nom . ' vient de visiter notre site, ' . $sitename . ", et a souhaité vous le faire connaître.\n
Si vous souhaitez visiter notre site, vous pouvez vous rendre à cette adresse : " . $siteurl . "\n\n
Voici le commentaire que votre ami(e) " . $nom . " vous a laissé :\n"
. $commentaire . "\n\n" .
"Merci d'avoir pris le temps de lire ce message.\n
Cordialement,
Le webmaster de " . $sitename . '';

            $result2 = mail((string)$email2, (string)$mailsubject, (string)$mailbody2, "From: $email");
        }

        // Envoi du message à l'ami(e) N°3

        if (isset($nom3)) {
            $mailbody3 = 'Bonjour ' . $nom3 . ", \n
Vore ami(e) " . $nom . ' vient de visiter notre site, ' . $sitename . ", et a souhaité vous le faire connaître.\n
Si vous souhaitez visiter notre site, vous pouvez vous rendre à cette adresse : " . $siteurl . "\n\n
Voici le commentaire que votre ami(e) " . $nom . " vous a laissé :\n"
. $commentaire . "\n\n" .
"Merci d'avoir pris le temps de lire ce message.\n
Cordialement,
Le webmaster de " . $sitename . '';

            $result3 = mail((string)$email3, (string)$mailsubject, (string)$mailbody3, "From: $email");
        }

        // Envoi du message à l'ami(e) N°4

        if (isset($nom4)) {
            $mailbody4 = 'Bonjour ' . $nom4 . ", \n
Vore ami(e) " . $nom . ' vient de visiter notre site, ' . $sitename . ", et a souhaité vous le faire connaître.\n
Si vous souhaitez visiter notre site, vous pouvez vous rendre à cette adresse : " . $siteurl . "\n\n
Voici le commentaire que votre ami(e) " . $nom . " vous a laissé :\n"
. $commentaire . "\n\n" .
"Merci d'avoir pris le temps de lire ce message.\n
Cordialement,
Le webmaster de " . $sitename . '';

            $result4 = mail((string)$email4, (string)$mailsubject, (string)$mailbody4, "From: $email");
        }

        // Paramètres pour l'envoi du message à l'ami(e) N°5

        if (isset($nom5)) {
            $mailbody5 = 'Bonjour ' . $nom5 . ", \n
Vore ami(e) " . $nom . ' vient de visiter notre site, ' . $sitename . ", et a souhaité vous le faire connaître.\n
Si vous souhaitez visiter notre site, vous pouvez vous rendre à cette adresse : " . $siteurl . "\n\n
Voici le commentaire que votre ami(e) " . $nom . " vous a laissé :\n"
. $commentaire . "\n\n" .
"Merci d'avoir pris le temps de lire ce message.\n
Cordialement,
Le webmaster de " . $sitename . '';

            $result5 = mail((string)$email5, (string)$mailsubject, (string)$mailbody5, "From: $email");
        }

        if ($copiewebmaster) {
            @mail((string)$emailweb, "[$sitename] : Copie d'e-mail de recommandation", (string)$mailbody1, "From: $emailsite");
        }

        // Affichages du résultat

        if ($result1 && $result2 && $result3 && $result4 && $result5) {
            //En cas de succès de l'envoi du message.

            echo '<center><b>Les messages ont bien été envoyés. Merci de votre intêret pour notre site ' . $nom . '.</b></center>';
        } else {
            //En cas d'échec de l'envoi du message.

            echo "<center><b>Le message n'a pu être envoyé. Merci de réessayer ultérieurement.</b></center>";
        }

        //Merci de ne pas retirer les crédits du script

        echo "<p align='right'>" . $credits . '<p>';

    //Fin de la vérification "si l'internaute a entré le nom d'un ami" (True)
    }

    // Si l'internaute n'a pas entré le nom d'un ami, on affiche

    else {
        die("<center><b>Vous avez oublié d'entrer le nom et/ou l'adresse e-mail de l'ami(e) N°1 !</b></center><br>
          <center>Aucun message n'a été envoyé. Merci de revenir en arrière et d'entrer toutes les informations marquées d'une astérisque (*).</center>");
    }

    //Fin de la vérification "si l'internaute a entré son nom" (True)
}

// Si l'internaute n'a pas entré son nom, on affiche
else {
    die("<center><b>Vous avez oublié d'entrer votre nom et/ou votre adresse e-mail !</b></center><br>
          <center>Aucun message n'a été envoyé. Merci de revenir en arrière et d'entrer toutes les informations marquées d'une astérisque (*).</center>");
}

require XOOPS_ROOT_PATH . '/footer.php';

       ?>

  </body>

  </html>
