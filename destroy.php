<?php session_start();
$_SESSION=array();
session_destroy();

header("location:category.php?cat=Lips");
?>