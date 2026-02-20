<?php
require_once("connexion.php");
function getLesSalaries(){
try {
/*Sélectionne toutes les valeurs dans la table contact*/
global $conn ;
$sql = "SELECT * FROM salaries";
$stmt = $conn->prepare($sql);
$stmt->execute();
/*Retourne un tableau associatif pour chaque entrée de notre table
*avec le nom des colonnes sélectionnées en clefs*/
$resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
return $resultat ;
}
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
}
function nbrsalaries(){
try {
/*Sélectionne toutes les valeurs dans la table contact*/
global $conn ;
$sql = "SELECT COUNT(*) AS nb FROM salaries";
$stmt = $conn->prepare($sql);
$stmt->execute();
/*Retourne un tableau associatif pour chaque entrée de notre table
*avec le nom des colonnes sélectionnées en clefs*/
$resultat = $stmt->fetch(PDO::FETCH_ASSOC);
return $resultat['nb'];
}
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
}
function salairemoyen(){
try {
global $conn;
$sql = "SELECT AVG(salaire) AS nb FROM salaries";
$stmt = $conn->prepare($sql);
$stmt->execute();

$resultat = $stmt->fetch(PDO::FETCH_ASSOC);
return $resultat['nb'];
}
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
}

function salairemin(){
try {

global $conn ;
$sql = "SELECT MIN(salaire) as min FROM salaries";
$stmt = $conn->prepare($sql);
$stmt->execute();

$resultat = $stmt->fetch(PDO::FETCH_ASSOC);
return $resultat['min'];
}
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
}
function salairemax(){
try {

global $conn ;
$sql = "SELECT MAX(salaire) as max FROM salaries";
$stmt = $conn->prepare($sql);
$stmt->execute();

$resultat = $stmt->fetch(PDO::FETCH_ASSOC);
return $resultat['max'];
}
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
}
function nbrsalairesrv(){
try {

global $conn ;
$sql = "SELECT service, COUNT(*) as nb FROM salaries GROUP BY service"; 
$stmt = $conn->prepare($sql);
$stmt->execute();

$resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
return $resultat;
}
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
}

