<?php
session_start();
$id = $_SESSION['userid'];
$name= $_POST['name'];
$email= $_POST['email'];
$newpw=$_POST['newpw'];

$mysqli = mysqli_connect("localhost", "root", "toor1234", "vul_test");
$query = "update member set name='$name', email='$email', password='$newpw' where id='$id'";
$result = mysqli_query($mysqli, $query);
header('Location: ./main.php');

?>
