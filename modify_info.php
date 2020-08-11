<html>
<head>
	<link rel="stylesheet" type="text/css" href="./modify_info.css"/>
</head>
<body>
<?php
	session_start();
	$URL = "./login.php";
	if(!isset($_SESSION['userid'])) {
        ?>
 
                <script>
                        alert("로그인이 필요합니다");
                        location.replace("<?php echo $URL?>");
                </script>
        <?php
        }
	$id=$_SESSION['userid'];
	$mysqli=mysqli_connect("localhost","root","toor1234","vul_test");
	$query="select * from member where id='$id'";
	$result=mysqli_query($mysqli,$query);
	$row=mysqli_fetch_assoc($result);
	$name=$row['name'];
	$email=$row['email'];
	$age=$row['age'];
?>
<div class="container1">
<h1>현재 내 정보</h1>
<h3>아이디: <?php echo "$id"?></h3>
<h3>이름: <?php echo "$name"?></h3>
<h3>이메일: <?php echo "$email"?></h3>
<h3>나이: <?php echo "$age"?></h3>
</div>

<div class="container">
<h1>내 정보 수정하기</h1>
  <form method="post" action="modify_info_action.php">

    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="New  name..">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="New Email..">

    <label for="newpw">New Password</label>
    <input type="password" id="newpw" name="newpw" placeholder="New Password">

    <input type="submit" value="Submit">

  </form>
</div>
</body>
</html>
