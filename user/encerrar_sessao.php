<?php
unset($_SESSION['usuario']);
unset($_SESSION['user_id']);

$_SESSION = array();

session_destroy();
header("location: ../index.php");

exit();