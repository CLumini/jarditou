<?php include "header.php";
require "connexion_bdd.php";


$pro_id = $_GET['pro_id'];
		
        $result = $db->query('SELECT * FROM produits WHERE pro_id='.$pro_id);
        $produit = $result->fetch(PDO::FETCH_OBJ);
?>
				
				<!-- 								Image					-->
				
		<div class= 'd-flex justify-content-center mt-3 mb-3'>	<!-- on centre l'image -->
		
			<?php echo "<img src='public/img/".$pro_id."' class= 'img-fluid float-center' height='300' width='300'>";?>
	   
	    </div>
		
				<!--														-->
				
<div class ="container">

	   <form action ="produits_modif_script.php" method ="POST" enctype="multipart/form-data">
	   
	   
	   	<?php echo'<input hidden type ="text" name="id" value ="'.$pro_id.'" readonly>'?>
	   
	   
		
		<label for="reference">Référence : </label>
		<input class= "form-control mb-2" type="text" name="reference" value= '<?php echo $produit->pro_ref; ?>'>
		
		<label for="categorie">Catégorie : </label>
		
						<!--  Requête et boucle qui permet de sélectionner la catégorie appropriée et l'ID qui lui est associé dans la Base de Données -->


<?php   					$categories = $db->query('SELECT cat_id, cat_nom FROM categories WHERE  cat_parent IS NULL');

							if (!$categories) 
								{
									$optionErreurs = $db->errorInfo();
									echo $optionErreur[2]; 
									die("Erreur dans la requête");
								}

							if ($categories->rowCount() == 0) 
								{
									die("La table option est vide");
								}
	
						echo'<select class="form-control mb-2" name ="categorie" id ="categorie">';
						
							foreach($categories as $catValues)// on parcourt le tableau Catégorie pour en extraire les catégories d'outils (cat_parents Null)
							{
							echo'<optgroup label="'.$catValues[1].'">';// catValues[1] renvoie le cat_nom--------- soucis : il me manque les catégories 2 et 3 ?! 
							
								$sousCategorie= $db->query('SELECT cat_id, cat_nom FROM categories WHERE cat_parent='.$catValues[0].' and cat_parent IS NOT NULL');//catValues[0] renvoie le cat_id					
								
								foreach($sousCategorie as $sousCatValues)// on extrait les sous-catégories (cat_parent non Null)
									{
									echo'<option value="'.$souCatValues[0].'">'.$sousCatValues[1].'</option>';																			
									}
									
							echo'</optgroup>';
								
							}
						echo'</select>';
  
						$categories->closeCursor();
						$sousCategorie->closeCursor();
?>
						<!--                                  	Fin de la requête catégorie                                                          -->

		<label for="libelle">Libéllé : </label>
		<input class= "form-control mb-2" type="text" name="libelle" value= '<?php echo $produit->pro_libelle; ?>'>
        
		<label for="description">Description : </label>
		<textarea class= "form-control mb-2" name="description"><?php echo $produit->pro_description; ?></textarea>
        
		<label for="prix">Prix : </label>
		<input class= "form-control mb-2" type ="number" name="prix" step= "0.01" min="0.00" max="999999.99" value= '<?php echo $produit->pro_prix;?>'>
		
		<label for="stock">Stock : </label>
		<input class= "form-control mb-2" type="text" name="stock" value= '<?php echo $produit->pro_stock;?>'>
		
		<label for="couleur">Couleur : </label>
		<input class= "form-control mb-2" type="text" name="couleur" value= '<?php echo $produit->pro_couleur;?>'>
		
		<label for ="bloque">Produit bloqué ? : </label>
		
		<div class="form-check form-check-inline">
		<input class="form-check-input" type ="radio" id ="oui" name ="bloque" value="1"<?php if($produit->pro_bloque=='1'){echo'checked';}?>>Oui
		</div>
		
		<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" id= "non" name = "bloque" value ="0"<?php if($produit->pro_bloque==''||'0'){echo'checked';}?>>Non
		<span id="erreurBloque"></span>
		</div>
		
		<br>
		
		<label for="date_ajout">Date d'ajout : </label>
		<input class= "form-control mb-2" type="date" name="date_ajout" value= '<?php echo $produit->pro_d_ajout;?>'>
		
		<label for="date_modif">Date d'ajout : </label>
		<input  class= "form-control mb-2" type="date" name="date_modif">
		
		<br>
			<input type="file" name="fichier">
			<input type="hidden" name="MAX_FILE_SIZE" value="30000">
		<br>
		<br>
		
		<button class="btn btn-success mb-3" onclick = "modif();" id="bouton_envoi">Modifier</button>
		<span id="erreur"></span>
		<script src="/public/js/form_ajout_modif.js"></script>
		</form>
		
		
		<?php echo'<a href = "detail.php?pro_id='.$pro_id.'"><button class="btn btn-dark mb-3">Retour</button></a>';?>
		
		</div>
		
	<?php $result->closeCursor();?>
	
	
	<!-- Fonction qui se déclenche quand on appuie sur "Modifier" -->
	
	
	<script>
	function modif()
	{
	let resultat = confirm("Êtes-vous sûr de vouloir modifier le produit ?");
	if(resultat== false)
	{
		event.preventDefault();
	}
	}
	

	</script>
	
	<?php include "footer.php";?>
	