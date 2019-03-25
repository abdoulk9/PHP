<?php

//solicitaion de Connexion.php et ProduitsDAO.php 

require_once '../daos/Connexion.php';
require_once '../daos/ProduitsDAO.php';
require_once '../entities/Produits.php';


$pdo = new PDO("mysql:host=localhost;port=3306;dbname=blogentraide;", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("SET NAMES 'UTF8'");


//instanciation de l'objet produit
$produit = new Produits($idProduit, $produit, $idCategorie);
$backList = array();
$backList = ProduitsDAO::selectAll($pdo);
try{
//function afficher (){
// 
//}
//// Préparation et exécution du SELECT SQL
//$lsSelect = "SELECT * FROM produits ORDER BY produit";
//$lrs = $lcnx->query($lsSelect);
//$lrs->setFetchMode(PDO::FETCH_NUM);
//while ($enr = $lrs->fetch()) {
//$produit->setIdProduit($enr['id_produit']);
//$produit->setProduit($enr['produit']);
//$produit->setIdCategorie($enr['id_categorie']);
//}
//$backList = array();

var_dump($backList);
// On boucle sur les lignes en récupérant le contenu des colonnes 1 et 2
$obContenu = "";
foreach ($backList as $lrec) {
// Récupération des valeurs par concaténation et interpolation
$obContenu .= "<tr><td>$lrec[0]</td><td>$lrec[1]</td><td>$lrec[2]</td></tr>";
echo "contenu de la liste";
var_dump($obContenu);
}

echo $obContenu;
}catch (Exception $ex) {
echo $ex->getMessage();
}
?>