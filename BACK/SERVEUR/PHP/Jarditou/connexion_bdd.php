<?php

$host= "localhost";
$login="root";
$password="";
$base="jarditou";

	try
		{
			$db= new PDO('mysql:host=localhost;charset=utf8;dbname=jarditou', 'root', "");
		
		}
		catch(Exception $e)
		{
			echo'Erreur : '.$e->getMessage().'<br>';
			echo'No : '.$e->getCode().'<br>';
			die('Connexion au serveur impossible.');
		} 
		

?>