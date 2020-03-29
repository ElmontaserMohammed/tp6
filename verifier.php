<?php

if(!isset($_POST["login"]) || !isset($_POST["pass"]) || $_POST["login"] != "mohammed" || $_POST["pass"] !="elmontaser") {

include("form.php");
exit();
}

session_start();
$_SESSION["login"]=$_POST["login"];
header ("location:acceuil.php");
?>
