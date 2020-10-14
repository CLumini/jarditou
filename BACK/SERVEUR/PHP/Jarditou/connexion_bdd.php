<?php
function connexionBase()
{
	
	
	if(($_SERVER['SERVER_NAME']=="localhost") || ($_SERVER['SERVER_NAME']=="127.0.0.1"))
	{
$host= "localhost";
$login="root";
$password="";
$base="jarditou";
	}
	
	
	if($_SERVER['SERVER_NAME']=="dev.amorce.org")
	{
$host= "localhost";
$login="clumini";
$password="cl20104";
$base="clumini";	
	}
	
	
	try
		{
			$db= new PDO('mysql:host='.$host.';charset=utf8;dbname='.$base, $login, $password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);         
		$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			echo'Erreur : '.$e->getMessage().'<br>';
			echo'No : '.$e->getCode().'<br>';
			die('Connexion au serveur impossible.');
		} 
		return $db;
}
?>