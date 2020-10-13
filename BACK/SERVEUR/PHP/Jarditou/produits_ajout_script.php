<?php

$pro_cat_id=$_POST['categorie'];
$pro_libelle= $_POST['libelle'];
$pro_description= $_POST['description'];
$pro_prix= $_POST['prix'];
$pro_stock= $_POST['stock'];
$pro_couleur= $_POST['couleur'];
$pro_d_ajout= $_POST['date_ajout'];
$pro_bloque= $_POST['bloque'];

require "connexion_bdd.php";


/*											extraction de l'extension du fichier																				*/

				$extension = substr(strrchr($_FILES["fichier"]["name"],"."),1);
							
							if($_FILES["fichier"]["error"]>0)
							{
								echo"Erreur, votre, fichier n'a pas été importé";
							}

/*											extraction de l'extension du fichier																				*/


$requete = $db->prepare("INSERT INTO produits (pro_cat_id, pro_libelle, pro_description, pro_prix, pro_stock, pro_couleur, pro_d_ajout, pro_bloque, pro_photo) VALUES (:pro_cat_id, :pro_libelle, :pro_description, :pro_prix, :pro_stock, :pro_couleur, :pro_d_ajout, :pro_bloque, :pro_photo)");

$requete->bindValue(':pro_cat_id', $pro_cat_id, PDO::PARAM_INT);
$requete->bindValue(':pro_libelle', $pro_libelle, PDO::PARAM_STR);
$requete->bindValue(':pro_description', $pro_description, PDO::PARAM_STR);
$requete->bindValue(':pro_prix', $pro_prix, PDO::PARAM_INT);
$requete->bindValue(':pro_stock', $pro_stock, PDO::PARAM_INT);
$requete->bindValue(':pro_couleur', $pro_couleur, PDO::PARAM_STR);
$requete->bindValue(':pro_d_ajout', $pro_d_ajout, PDO::PARAM_STR);
$requete->bindValue(':pro_bloque', $pro_bloque, PDO::PARAM_INT);
$requete->bindValue(':pro_photo', $extension, PDO::PARAM_STR);

$requete->execute();
$requete->closeCursor();

/*                                      			upload de l'image                                                                 */
													
	$requeteID = $db->prepare("SELECT pro_id FROM produits WHERE pro_ref=:pro_ref"); // on récupère le pro_id grâce à la référence (pro_ref) afin de nommer le fichier.
    $requeteID->bindValue(':pro_ref',$pro_ref, PDO::PARAM_STR);
    $requeteID->execute();
    $produit=$requeteID->fetch(PDO::FETCH_OBJ);
    $requeteID->closeCursor();

    $target_file = "C:/wamp/www/Jarditou/public/img/".$produit->pro_id.".".$extension;
	

							
		$aMimeTypes= array("image/gif", "image/jpg", "image/jpeg", "image/pjpeg", "image/png","image/x-png", "image/tiff");
		$finfo= finfo_open(FILEINFO_MIME_TYPE);
		$mimetype= finfo_file($finfo, $_FILES["fichier"]["tmp_name"]);

						finfo_close($finfo);
						
							if(in_array($mimetype, $aMimeTypes))
							{	
							move_uploaded_file($_FILES["fichier"]["tmp_name"],$target_file);
							}
							else
							{
								echo"type de fichier ,non autorisé";
							}
/*                                      			upload de l'image                                                                 */
						


header("Location: liste.php");
exit;


?>