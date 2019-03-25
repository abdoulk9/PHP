<?php
/*
  GererMonCompteCTRL.php
 */
session_start();

require_once '../daos/Connexion.php';
require_once '../daos/UtilisateursDAO.php';

$pseudo = $_SESSION["pseudo"];
$mdp = filter_input(INPUT_POST, "mdp");

$btModifier = filter_input(INPUT_POST, "btValiderModification");
$btSupprimer = filter_input(INPUT_POST, "btValiderSuppression");

//echo "$pseudo<br>";
//echo "$mdp<br>";

$cible = "";

if (empty($pseudo) || empty($mdp)) {
    echo "Toutes les saisies sont obligatoires !<br>";
    // Inscription BAD au niveau du contrôle de surface
    $cible   = "GererMonCompteIHM.php";
    $message = "Toutes les saisies sont obligatoires !";
} else {
    // MAJ GOOD au niveau contrôle de surface
    $pdo = seConnecter("../daos/bd.ini");
    $pdo->beginTransaction();

    $t = array();
    $t["pseudo"] = $pseudo;
    $t["mdp"]    = $mdp;

    /*
     * UPDATE
     */
    if ($btModifier != null) {
        $liAffecte = updateByPseudo($pdo, $t);
        if ($liAffecte == 1) {
            // Modification GOOD au niveau de la BD
            $pdo->commit();
            $cible   = "GererMonCompteIHM.php";
            $message = "Modification réussie !";
        } else {
            // Modification BAD au niveau de la BD
            $pdo->rollBack();
            $cible   = "GererMonCompteIHM.php";
            $message = "Problème de modification !";
        }
    }

    /*
     * DELETE
     */
    if ($btSupprimer != null) {
        $liAffecte = deleteByPseudo($pdo, $t);
        if ($liAffecte == 1) {
            // Suppression GOOD au niveau de la BD
            $pdo->commit();
            unset($_SESSION["pseudo"]);
            //setcookie("pseudo", "");
            //setcookie("mdp", "");
            $cible   = "InscriptionIHM.php";
            $message = "Suppression réussie !";
        } else {
            // Suppression BAD au niveau de la BD
            $pdo->rollBack();
            $cible   = "GererMonCompteIHM.php";
            $message = "Problème de suppression !";
        }
    }
    /*
     * DECONNEXION
     */
    seDeconnecter($pdo);
}
include "../boundaries/$cible";
?>
