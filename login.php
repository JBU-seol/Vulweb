<?php
if($_SESSION['check']=='false')
	echo "<script>alert('아이디 및 패스워드를 확인해주세요');</script>";

?>
<html>
<head>
	<title>Vul_web</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./login.css"/>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
    <a href="signup.html"><h2 class="inactive underlineHover">Sign Up</h2></a>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://www.kitribob.kr/static/front/images/about/bob-logo.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="post" action="./login_check.php">
      <input type="text" id="login" class="fadeIn second" name="id" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="pw" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

  </div>
</div>
</body>
</html>

