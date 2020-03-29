<?php
session_start();
if (!isset($_SESSION["login"])) { include("form.php"); exit();}
?>

<?php 

include ("data.php");
$filiere=!empty($_GET["f"])? $_GET["f"] :"SMI";
$liste= getListeEtudiants($filiere);
$nombre= count($liste);
$max = getMax (getNotes($filiere));


 ?>
 
 
 
 <?php

include("haut.php");
 ?>

<h1>Liste des étudiants réussis de la filière: <?= $filiere ?></h1>

<hr />
<b>Nombre des étudiants : <?= $nombre ?> </b><br />
<b>Meilleure note : <?= $max ?></b> <br />
<hr />

<table border="1" align = "center" width = "60%">
	<tr> 
		<th>Nom </th>
		<th>Prénom </th>
		<th>Note</th>
		<th>Mention</th>
	</tr>
	
	<?php
		foreach ($liste as $e) { ?>
		 
		 
			<tr>
				<td> <a href ="detail.php?CodeE=<?= $e["CodeE"] ?>"><?= $e["Nom"] ?> </a></td>
				<td> <a href ="detail.php?CodeE=<?= $e["CodeE"] ?>"><?= $e["Prenom"] ?> </a></td>
				<td> <a href ="detail.php?CodeE=<?= $e["CodeE"] ?>"><?= $e["Note"] ?> </a></td>
				<td> <a href ="detail.php?CodeE=<?= $e["CodeE"] ?>"><?= getMention($e["Note"]) ?> </a></td>
			</tr>	
	
		<?php } ?>
		<tr><td colspan="4" align ="center"><a href="formAjout.php"><b>Ajouter un étudiant</b></a></td></tr>
		
	</table>
	

<a href ="acceuil.php">Accueil</a> | <a href ="javascript:history.go(-1)">Revenir à la Précédente</a>
<?php

include("bas.php");


?>
 
 