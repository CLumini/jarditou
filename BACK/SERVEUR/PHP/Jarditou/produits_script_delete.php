<?php require "connexion_bdd.php";
$pro_id=$_GET['pro_id'];
$db=connexionBase();

$requete =$db->prepare("DELETE from produits WHERE pro_id= :pro_id");

$requete->execute(array(
':pro_id'=>$pro_id));


$requete->closeCursor();

header ("Location:liste.php");
exit;
?>
