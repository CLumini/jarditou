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


require "connexion_bdd.php";

		
									/*						Upload du fichier + Erreurs	et Sécurité		*/
							
							
		$extension = substr(strrchr($_FILES["fichier"]["name"],"."),1);
							
							if($_FILES["fichier"]["error"]>0)
							{
								echo"Erreur, votre, fichier n'a pas été importé";
							}
							
		$aMimeTypes= array("image/gif", "image/jpg", "image/jpeg", "image/pjpeg", "image/png","image/x-png", "image/tiff");
		$finfo= finfo_open(FILEINFO_MIME_TYPE);
		$mimetype= finfo_file($finfo, $_FILES["fichier"]["tmp_name"]);

						finfo_close($finfo);
						
							if(in_array($mimetype, $aMimeTypes))
							{	
							move_uploaded_file($_FILES["fichier"]["tmp_name"],"C:/wamp/www/Jarditou/public/img/".$pro_id.".".$extension);
							}
							else
							{
								echo"type de fichier ,non autorisé";
							}


									/*	 	Upload du fichier + Erreurs	et Sécurité		*/	
  

$req_modif="UPDATE produits SET pro_cat_id=:pro_cat_id, pro_ref=:pro_ref, pro_libelle=:pro_libelle, pro_description=:pro_description, pro_prix=:pro_prix, pro_stock=:pro_stock, pro_couleur=:pro_couleur, pro_d_modif=:pro_d_modif, pro_bloque=:pro_bloque, pro_photo=:pro_photo WHERE pro_id=:pro_id" ;
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
'pro_photo'=>$extension,
'pro_id'=>$pro_id));

$requete->closeCursor();



header("Location: liste.php");
?>