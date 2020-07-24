<?php
$id=$_POST['id'];
$pw=$_POST['pw'];
$name=$_POST['named'];
$age=$_POST['aged'];
$email=$_POST['email'];

if($id==NULL || $pw==NULL || $name==NULL || $age==NULL || $email==NULL){
	echo "빈 칸을 모두 채워주세요";
	echo "<a href=signup.html>back page</a>";
	exit();
}

$mysqli=mysqli_connect("localhost","root","toor1234","vul_test");
$check_query="SELECT * from member where id='$id'";
$result = mysqli_query($mysqli, $check_query);
if($result->num_rows==1){
	echo "이미 존재하는 id입니다";
	echo "<a href=signup.html>back page</a>";
	exit();
}
$check_query="INSERT INTO member (id,password,name,age,email) VALUES('$id','$pw','$name','$age','$email')";
$row=mysqli_query($mysqli, $check_query);
?>
