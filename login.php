<?php
session_start();
if($_SESSION['check']=='false')
	echo "<script>alert('아이디 및 패스워드를 확인해주세요');</script>";

?>
<html>
<head>
	<title>Vul_web</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Welcome to Vulweb</h1>
<form method="post" action="./login_check.php">
	<div>
		<label for="id">ID: </label>
		<input type="text" name="id">
	</div>
	<div>
		<label for="pw">PW: </label>
		<input type="password" name="pw">
	</div>
	<div>
		<h3> </h3>
		<button type="submit">로그인</button>
	</div>
</form>
<a href='signup.html'>회원가입</a>
</body>
</html>

