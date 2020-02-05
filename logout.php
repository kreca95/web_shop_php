<?php 
session_start();
// brise sve sesije koje su postavljene na prijavi
unset($_SESSION['email']);
unset($_SESSION["ID"]);
unset($_SESSION["uloga"]);
header("Location: index.php")
?>