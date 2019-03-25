<?php

declare(strict_types = 1);

require_once '../entities/Produits.php';

/**
 * 
 * @param PDO $pdo
 * @return array
 */
function selectAll(PDO $pdo): array {
    $liste = array();
    try {
        $sql = 'SELECT * FROM blogentraide.produits';
        $lrs = $pdo->query($sql);
        $lrs->setFetchMode(PDO::FETCH_ASSOC);
        while ($enr = $lrs->fetch()) {
            $objet = new Produits();
            $objet->setIdProduit($enr['id_produit']);
            $objet->setProduit($enr['produit']);
            $objet->setIdCategorie($enr['id_categorie']);
            $liste[] = $objet;
        }
        var_dump($liste);
    } catch (PDOException $e) {
        echo $e->getMessage();
        $objet = null;
        $liste[] = $objet;
        
    }
    return $liste;
}

function insert(PDO $pdo, Produits $objet): int {
    $liAffectes = 0;
    try {
        $sql = "INSERT INTO blogentraide.produits(id_produit,produit,id_categorie) VALUES(?,?,?)";
        $lcmd = $pdo->prepare($sql);
        $lcmd->bindValue(1, $objet->getIdProduit());
        $lcmd->bindValue(2, $objet->getProduit());
        $lcmd->bindValue(3, $objet->getIdCategorie());

        $lcmd->execute();
        $liAffectes = $lcmd->rowcount();
    } catch (PDOException $e) {
        $liAffectes = -1;
    }
    return $liAffectes;
}

/**
 * 
 * @param PDO $pdo
 * @param Produits $objet
 * @return int
 */
function delete(PDO $pdo, Produits $objet): int {
    $liAffectes = 0;
    try {
        $sql = "DELETE FROM blogentraide.produits WHERE id_produit = ?";
        $lcmd = $pdo->prepare($sql);
        $lcmd->bindValue(1, $objet->getIdProduit());
        $lcmd->execute();
        $liAffectes = $lcmd->rowcount();
    } catch (PDOException $e) {
        $liAffectes = -1;
    }
    return $liAffectes;
}

function update(PDO $pdo, Produits $objet): int {
    $liAffectes = 0;
    try {
        $sql = "UPDATE blogentraide.produits SET produit=?,id_categorie=? WHERE id_produit=?";
        $lcmd = $pdo->prepare($sql);
        $lcmd->bindValue(1, $objet->getProduit());
        $lcmd->bindValue(2, $objet->getIdCategorie());
        $lcmd->bindValue(3, $objet->getId_produit());

        $lcmd->execute();
        $liAffectes = $lcmd->rowcount();
    } catch (PDOException $e) {
        $liAffectes = -1;
    }
    return $liAffectes;
}

?>