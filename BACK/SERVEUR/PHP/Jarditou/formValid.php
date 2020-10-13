<?php
require "connexion_bdd.php";

function valid_donnees($donnees)
{
		$donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
}

$nom =valid_donnees($_POST["nom");
$prenom =valid_donnees($_POST["prenom");
$date_naissance =valid_donnees($_POST["date_naissance"]);
$codePostal =valid_donnees($_POST["code_postal"]);
$eMail =valid_donnees($_POST["eMail"]);

if(!empty($nom)
	&& preg_match("/^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/",$nom))
	{
		echo header"Location:bienvenue.php";
	}
else{"Veuillez renseigner tous les champs." ;}

?>