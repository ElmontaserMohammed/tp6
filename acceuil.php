<?php
session_start();
if (!isset($_SESSION["login"])) { include("form.php"); exit();}
?>

<?php 

include ("data.php");
$filieres= getListeFilieres();
?>
 
 
<?php
include("haut.php");
 ?>
 
 
<h1 align="center">Affichage des résultats</h1>

<hr />
<b>Cliquez sur une filière pour voir les résultats </b><br />

<ol>
	<?php 
		foreach ($filieres as $fil) { ?>
		 
		 
			<li>
				<a href ="liste.php?f=<?= $fil["CodeF"]?>"><?= $fil["IntituleF"]?> </a>
				
			</li>	
	
		<?php } ?>

</ol>



<?php
include("bas.php");
		
?>
 
 
 