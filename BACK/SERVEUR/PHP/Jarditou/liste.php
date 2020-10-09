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
	
	
	echo"<div class= 'table-responsive'>";
	
	
        echo "<table class='table-bordered table hover'>";
		
	     echo "<thead>
                    <tr class='table-active'>
                        <th>Photo</th>
                        <th>ID</th>
                        <th>Catégorie</th>
                        <th>Libellé</th>
                        <th>Prix</th>
						<th>Stock</th>
                        <th>Couleur</th>
						<th>Ajout</th>
						<th>Modif</th>
						<th>Bloqué</th>
                    </tr>
          </thead>";

          while ($row = $result->fetch(PDO::FETCH_OBJ))
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
		
		
		
	echo"</div>";
	echo"<a href = 'produit_ajout.php'><button class ='btn btn-success mb-3'>Ajouter</button></a>";
   
  include"footer.php";?>