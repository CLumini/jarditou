   <?php
    require "connexion_bdd.php";
	require "header.php";
    $db = connexion_base(); 
    $requete = "SELECT pro_id, pro_ref, pro_libelle FROM produits WHERE ISNULL(pro_bloque) ORDER BY pro_id ASC";

    $result = $db->query($requete);

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

    echo "<table>";

    while ($row = $result->fetch(PDO::FETCH_OBJ))
    {
        echo"<tr>";
        echo"<td>".$row->pro_id."</td>";
        echo"<td>".$row->pro_ref."</td>";
        echo '<td><a href="detail.php?id='.$row->pro_id.'" title='.$row->pro_libelle.'>'.$row->pro_libelle.'</a></td>';
        echo"</tr>";
    }

    echo "</table>"; 
   
   require"footer.php";?>
