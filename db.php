<?php 
    try {
    $db = new PDO('mysql:host=database;dbname=restaurant;charset=utf8', 'root', 'root'); // open database
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
?>