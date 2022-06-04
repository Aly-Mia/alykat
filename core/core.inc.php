<?php
SESSION_START();
ERROR_REPORTING(E_ALL);
ob_start();

//Required Classes
require 'obj/link.php'; //Link class

//GLOBALS
$l = new link;
$c = new mysqli('localhost', 'root', '', 'alykat');

function loggedIn() {
    if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
        return true;
    } else {
        return false;
    }
}
?>