<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *  interface IUtilisateures.php
 * @author Lenovo
 */
interface Utilisateurs {
    //put your code here
    
    public static function selectAll(PDO $pdo);
    public static function selectOne(PDO $pdo, int $id): objet;
    public static function insert(PDO $pdo, object $objet): int ;
    public static function delete(PDO $pdo, object $objet): int ;
    public static function update(PDO $pdo, object $objet): int ;
    
    
}
