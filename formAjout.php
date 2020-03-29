<?php
session_start();
if (!isset($_SESSION["login"])) { include("form.php"); exit();}
?>
<?php 
include("data.php");
$filieres= getListeFilieres();
 ?>
<?php
include("haut.php");
 ?>

<h1>Ajouter un étudiant</h1>
<hr />
<form name = "myForm" action = "insert.php" method = "post">

<pre>
Entrez le code:              <input  type = "text"  name = "CodeE"  />

Entrez le nom:               <input  type = "text"  name = "Nom"  />

Entrez le prénom:            <input  type = "text"   name =  "Prenom"   />

Entrez la Note  :             <input  type =  "text"  name = "Note"  />

Entrez le mot de passe       <input  type =  "password"  name = "Pass"  />

Sexe : 
<input  type = "radio"  name =  "Sexe"  value = "H"   /> Homme
<input  type = "radio"  name =  "Sexe"  value =  "F"   /> Femme

Loisirs: 	
<input  type = "checkbox"  name =  "Choix[1]"  value = "Sport"   /> Sport
<input  type = "checkbox"  name =  "Choix[2]"  value = "Lecture"   /> Lecture
<input  type = "checkbox"  name =  "Choix[3]"  value = "Musique"   /> Musique

Filière:
<select name = "Filiere">

<?php 

foreach ($filieres as $f) { ?>

<option  value =  "<?= $f['CodeF'] ?>" 

<?php if ($f['CodeF']=="SMP") echo "selected"; ?>

 ><?= $f["IntituleF"] ?></option>


<?php } ?>
	
</select>

Saisissez ici un commentaire :
		<textarea  name =  "Commentaire"  cols = "20"  rows = "5"  ></textarea>
		

</pre>

<input  type = 'submit'  value =  'Envoyer' /> <input  type = 'reset'  value =  'Annuler' />

</form>

<br />

<a href ="liste.php">Revenir à l'acceuil</a>


<?php
include("bas.php");

?>
 
 