<?php

$dsn = "mysql:dbname=test;host=localhost";
$user = "root";
$password = "";
$pdo = new PDO($dsn, $user, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


// ou   new PDO($dsn, $user, $password);
// $pdo->exec("SET NAMES UTF8");

$pdoSt = $pdo->query("SELECT stagiaire.nom formation FROM stagiaire LEFT JOIN formation ON formation_id=formation.id ");
$data = $pdoSt->fetch(PDO::FETCH_ASSOC);
var_dump($data);



$pdoSt = $pdo->query("SELECT * FROM stagiaire");
$stagiaire = $pdoSt->fetch(PDO::FETCH_ASSOC);
var_dump($stagiaire);

$stagiaire = $pdoSt->fetch(PDO::FETCH_OBJ);
var_dump($stagiaire);
$pdoSt->setFetchMode(PDO::FETCH_OBJ);
$stagiaire = $pdoSt->fetch();
var_dump($stagiaire);
$nom = "fifi";
$id = 2;
$sql = "SELECT nom FROM stagiaire where id" . $id; //mal

$sql = "SELECT nom FROM stagiaire where id= :id AND nom= :nom ";
$pdoSt = $pdo->prepare($sql);
//$pdoSt->bindValue(':id', $id, PDO::PARAM_INT);
//$pdoSt->bindValue(':nom', $nom, PDO::PARAM_STR);
$pdoSt->execute(["id" => $id, "nom" => $nom]);


$sql = "SELECT nom FROM stagiaire where id= ? AND nom= ? ";
$pdoSt = $pdo->prepare($sql);
//$pdoSt->bindValue(1, $id, PDO::PARAM_INT);
//$pdoSt->bindValue(2, $nom, PDO::PARAM_ISTR);
$pdoSt->execute([$id, $nom]);



