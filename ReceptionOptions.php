<?php

if(isset($_GET["langue"])) setcookie("lang",$_GET["langue"], time()+ 3600*24*10);
if(isset($_GET["textClr"])) setcookie("textClr",$_GET["textClr"], time()+ 3600*24*10);
if(isset($_GET["bgClr"])) setcookie("bgClr",$_GET["bgClr"], time()+ 3600*24*10);
header("location: acceuil.php");

?> 
 
