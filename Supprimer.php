<?php
session_start();
if (!isset($_SESSION["login"])) { include("form.php"); exit();}
include("data.php");
supprimerEtudiant($_GET["codeE"]);

header("location: acceuil.php");