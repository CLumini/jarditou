<?php 

$pro_cat_id=$_POST['categorie'];
$pro_ref= $_POST['reference'];
$pro_libelle= $_POST['libelle'];
$pro_description= $_POST['description'];
$pro_prix= $_POST['prix'];
$pro_stock= $_POST['stock'];
$pro_couleur= $_POST['couleur'];
$pro_d_ajout= $_POST['date_ajout'];
$pro_bloque= $_POST['bloque'];

require "connexion_bdd.php";
$db = connexion_base();

$requete = $db->prepare("INSERT INTO produits (pro_cat_id, pro_ref, pro_libelle, pro_description, pro_prix, pro_stock, pro_couleur, pro_d_ajout, pro_bloque) VALUES (:pro_cat_id, :pro_ref, :pro_libelle, :pro_description, :pro_prix, :pro_stock, :pro_couleur, :pro_d_ajout, :pro_bloque)");

$requete->bindValue(':pro_cat_id', $pro_cat_id, PDO::PARAM_INT);
$requete->bindValue(':pro_ref', $pro_ref, PDO::PARAM_STR);
$requete->bindValue(':pro_libelle', $pro_libelle, PDO::PARAM_STR);
$requete->bindValue(':pro_description', $pro_description, PDO::PARAM_STR);
$requete->bindValue(':pro_prix', $pro_prix, PDO::PARAM_INT);
$requete->bindValue(':pro_stock', $pro_stock, PDO::PARAM_INT);
$requete->bindValue(':pro_couleur', $pro_couleur, PDO::PARAM_STR);
$requete->bindValue(':pro_d_ajout', $pro_d_ajout, PDO::PARAM_STR);
$requete->bindValue(':pro_bloque', $pro_bloque, PDO::PARAM_INT);


$requete->execute();
$requete->closeCursor();


header("Location: liste.php");
?>