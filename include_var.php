<?php

/* Cette page contient toutes les variables qui sont utilisées dans plusieurs
   page à la fois */

// Nom du site
$sitename = 'NOM DE VOTRE SITE';
// E-mail du site (ex : webmaster@votresite.com)
$emailsite = 'webmaster@votresite.com';
// Votre adresse e-mail personnelle
$emailweb = 'vous@fai.com';
// URL du site sans le '/' de fin
$siteurl = 'http://www.VOTRESITE.COM';
//Titre de la page d'index du script
// ($sitename sera automatiquement remplacé par le nom de votre site)
$titre = "<center><font size='3'>Recommander " . $sitename . ' à des ami(e)s !</font></center>';

// Entrez 1 si vous voulez recevoir une copie de l'e-mail envoyé par
// l'internaute depuis le service de recommandation, ou 0 si vous ne
// voulez pas
$copiewebmaster = 0;

//Merci de ne pas retirer les crédits du script
$credits = "Script par <a href='http://www.toute-la-zik.fr.st' target='_blank'>Matt - Toute La Zik</a>, Recommander V1.2";

/* Pour appeller cette page depuis une autre page du script,
  il faut insérer  : [[[  include "include_var.php"; ]]]
  (sans les crochets bien entendu ;-) ).
  Attention ! Il faut appeller cette page avant que les variables qu'elle contient
  ne soient utilisées ! */
