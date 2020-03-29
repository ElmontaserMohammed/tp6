<?php
include("haut.php");
 ?>

<h1>Précisez Vos préférences</h1>
<hr />
<br />

<form name = "myForm" action = "ReceptionOptions.php" method = "get">


<table align = "center" border ="1">
<tr>
<td>Langue :</td> <td> <select name = "langue">
<option  value =  "AR" selected>العربية</option>
<option  value =  "EN">English</option>
<option  value =  "FR">Français</option>
</select></td>
</tr>
<tr><td>Couleur du texte:</td>
<td>
<input type ="radio" name="textClr"  value ="red" /> <span style="color:red">Rouge </span><br />
<input type ="radio" name="textClr"  value ="green" /> <span style="color:green">vert </span><br />
<input type ="radio" name="textClr"  value ="blue" /> <span style="color:blue">Bleu </span><br />
<input type ="radio" name="textClr"  value ="gray" /> <span style="color:gray">Gris </span><br />
<input type ="radio" name="textClr"  value ="black" checked/> <span style="color:gray">black </span><br />
</td></tr>
<tr>
<td>Couleur d'arrière plan :</td>
<td>
<input type ="radio" name="bgClr"  value ="cayan" /> <span style="background:aqua">Aqua </span><br />
<input type ="radio" name="bgClr"  value ="gold" /> <span style="background:gold">gold </span><br />
<input type ="radio" name="bgClr"  value ="pink" /> <span style="background:pink">pink </span><br />
<input type ="radio" name="bgClr"  value ="limon" /> <span style="background:Beige">Beige </span><br />
<input type ="radio" name="bgClr"  value ="white" checked/> <span style="background:white">white </span><br />
</td>
<tr><td colspan="2" align = "center">
<input  type = 'submit'  value =  'Envoyer' /> <input  type = 'reset'  value =  'Annuler' onclick ="javascript: history.go(-1)" />
</tr></td>
</tr>

</table>

</form>


<?php
include("bas.php");

?>
 
 