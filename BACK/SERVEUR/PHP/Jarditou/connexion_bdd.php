<?php
function connexion_base()
{
$host= "localhost";
$login="root";
$password="";
$base="jarditou";

	try
		{
			$db= new PDO('mysql:host='.$host.';charset=utf8;dbname='.$base, $login, $password);
			return $db;
		}
		catch(Exception $e)
		{
			echo'Erreur : '.$e->getMessage().'<br>';
			echo'No : '.$e->getCode().'<br>';
			die('Connexion au serveur impossible.');
		}
}
?>