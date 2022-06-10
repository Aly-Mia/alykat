<?php
SESSION_START();
ERROR_REPORTING(E_ALL);
ob_start();

//GLOBALS
$c = new mysqli('localhost', 'root', 'AlyMia76@', 'alykat');

//Required classes
require 'obj/links.php'; //Links object

//Global Objects
$l = new links;

function loggedIn() {
    if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
        return true;
    } else {
        return false;
    }
}
?>