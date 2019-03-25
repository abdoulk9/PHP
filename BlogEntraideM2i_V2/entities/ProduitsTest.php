<?php

require_once 'Produits.php';

//instanciation de l'objet $p
$p = new Produits(1, "Angular", 1);

//Affichage de l'objet $p
echo "id produit: " . $p->getIdCategorie() . "<br>" .
 "Produit: " . $p->getProduit() . "<br> " .
 "id categorie: " . $p->getIdCategorie();
?>






