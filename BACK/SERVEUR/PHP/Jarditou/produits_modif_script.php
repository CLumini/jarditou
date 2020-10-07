<?php 
$pro_id =$_POST['id'];
$pro_cat_id=$_POST['categorie'];
$pro_ref = $_POST['reference'];
$pro_libelle = $_POST['libelle'];
$pro_description = $_POST['description'];
$pro_prix = $_POST['prix'];
$pro_stock = $_POST['stock'];
$pro_couleur = $_POST['couleur'];
$pro_d_modif =$_POST['date_modif'];
$pro_bloque = $_POST['bloque'];


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
		
  
try{
$req_modif="UPDATE produits SET pro_cat_id=:pro_cat_id, pro_ref=:pro_ref, pro_libelle=:pro_libelle, pro_description=:pro_description, pro_prix=:pro_prix, pro_stock=:pro_stock, pro_couleur=:pro_couleur, pro_d_modif=:pro_d_modif, pro_bloque=:pro_bloque WHERE pro_id=:pro_id" ;
$requete = $db->prepare($req_modif);

$requete->execute(array(
'pro_cat_id'=>$pro_cat_id,
'pro_ref'=>$pro_ref,
'pro_libelle'=>$pro_libelle,
'pro_description'=>$pro_description,
'pro_prix'=>$pro_prix,
'pro_stock'=>$pro_stock,
'pro_couleur'=>$pro_couleur,
'pro_d_modif'=>$pro_d_modif,
'pro_bloque'=>$pro_bloque,
'pro_id'=>$pro_id));
$requete->closeCursor();
}

catch(Exception $e){
	echo "la connexion à la base de données a échoué <br>";
	echo"Erreur : ".$e->getmessage()."br>";
	echo"N° : ".$e->getCode();
	die("Fin du script");
}
header("location: liste.php");
?>