<?php
		session_start();
                $mysqli = mysqli_connect('localhost', 'root', 'toor1234', 'vul_test');
                $number = $_GET['num'];
		$hit = "update board set hit=hit+1 where num=$number";
                mysqli_query($mysqli,$hit);
                $check_query = "select * from board where num =$number";
                $result = mysqli_query($mysqli, $check_query);
                $rows = mysqli_fetch_assoc($result);
        ?>
<html>
<head>
	<meta charset='utf-8'>
</head>
<style>
.view_table {
border: 1px solid #444444;
margin-top: 30px;
}
.view_title {
height: 30px;
text-align: center;
background-color: #cccccc;
color: white;
width: 1000px;
}
.view_id {
text-align: center;
background-color: #EEEEEE;
width: 30px;
}
.view_id2 {
background-color: white;
width: 60px;
}
.view_hit {
background-color: #EEEEEE;
width: 30px;
text-align: center;
}
.view_hit2 {
background-color: white;
width: 60px;
}
.view_content {
padding-top: 20px;
border-top: 1px solid #444444;
height: 500px;
}
.view_btn {
width: 700px;
height: 200px;
text-align: center;
margin: auto;
margin-top: 50px;
}
.view_btn1 {
height: 50px;
width: 100px;
font-size: 20px;
text-align: center;
background-color: white;
border: 2px solid black;
border-radius: 10px;
}
.view_comment_input {
width: 700px;
height: 500px;
text-align: center;
margin: auto;
}
.view_text3 {
font-weight: bold;
float: left;
margin-left: 20px;
}
.view_com_id {
width: 100px;
}
.view_comment {
width: 500px;
}
</style>
<body> 
        <table class="view_table" align=center>
        <tr>
                <td colspan="4" class="view_title"><?php echo $rows['title']?></td>
        </tr>
        <tr>
                <td class="view_id">작성자</td>
                <td class="view_id2"><?php echo $rows['name']?></td>
                <td class="view_hit">조회수</td>
                <td class="view_hit2"><?php echo $rows['hit']?></td>
        </tr>
 
 
        <tr>
                <td colspan="4" class="view_content" valign="top">
                <?php echo $rows['content']?></td>
        </tr>
        </table>
 
        <div class="view_btn">
                <button class="view_btn1" onclick="location.href='./main.php'">목록으로</button>
                <button class="view_btn1" onclick="location.href='./modify.php?num=<?=$number?>&id=<?=$_SESSION['userid']?>'">수정</button>
 
                <button class="view_btn1" onclick="location.href='./delete.php?num=<?=$number?>&id=<?=$_SESSION['userid']?>'">삭제</button>
        </div>
</body>
</html>
