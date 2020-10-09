 <?php
		include "header.php";	 
        require "connexion_bdd.php"; 
        $db = connexion_base();
		?>
		
<div class= "container">
		
		<!--		Création d'un nouvel id 				-->
		
<?php $der_id= $db->query('SELECT pro_id FROM produits WHERE pro_id= (select MAX(pro_id) from produits)');
$donnee= $der_id->fetch(PDO::FETCH_ASSOC);
$max= $donnee['pro_id'];
$new_id= $max+1;
$der_id->closeCursor();?>

		<!-- 												-->

		


		<form action ="produits_ajout_script.php" method="POST" enctype="multipart/form-data">


				<?= '<input type="hidden" name="max_id" value="'.$new_id.'">'; ?> <!-- nouveau pro_id associé au produit sera envoyé au script sous POST (pour nommer l'image)-->


		<label for="categorie">Catégorie : </label>

						<!--  Requête et boucle qui permet de sélectionner la catégorie appropriée et l'ID qui lui est associé dans la Base de Données -->

				<?php   $result = $db->query('SELECT cat_id, cat_nom FROM categories');
						$categorie = $result->fetch(PDO::FETCH_OBJ);

							if (!$result) 
								{
									$optionErreurs = $db->errorInfo();
									echo $optionErreur[2]; 
									die("Erreur dans la requête");
								}

							if ($result->rowCount() == 0) 
								{
									die("La table option est vide");
								}
	
						echo'<select class="form-control mb-2" name ="categorie" id ="categorie">';
  
							while ($row = $result->fetch(PDO::FETCH_OBJ))
								{
									echo '<option value="'.$row->cat_id.'">'.$row->cat_nom.'</option>';
								} 
						echo'</select>';
  
						$result->closeCursor();
		  
				?>
						<!--                                  	Fin de la requête catégorie                                                          -->


		<label for="reference">Référence : </label>
		<input class= "form-control mb-2" type="text" name="reference">

		<label for="libelle">Libéllé : </label>
		<input class= "form-control mb-2" type="text" name="libelle">

		<label for="description">Description : </label>
		<textarea class= "form-control mb-2" name="description"></textarea>

		<label for="prix">Prix : </label>
		<input class= "form-control mb-2" type="text" name="prix">

		<label for="stock">Stock : </label>
		<input class= "form-control mb-2" type="text" name="stock">

		<label for="couleur">Couleur : </label>
		<input class= "form-control mb-2" type="text" name="couleur">

		<label for="date_ajout">Date d'ajout : </label>
		<input class= "form-control mb-2" type="date" name="date_ajout">

		<label for="bloque">Bloqué ? :</label>
			<br>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="bloque" value ="1">Oui
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="bloque" value="0">Non
		</div>
			<br>
			
			
			
		
			
			<!--		Upload du fichier				-->
			
			<input type="file" name="fichier">
			<input type="hidden" name="MAX_FILE_SIZE" value="30000">
			
	  
			<!--										-->
			
		
				
				<br>
				<button class='btn btn-success mb-3 mt-3'>Ajouter</button>

		</form>
				<a href = "liste.php"><button class='btn btn-dark mb-3 mt-3'>Retour</button></a>


</div>
<?php include 'footer.php'?>