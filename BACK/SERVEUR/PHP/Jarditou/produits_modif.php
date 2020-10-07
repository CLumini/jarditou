<?php include "header.php";
require "connexion_bdd.php";
$db = connexion_base();

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

	   <form action ="produits_modif_script.php" method ="POST">
	   
	   
	   	<?php echo'<input hidden type ="text" name="id" value ="'.$pro_id.'" readonly>'?>
	   
	   
		Référence :
		<input type ="text" name="reference" class= "form-control mb-2" value= '<?php echo $produit->pro_ref; ?>'>
		
		<br>
		
		Catégorie : 
		
		<!--  Requête et boucle qui permet de sélectionner la catégorie appropriée et l'ID qui lui est associé dans la Base de Données -->

				<?php   $res_categorie = $db->query('SELECT cat_id, cat_nom FROM categories');
						$categorie = $res_categorie->fetch(PDO::FETCH_OBJ);

							if (!$res_categorie) 
								{
									$optionErreurs = $db->errorInfo();
									echo $optionErreur[2]; 
									die("Erreur dans la requête");
								}

							if ($res_categorie->rowCount() == 0) 
								{
									die("La table option est vide");
								}
	
	
	
							// Ouverture de la balise 'select'
							
						echo'<select class="form-control mb-2" name ="categorie" id ="categorie">';
  
							while ($row = $res_categorie->fetch(PDO::FETCH_OBJ))
								{
									echo '<option value="'.$row->cat_id.'">'.$row->cat_nom.'</option>';
								} 
						echo'</select>';
  
						$res_categorie->closeCursor();
		  
				?>
						<!--                                  	Fin de la requête catégorie     					--> 
		<br>
		
		Libellé :
		<input type ="text" name="libelle" class= "form-control mb-2" value= '<?php echo $produit->pro_libelle; ?>'>
        
		<br>
        
		Description :
		<textarea name="description" class= "form-control mb-2" ><?php echo $produit->pro_description; ?></textarea>
        
		<br>
        
		Prix :
		<input type ="text" name="prix" class= "form-control mb-2" value= '<?php echo $produit->pro_prix;?>'>
		
		<br>
		
		Stock :
		<input type ="text" name="stock" class= "form-control mb-2" value= '<?php echo $produit->pro_stock;?>'>
		
		<br>
		
		Couleur :
		<input type ="text" name="couleur" class= "form-control mb-2" value= '<?php echo $produit->pro_couleur;?>'>
		
		<br>
		
		Produit bloqué ? :
		
		<br>
		
		<div class="form-check form-check-inline">
		<input class="form-check-input" type ="radio" name ="bloque" value="1"<?php if($produit->pro_bloque=='1'){echo'checked';}?>>Oui
		</div>
		<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name = "bloque" value ="0"<?php if($produit->pro_bloque==''||'0'){echo'checked';}?>>Non
		
		
		</div>
		
		<br>
		<br>
		
		Date d'ajout :
		<input type ="date" name="date_ajout" class= "form-control mb-2" readonly value= '<?php echo $produit->pro_d_ajout;?>'>
		
		<br>
		
		Date de modification :
		<input type ="text" name="date_modif" class= "form-control mb-2" readonly value= "<?php $date= date("d-m-Y");
Print(" $date ");?>">
		
		<br>
		
		<button class="btn btn-success mb-3" onclick = "modif();">Modifier</button>
		
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