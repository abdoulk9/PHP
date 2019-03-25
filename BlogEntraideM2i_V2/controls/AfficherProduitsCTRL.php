<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../daos/Connexion.php';
require_once '../daos/GestionProduitsDAO.php';
require_once '../entities/Produits.php';

try{
$pdo = new PDO("mysql:host=localhost;port=3306;dbname=blogentraide;", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("SET NAMES 'UTF8'");



//declaration d'une variable lioste
//$backList = array();
$backList = selectAll($pdo);




}catch (PDOException $ex){
echo $ex->getMessage();
}
?>