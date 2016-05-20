<?php
session_start(); 
if ($_SESSION['login_user'] == null) {
 // Closing Connection
    header('Location: ../Login/index.php'); // Redirecting To Home Page
}
?>