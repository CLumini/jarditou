   <?php
   	header("Cache-Control: no-cache, must-revalidate" );
	include "header.php";
	require "connexion_bdd.php";
	$db=connexionBase();
	

    $result = $db->query('SELECT pro_photo, pro_id, pro_ref, pro_libelle, pro_prix, pro_stock, pro_couleur, pro_d_ajout, pro_d_modif, pro_bloque FROM produits ORDER BY pro_id ASC');

    if (!$result) 
    {
        $tableauErreurs = $db->errorInfo();
        echo $tableauErreur[2]; 
        die("Erreur dans la requête");
    }

    if ($result->rowCount() == 0) 
    {
       die("La table est vide");
    }
	
	?>
		<div class= 'table-responsive'>
	
	
			<table class='table-bordered table hover'>
		
				<thead>
                    <tr class='table-active'>
                        <th>Photo</th>
                        <th>ID</th>
                        <th>Référence</th>
                        <th>Libellé</th>
                        <th>Prix</th>
						<th>Stock</th>
                        <th>Couleur</th>
						<th>Ajout</th>
						<th>Modif</th>
						<th>Bloqué</th>
                    </tr>
          </thead>
		  
<?php
          while ($row = $result->fetch())
          {
            echo"<tr>";
			echo"<td> <img src='public/img/".$row->pro_id.".".$row->pro_photo."' class='img-fluid' height='150' width='150'></td>";
            echo"<td>".$row->pro_id."</td>";
            echo"<td>".$row->pro_ref."</td>";
            echo '<td><a href="detail.php?pro_id='.$row->pro_id.'"title='.$row->pro_libelle.'>'.$row->pro_libelle.'</a></td>';
			echo"<td>".$row->pro_prix."</td>";
			echo"<td>".$row->pro_stock."</td>";
			echo"<td>".$row->pro_couleur."</td>";
			echo"<td>".$row->pro_d_ajout."</td>";
			echo"<td>".$row->pro_d_modif."</td>";
			echo"<td>".$row->pro_bloque."</td>";
            echo"</tr>";
          }

        echo "</table>";
		 $result->closeCursor();
		
?>
		
	</div>
	<a href = 'produit_ajout.php'><button class ='btn btn-success mb-3'>Ajouter</button></a>
   
  <?php include"footer.php";?>