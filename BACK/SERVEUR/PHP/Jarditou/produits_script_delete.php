<?php require "connexion_bdd.php";
$pro_id=$_GET['pro_id'];
$db=connexionBase();

//																suppression de l'image 

//on extrait l'extension de la photo pour pouvoir retrouver son chemin dans le dossier

$requeteDeleteImg= $db->prepare('SELECT pro_photo from produits WHERE pro_id ='.$pro_id);
$requeteDeleteImg->execute();
$deleteImg = $requeteDeleteImg->fetch();
$extension =$deleteImg->pro_photo;

//On supprime le fichier (s'il existe)
$file='public/img/'.$pro_id.'.'.$extension;
if(file_exists($file))
{
	unlink($file);
}

$requeteDeleteImg->closeCursor();
//																suppression de l'image 


$requete =$db->prepare("DELETE from produits WHERE pro_id= :pro_id");

$requete->execute(array(
':pro_id'=>$pro_id));


$requete->closeCursor();

header ("Location:liste.php");
exit;
?>
