<?php 
define("MOY",10);
function ouvrirConnexion(){
	
	try {
		$db=new PDO('mysql:host=localhost;dbname=smi2020;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (PDOException $e) {
		die("Erreur de connexion : " . $e->getMessage() );
	}
	return $db;
}
function getListeFilieres() {
$db = ouvrirConnexion();
$resultat=$db->query("select * from Filiere");
return $resultat->fetchAll();
}
function getListeEtudiants($filiere) {
	$liste=array();
	$Rq="select * from Etudiant where Filiere='$filiere'";
	$etudiants = ouvrirConnexion()->query($Rq)->fetchAll();
	foreach ($etudiants as $etudiant) {	
		if (strtoupper($etudiant["Filiere"])==strtoupper($filiere) and $etudiant["Note"]>=MOY )
			$liste[]= $etudiant;
}
	return $liste;

}
function getNotes($filiere) {

	$liste = getListeEtudiants($filiere);
	$notes=array();
	
	$i=0;
	while ( $i < count($liste)) {	
		$notes[]= $liste[$i]["Note"];
		$i++;
	}
	return $notes;

}
function getMax (array $t) {
	$max= $t[0];
	for ($i=1; $i < count($t);$i++) {		
		if ($max < $t[$i]) $max= $t[$i];
	}
	return $max;

}
function getMention ($n) {
	
	if (0 <= $n and $n < MOY)
		return "Ajourné!";
	elseif (MOY <= $n && $n < 12)
		return "PASSABLE";
	elseif (12 <= $n && $n < 14)
		return "ASSEZ BIEN";
	elseif (14 <= $n && $n < 16)
		return "BIEN";
	elseif (16 <= $n && $n <= 19)
		return "TRES BIEN";
    elseif ($n = 20)
        return "EXELENT";
	else 
		return "Note non valide!";		
	
}
function getDetailEtudiant($code) {
$db=ouvrirConnexion();
$resultat=$db->query("select * from Etudiant where CodeE='$code'");
return $resultat-> fetch();
}

function ajouterEtudiant (array $t) {

	//accéder à la base et insérer l'étudiant passé dans le tableau $t
	$db=ouvrirConnexion();
	$Rq = $db->prepare("insert into Etudiant values(?,?,?,?,?)");
	$Rq->execute([$t["CodeE"],$t["Nom"],$t["Prenom"],$t["Filiere"],$t["Note"]]);
	
}
function supprimerEtudiant ($c) {

	$db=ouvrirConnexion();
	$Rq = $db->prepare("delete from Etudiant where CodeE = ?");
	$Rq->execute([$c]);

}