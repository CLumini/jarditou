		 <?php
	 
		include "header.php";	        
		require "connexion_bdd.php";
		$db=connexionBase();
		
		$pro_id = $_GET['pro_id'];
		
        $result = $db->query('SELECT * FROM produits join categories on pro_cat_id= cat_id && pro_id='.$pro_id);
        $produit = $result->fetch();
		
       ?>
	   
	   
	   <!-- 								Image					-->
	   
	    <div class= 'd-flex justify-content-center'><!-- on centre l'image -->
		
			<?php echo "<img src='public/img/".$pro_id."' class= 'img-fluid float-center' height='300' width='300'>";?>
	   
	    </div>
		
		<!--														-->
		
		

	   
		<label for="reference">Référence : </label>
		<input class= "form-control mb-2" type="text" name="reference" value= "<?= $produit->pro_ref;?>" readonly>
		
		<label for="categorie">Catégorie : </label>
		<input type ="text" name="categorie" class ="form-control mb-2" value= "<?= $produit->cat_nom;?>" readonly>
		
        <label for="libelle">Libéllé : </label>
		<input class= "form-control mb-2" type="text" name="libelle" value= "<?= $produit->pro_libelle; ?>" readonly>
		
        <label for="description">Description : </label>
		<textarea class= "form-control mb-2" name="description" readonly><?= $produit->pro_description; ?></textarea>
		
        <label for="prix">Prix : </label>
		<input class= "form-control mb-2" type ="number" name="prix" step= "0.01" min="0.00" max="999999.99" value= "<?= $produit->pro_prix;?>" readonly>
		
		<label for="stock">Stock : </label>
		<input class= "form-control mb-2" type="text" name="stock" value= "<?= $produit->pro_stock;?>" readonly>
		
		<label for="couleur">Couleur : </label>
		<input class= "form-control mb-2" type="text" name="couleur" value= "<?= $produit->pro_couleur;?>" readonly>
		
		<label for ="bloque">Produit bloqué ? : </label>
		<input class= "form-control mb-2" type="text" name="bloque" value="<?php if($produit->pro_bloque == '1'){echo'Oui';}else{echo'Non';}?>" readonly>
	
		<label for="date_ajout">Date d'ajout : </label>
		<input class= "form-control mb-2" type="date" name="date_ajout" value= "<?= $produit->pro_d_ajout;?>" readonly>
		
		<label for="date_modif">Date de modification : </label>
		<input  class= "form-control mb-2" type="date" name="date_modif" value= "<?= $produit->pro_d_modif;?>" readonly>
		<br>
		
										<!-- Requêtes Modifier / Supprimer / Retour -->
		
		<a href = "liste.php"><button class='btn btn-dark mb-3'>Retour</button></a>
		<?php echo'<a href = "produits_modif.php?pro_id='.$pro_id.'"><button class ="btn btn-warning mb-3">Modifier</button></a>';?>
		<?php echo'<a href = "produits_script_delete.php?pro_id='.$pro_id.'"onclick="supprimer();"><button class = "btn btn-danger mb-3">Supprimer</button></a>';?>
		
	
		
	<?php $result->closeCursor();?>
	
	<!-- Fonction qui se déclenche quand on appuie sur "supprimer" -->
	<script>
	function supprimer()
	{
	let resultat = confirm("Voulez-vous vraiment supprimer ce produit ?");
	if (resultat == false)
	{
		event.preventDefault();
	}
	}
	</script>
	
	
<?php include "footer.php";?>

