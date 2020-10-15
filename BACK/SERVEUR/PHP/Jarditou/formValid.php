<?php
require "connexion_bdd.php";

function valid_donnees($donnees)//fonction qui permet d'éviter toute injection de code (extraction de balises ou de slashes)
{
		$donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
}
								// On passe les données dans la fonction pour les expurger de tout code intrusif
$nom =valid_donnees($_POST["nom"]);
$prenom =valid_donnees($_POST["prenom"]);
$sexe=valid_donnees($_POST["sexe"]);
$date_naissance =valid_donnees($_POST["date_naissance"]);
$codePostal =valid_donnees($_POST["code_postal"]);
$adresse=valid_donnees($_POST["adresse"]);
$ville=valid_donnees($_POST["ville"]);
$eMail =valid_donnees($_POST["eMail"]);
$sujet=valid_donnees($_POST["choix"]);
$question=valid_donnees($_POST["question"]);
$checked=valid_donnees($_POST["formulaire"]);

								// Conditions qui empêchent 

if(!empty($nom)
	&& preg_match("/^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/",$nom)
	&& !empty($prenom)
	&& preg_match("/^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/",$prenom)
	&& !empty($sexe)
	&& !empty($date_naissance)
	&& !empty($codePostal)
	&& !empty($eMail)
	&& preg_match ("/^[_a-z0-9-]+(.[_a-z0-9-]+)+@[a-z0-9-]+.[a-z]{2,3}$/",$eMail)
	&& !empty($sujet)
	&&!empty($question)
	&& !empty($checked))
	{
	 header("Location: contact.php?form=formOk");//On passe les erreurs en GET
	 exit;
	}
else
	{   
	if(!preg_match("/^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/",$nom)
	|| !preg_match("/^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/",$prenom)
	|| !preg_match ("/^[_a-z0-9-]+(.[_a-z0-9-]+)+@[a-z0-9-]+.[a-z]{2,3}$/",$eMail))
	
	{    
	 header("Location: contact.php?form=formErreurRegExp"); //On passe les erreurs en GET
	 exit;
	}
	else
	{
	header("Location: contact.php?form=formErreurEmpty"); //On passe les erreurs en GET
	exit;	
	}




?>