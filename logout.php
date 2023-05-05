<?php
require 'database.php';
$_SESSION = [];
session_unset();
session_destroy();
echo "The Session is terminated";
header("location:home.php");

?>
