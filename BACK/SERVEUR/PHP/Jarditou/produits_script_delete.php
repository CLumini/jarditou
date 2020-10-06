<?php require "connexion_bdd.php";
$pro_id=$_GET['pro_id'];
$db = connexion_base();

$requete =$db->prepare("DELETE from produits WHERE pro_id= :pro_id");
$requete->bindValue(':pro_id',$pro_id, PDO::PARAM_INT);


$requete->execute();
$requete->closeCursor();

header ("location : liste.php");
