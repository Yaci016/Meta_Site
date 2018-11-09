<?php
session_start();
require_once("class/point.class.php");
require_once("class/shape.class.php");
require_once("class/rectangle.class.php");
require_once("class/caree.class.php");
require_once("class/elipse.class.php");
require_once("class/cercle.class.php");
require_once("class/triangle.class.php");
require_once("class/point.class.php");
require_once("class/moteur.class.php");
require_once("class/program.class.php");
$index = new program(new Moteur);
if (isset($_POST['valide'])) {
    $index->dessinerForme($_POST['FormePJs']);
}
if (isset($_POST['reset'])) {
    $_SESSION['results'] = [];
}
require_once("index.phtml");