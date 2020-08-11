<?php
	session_start();
	if($_SESSION['check']=='null'){
		echo "<script>alert('빈칸을 채워주세요.')</script>";
		$_SESSION['check']='';
	}
	else if($_SESSION['check']=='overlap'){
		echo "<script>alert('이미 존재하는ID입니다.')</script>";
		$_SESSION['check']='';
	}
?>
<html>
<head>
<title>회원가입</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="signup.css"/>
</head>
<body>
<script type="text/javascript" src="signup.js"></script>
<div class="user">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
    <h1 class="user__title">Vulweb Sign Up with BoB</h1>
    
    <form class="form" method="post" action="signup_action.php">
        <div class="form__group">
            <input type="text" placeholder="ID" class="form__input" name="id" />
        </div>
        
	<div class="form__group">
            <input type="password" placeholder="Password" class="form__input" name="pw" />
        </div>
	
	<div class="form__group">
            <input type="text" placeholder="Name" class="form__input" name="named"/>
        </div>

	<div class="form__group">
            <input type="number" placeholder="Age" class="form__input" name="aged" />
        </div>

        <div class="form__group">
            <input type="email" placeholder="Email" class="form__input" name="email" />
        </div>
        
        <input class="btn" type="submit" value="Sign Up">
    </form>
	<button class="btn"><a href="./login.php">돌아가기</a></button>
</div>
</body>
</html>
