<html>
<head>
        <meta charset = 'utf-8'>
	<title>게시판 목록</title>
</head>
<style>
	html {
 		 background-color: #ccccff;
	}
	body {
		font-size: 20px;
	}
        table{
                border-top: 2px solid #444444;
                border-collapse: collapse;
        }
        tr{
                border-bottom: 1px solid #444444;
                padding: 10px;
        }
        td{
                border-bottom: 1px solid #efefef;
                padding: 10px;
        }
        table .gray1{
                background: #efefef;
        }
	table .gray2{
		background: #dfdfdf;
	}
        .text{
                text-align:center;
                padding-top:20px;
                color:#000000
        }
        a:link { color: #57a0ee; text-decoration:none;}
	.info{
		border: 1px solid black;
		width: 160;
		background-color: #ffffff;
		padding: 20px;
	}
	.sessionid {
		font-size: 20px;
	}
</style>
<body>
<?php
	session_start();
	if(!$_SESSION['userid']){
		header('Location: ./login.php');
	}
        $mysqli = mysqli_connect('localhost', 'root', 'toor1234', 'vul_test');
        $check_query ="select * from board order by num desc";
        $result = mysqli_query($mysqli,$check_query);
        $total = mysqli_num_rows($result);
	//$rows = mysqli_fetch_assoc($result);
        ?>
	<div class='info'>
	<?php
		echo "<h1 class='sessionid'>ID: ".$_SESSION['userid']."<br /></h1>";
	?>
	<button type="button" onclick="location.href='./modify_info.php'">정보수정</button>
	<button type="button" onclick="location.href='./unset.php'">로그아웃</button>
        </div>
	<h2 align=center>게시판</h2>
        <table align = center>
        <thead align = "center">
        <tr>
        <td width = "50" align="center">번호</td>
        <td width = "500" align = "center">제목</td>
        <td width = "100" align = "center">작성자</td>
        <td width = "200" align = "center">날짜</td>
        <td width = "50" align = "center">조회수</td>
        </tr>
        </thead>
 
        <tbody>
        <?php
                while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
                        if($total%2==0){
        ?>                      <tr class = "gray1">
                        <?php   }
                        else{
        ?>                      <tr class = "gray2">
                        <?php } ?>
                <td width = "50" align = "center"><?php echo $total?></td>
                <td width = "500" align = "center">
                <a href = "view.php?num=<?php echo $rows['num']?>">
                <?php echo $rows['title']?></td>
                  <td width = "100" align = "center"><?php echo $rows['name']?></td>
                <td width = "200" align = "center"><?php echo $rows['date']?></td>
                <td width = "50" align = "center"><?php echo $rows['hit']?></td>
                </tr>
        <?php
                $total--;
                }
        ?>
        </tbody>
        </table>
 
        <div class = text>
	<a href="./write.php"><h2 class="inactive underlineHover">글쓰기</h2></a>
        </div> 
</body>
</html>

