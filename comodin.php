<?php


session_start();
$solution= 'Inicie secion';

session_start();
$_SESSION['username'] = $solution;
$solution= $_SESSION['username'];

header("location: index.php");

exit();



?>