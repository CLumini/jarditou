<?php 
require "connexion_bdd.php";
$db = connexion_base(); 
$pro_cat_id = $_POST['categorie'];
$pro_ref = $_POST['reference'];
$pro_libelle = $_POST['libelle'];
$pro_description = $_POST['description'];
$pro_prix = $_POST['prix'];
$pro_stock = $_POST['stock'];
$pro_couleur = $_POST['couleur'];
$pro_d_modif =$_POST['date_modif'];
$pro_bloque = $_POST['bloque'];


$requete = $db->prepare("UPDATE produits SET  pro_ref = :pro_ref, pro_libelle = :pro_libelle, pro_description = :pro_description, pro_prix = :pro_prix, pro_stock = :pro_stock, pro_couleur = :pro_couleur, pro_d_modif = :pro_d_modif, pro_bloque = :pro_bloque WHERE pro_id = : pro_id");

$requete->bindValue(':pro_ref', $pro_ref, PDO::PARAM_STR);
$requete->bindValue(':pro_libelle', $pro_libelle, PDO::PARAM_STR);
$requete->bindValue(':pro_description', $pro_description, PDO::PARAM_STR);
$requete->bindValue(':pro_prix', $pro_prix, PDO::PARAM_INT);
$requete->bindValue(':pro_stock', $pro_stock, PDO::PARAM_INT);
$requete->bindValue(':pro_couleur', $pro_couleur, PDO::PARAM_STR);
$requete->bindValue(':pro_d_modif', $pro_d_modif, PDO::PARAM_STR);
$requete->bindValue(':pro_bloque', $pro_bloque, PDO::PARAM_INT);

$requete->execute();

$requete->closeCursor();

header ("location :liste.php");
?>