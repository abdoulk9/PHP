<?php

/**
 * Description of Produits
 *
 * @author Lenovo
 */
class Produits {

    //put your code here
    //Declaration des variables
    private $idProduit;
    private $produit;
    private $idCategorie;

    //le Constructeur
    function __construct($idProduit, $produit, $idCategorie) {
        $this->idProduit = $idProduit;
        $this->produit = $produit;
        $this->idCategorie = $idCategorie;
    }

    /*
     * 
     * HENERATEUR:  GETTERS ET SETTERS
     */
    //Accesseur
    function getIdProduit() {
        return $this->idProduit;
    }

    //Accesseur
    function getProduit() {
        return $this->produit;
    }

    //Accesseur
    function getIdCategorie() {
        return $this->idCategorie;
    }

    //Modification
    function setIdProduit($idProduit) {
        $this->idProduit = $idProduit;
    }

    //Modification
    function setProduit($produit) {
        $this->produit = $produit;
    }

    //Modification
    function setIdCategorie($idCategorie) {
        $this->idCategorie = $idCategorie;
    }
    

}
