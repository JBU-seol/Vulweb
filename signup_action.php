<?php
session_start();
$id=$_POST['id'];
$pw=$_POST['pw'];
$name=$_POST['named'];
$age=$_POST['aged'];
$email=$_POST['email'];

if($id==NULL || $pw==NULL || $name==NULL || $age==NULL || $email==NULL){
	$_SESSION['check']='null';
	header('Location: ./signup.php');
}
else{
$mysqli=mysqli_connect("localhost","root","toor1234","vul_test");
$check_query="SELECT * from member where id='$id'";
$result = mysqli_query($mysqli, $check_query);
if($result->num_rows==1){
	$_SESSION['check']='overlap';
	header('Location: ./signup.php');
	exit();
}
$check_query="INSERT INTO member (id,password,name,age,email) VALUES('$id','$pw','$name','$age','$email')";
$row=mysqli_query($mysqli, $check_query);
$_SESSION['check']='true';
header('Location: ./login.php');
}
?>
