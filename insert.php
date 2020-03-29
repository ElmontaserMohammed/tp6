<?php
session_start();
if (!isset($_SESSION["login"])) { include("form.php"); exit();}

include("data.php");
AjouterEtudiant($_POST);

header("location: liste.php?f=". $_POST['Filiere']);