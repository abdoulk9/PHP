<?php



/**
 * Description of Utilisateurs
 *
 * @author Lenovo
 */
class Utilisateurs {
    //put your code here
    private $idUtilisateurs;
    private $pseudo;
    private $mdp;
    function __construct($idUtilisateurs, $pseudo, $mdp) {
        $this->idUtilisateurs = $idUtilisateurs;
        $this->pseudo = $pseudo;
        $this->mdp = $mdp;
    }
    function getIdUtilisateurs() {
        return $this->idUtilisateurs;
    }

    function getPseudo() {
        return $this->pseudo;
    }

    function getMdp() {
        return $this->mdp;
    }



}
