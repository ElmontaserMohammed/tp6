<?php
include("haut.php");
 ?>
<h1>Autentification</h1>


<form name = "loginForm" action = "verifier.php" method = "post" >
<pre>
Login    <input name ="login" type = "text" placeholder="mohammed" /> 

Password <input name ="pass" type = "password" placeholder="elmontaser" /> 

         <input type = "submit" value = "Envoyer" /> <input type = "reset" value ="Annuler" />
</pre>
</form>


<?php
include("bas.php");

?>
 