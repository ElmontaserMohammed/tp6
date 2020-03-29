<?php 
function afficherDate($lang) {
/////La date sur le serveur
$jours["AR"] = array("الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة","السبت");
$jours["FR"] = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
$jours["EN"] = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

$months["AR"]=["يناير ", "فبراير", "مارس ", "أبريل", "ماي ", "يونيو" , "يوليوز" , "غشت ", "شتنبر" ,"أكتوبر" , "نونبر" , "دجنبر"];

$months["EN"]= ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

$months["FR"]= ["Janvier","Février","Mars", "Avril","Mai","juin","Juillet","Aôut","Septembre","Octobre","Novembre","Décembre"];


$d = getdate();

$wj = $d["wday"];
$mj = $d["mday"];
$m = $d["mon"];
$y = $d["year"];

$d= $jours[$lang][$wj]. " " . $mj . " " . $months[$lang][$m-1] . " " . $y;
return $d;
}


$lang= isset($_COOKIE["lang"])?$_COOKIE["lang"]:"AR";
$textClr= isset($_COOKIE["textClr"])? $_COOKIE["textClr"]: "#000066";
$bgClr= isset($_COOKIE["bgClr"])? $_COOKIE["bgClr"]: "white";


?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body style="color: <?= $textClr ?>; background: <?= $bgClr ?>">


<div class="top">
<img src= 'images/fsdm.jpg' border = '0' hspace = '20' vspace = '20' align = 'left' />
<span class="top">SMI6</span><br />
Facult&eacute; des Sciences Dhar Mehraz, F&egrave;s </div>


<h4> <?= afficherDate($lang) ?><br /></h4>

<div align= "right">
<?php if (isset($_SESSION["login"])){?>
Vous êtes connectés en tant que:  <?= strtoupper($_SESSION["login"]) ?> &nbsp;&nbsp;&nbsp;&nbsp;
<a href = "deconnexion.php">Déconnexion</a> 
<?php } else {?>Non Connecté<?php }?>&nbsp;&nbsp; || &nbsp;&nbsp; <a href = "formOptions.php">Options</a>  &nbsp;&nbsp;

</div>
<br /><br />

