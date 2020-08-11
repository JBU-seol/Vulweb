<?php
session_start();
unset($_SESSION['userid']);
unset($_SESSION['null']);
header('Location: index.php');
?>
