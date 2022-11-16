<?php
session_start();

if (isset($_SESSION['user'])) {    

    define('USER', $_SESSION['user'], false);
    
} else {

    define('USER', 'Guest', false);
}

?>