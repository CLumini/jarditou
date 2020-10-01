     <?php
		require "header.php";	 
        require "connexion_bdd.php"; 
        $db = connexion_base();
		
		if(isset($_GET['pro_id']))
		{
        $pro_id = $_GET['pro_id'];
		}
        $requete = 'SELECT * FROM produits WHERE pro_id='.$pro_id;
        $result = $db->query($requete);

        $produit = $result->fetch(PDO::FETCH_OBJ);
       ?>
	   
		Référence :
		<br>
		<input type="text" name="reference" readonly<?php echo $produit->pro_ref; ?>>
		<br>
		Catéforie : 
		<br>
		<input type="text" name="categorie" readonly <?php echo $produit->pro_cat_id;?>>
        <br>
		Libellé :
		<br>
		<input type="text" name="libelle" readonly<?php echo $produit->pro_libelle; ?>>
        <br>
        Description :
		<br>
		<input type="text" name="description" readonly<?php echo $produit->pro_description; ?>>
        <br>
        Prix : 
		<br>
		<input type="text" name="prix" readonly<?php echo $produit->pro_prix;?>>
		<br>
		Stock :
		<br>
		<input type="text" name="stock" readonly<?php echo $produit->pro_stock;?>>
		<br>
		Couleur :
		<br>
		<input type="text" name="couleur" readonly<?php echo $produit->pro_couleur;?>>
		<br>
		Produit bloqué ? :
		<br>
		<?php echo $produit->pro_bloque;?>
		<br>
		<input type ="radio" name ="bloque" value="oui">Oui
		<input type="radio" name = "bloque" value ="non">Non
		<?php if($produit->pro_bloque=1){$_GET['bloque']='oui';}else{$_GET['bloque']='non';}?>
		<br>
		Date d'ajout :
		<br>
		<input type="text" name="date_ajout" readonly<?php echo $produit->pro_d_ajout;?>>
		<br>
		Date de modification :
		<input type="text" name="date_modif" readonly<?php echo $produit->pro_d_modif;?>>
		<br>
		<a href = "liste.php"><button> Retour</button></a>

	 <?php require"footer.php";?>

