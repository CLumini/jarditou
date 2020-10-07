     <?php
	 
		include "header.php";	        
		
			try
		{
			$db= new PDO('mysql:host=localhost;dbname=jarditou;charset=utf8', 'root','');
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(Exception $e)
		{
			echo'Erreur : '.$e->getMessage().'<br>';
			echo'No : '.$e->getCode().'<br>';
			die('Connexion au serveur impossible.');
		} 
		
		$pro_id = $_GET['pro_id'];
		
        $result = $db->query('SELECT * FROM produits join categories on pro_cat_id= cat_id && pro_id='.$pro_id);
        $produit = $result->fetch(PDO::FETCH_OBJ);
		
       ?>
	   
	   
	   <!-- 								Image					-->
	   
	    <div class= 'd-flex justify-content-center'><!-- on centre l'image -->
		
			<?php echo "<img src='public/img/".$pro_id."' class= 'img-fluid float-center' height='300' width='300'>";?>
	   
	    </div>
		
		<!--														-->
		
		
	<div class="container">
	   
		Référence :
		<br>
		<input type ="text" name="reference" class ="form-control" value= '<?= $produit->pro_ref;?>' readonly>
		<br>
		Catégorie : 
		<br>
		<input type ="text" name="categorie" class ="form-control" value= '<?= $produit->cat_nom;?>' readonly>
        <br>
		Libellé :
		<br>
		<input type ="text" name="libelle" class ="form-control" value= '<?= $produit->pro_libelle; ?>' readonly>
        <br>
        Description :
		<br>
		<textarea name="description" class ="form-control"  readonly><?= $produit->pro_description; ?></textarea>
        <br>
        Prix : 
		<br>
		<input type ="text" name="prix" class ="form-control" value= '<?= $produit->pro_prix;?>' readonly>
		<br>
		Stock :
		<br>
		<input type ="text" name="stock" class ="form-control" value= '<?= $produit->pro_stock;?>' readonly>
		<br>
		Couleur :
		<br>
		<input type ="text" name="couleur" class ="form-control" value= '<?= $produit->pro_couleur;?>' readonly>
		<br>
		Produit bloqué ? :
		<br>
		
		
		<!-- Si le produit est bloqué, "oui" ou "non" -->
		<?php
		
		if($produit->pro_bloque == '1')
		{
			echo'Oui';
		}else{ 
			echo'Non';
		}
		
		?>
		<!--										 -->
		
		
		</div>
		<br>
		Date d'ajout :
		<br>
		<input type ="text" name="date_ajout" class ="form-control" value= '<?= $produit->pro_d_ajout;?>' readonly>
		<br>
		Date de modification :
		<br>
		<input type ="text" name="date_modif" class ="form-control" value= '<?= $produit->pro_d_modif;?>' readonly>
		<br>
		
										<!-- Requêtes Modifier / Supprimer / Retour -->
		
		<a href = "liste.php"><button class='btn btn-dark mb-3'>Retour</button></a>
		<?php echo'<a href = "produits_modif.php?pro_id='.$pro_id.'"><button class ="btn btn-warning mb-3">Modifier</button></a>';?>
		<?php echo'<a href = "produits_script_delete.php?pro_id='.$pro_id.'"onclick="supprimer();"><button class = "btn btn-danger mb-3">Supprimer</button></a>';?>
		
	</div>
		
	<?php $result->closeCursor();?>
	
	<!-- Fonction qui se déclenche quand on appuie sur "supprimer" -->
	<script>
	function supprimer()
	{
	let resultat = confirm("voulez-vous vraimment supprimer ce produit ?");
	if (resultat == false)
	{
		event.preventDefault();
	}
	}
	</script>
	
	 <?php include"footer.php";?>

