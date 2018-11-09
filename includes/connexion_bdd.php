<?php
/**
 * Created by PhpStorm.
 * User: Yacine
 * Date: 10/18/2018 0018
 * Time: 1:55 AM
 */
// use actual date() format displayed in your table.
$servername = "127.0.0.1";
$username = "root";
$password = "troiswa";
$database = "blog";
try {
    $bdd = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}