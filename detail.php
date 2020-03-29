<?php
session_start();
if (!isset($_SESSION["login"])) { include("form.php"); exit();}
?>

<?php 

include ("data.php");

$c=$_GET["CodeE"];

$etudiant= getDetailEtudiant($c);
 ?>
 
 
 
 <?php
include("haut.php");
 ?>

<h1>Détail de l'étudiant: <?= $c ?></h1>

<hr />


<b> Code :    <?= $etudiant["CodeE"]    ?>  </b><br />
<b> Nom :     <?= $etudiant["Nom"]     ?>  </b><br />
<b> Prénom :  <?= $etudiant["Prenom"]  ?>  </b><br />
<b> Filière : <?= $etudiant["Filiere"] ?>  </b><br />
<b> Note :    <?= $etudiant["Note"]    ?>  </b><br />



<br />
<div><b>
	<a href="modifier.php?codeE=<?= $c ?>">Modifier</a> &nbsp; &nbsp; &nbsp;
	<a href="Supprimer.php?codeE=<?= $c ?>">Supprimer</a>
</b></div>

<a href ="acceuil.php">Accueil</a> | <a href ="javascript:history.go(-1)">Revenir à la Précédente</a>

<?php
include("bas.php");

?>
 
 