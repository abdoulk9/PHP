<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../daos/GestionProduitsDAO.php';
require_once '../entities/Produits.php';


$lcnx = new PDO("mysql:host=localhost;port=3306;dbname=blogentraide;", "root", "");
$lcnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$lcnx->exec("SET NAMES 'UTF8'");



$produit = new Produits(23, "CAML", 8);
$lsContenu = selectAll($lcnx);

foreach ($lrs as $lrec) {
                // Récupération des valeurs par concaténation et interpolation
                $lsContenu .= "<tr><td>$lrec[0]</td><td>$lrec[1]</td><td>$lrec[2]</td></tr>";
            }
            
            
