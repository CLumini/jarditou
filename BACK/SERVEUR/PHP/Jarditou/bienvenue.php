<?php
include 'header.php';


$nom =$_POST['nom'];
$prenom =$_POST['prenom'];
$mail =$_POST['eMail'];
$sexe =$_POST['sexe'];
$naissance =$_POST['date_naissance'];
$code_postal =$_POST['code_postal'];
$adresse =$_POST['adresse'];
$ville =$_POST['ville'];
$sujet =$_POST['choix'];
$question =$_POST['question'];
$valid =$_POST['formulaire'];

	if($sexe =='Féminin')
	{
	echo'Bonjour Madame '.$nom.', Bienvenue !';
	}
	else
	{
		echo'Bonjour Monsieur '.$nom.', Bienvenue !';
	}
	?>
	<ul>
	<li><?php echo 'Nom : '.$nom;?></li>
	<li><?php echo 'Prénom : '.$prenom;?></li>
	<li><?php echo 'Sexe : '.$sexe;?></li>
	<li><?php echo 'Date de naissance : '.$naissance;?></li>
	<li><?php echo 'Adresse : '.$adresse;?></li>
	<li><?php echo 'Code Postal : '.$code_postal;?></li>
	<li><?php echo 'Ville : '.$ville;?></li>
	<li><?php echo 'E-Mail : '.$mail;?></li>
	<li><?php echo 'Sujet de la demande : '.$sujet;?></li>
	<li><?php echo 'Question : '.$question;?></li>
	<li><?php echo $valid;?></li>
</ul>
<?php include 'footer.php';?>