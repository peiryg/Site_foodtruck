<?php
define('DB_HOST', "127.0.0.1");
define('DB_NAME', "foodtruck");
define('DB_USER', "root");
define('DB_PASS', "");


function getConnection() {
    static $dbb = NULL;
    if ($dbb === NULL) {
        try {
            $connectionString = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
            $dbb = new PDO($connectionString, DB_USER, DB_PASS);
            $dbb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $dbb->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES utf8");
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    return $dbb;
}