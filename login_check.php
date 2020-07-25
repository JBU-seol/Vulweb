<?php
session_start();
$id=$_POST['id'];
$pw=$_POST['pw'];
$mysqli=mysqli_connect("localhost","root","toor1234","vul_test");
$check_query="SELECT * from member where id='$id'";
$result = mysqli_query($mysqli, $check_query);
if($result->num_rows==1){
	$row=mysqli_fetch_assoc($result);
	if($row['password']==$pw){
		$_SESSION['userid']=$id;
		$_SESSION['check']='true';
		header('Location: ./main.php');	
	}
	else{
		$_SESSION['check']='false';
		header('Location: ./login.php');

	}
}
else{
$_SESSION['check']='false';
header('Location: ./login.php');
}
?>


