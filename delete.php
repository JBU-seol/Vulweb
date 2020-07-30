<?php
	$mysqli = mysqli_connect("localhost", "root", "toor1234", "vul_test");
	$number=$_GET['num'];
	$check_query="select * from board where num=$number";
	$result = mysqli_query($mysqli, $check_query);
	$rows = mysqli_fetch_assoc($result);

	$usrid = $rows['name'];

	session_start();
	
	$URL = "./index.php";
	if(!isset($_SESSION['userid'])){
?>	<script>
		alert("권한이 없습니다.");
		location.replace("<?php echo $URL?>");
	</script>
<?php	}
	else if($_SESSION['userid']==$usrid){
		$query = "delete from board where num=$number";
		mysqli_query($mysqli, $query);
		echo "<script>alert('삭제되었습니다.');</script>";
		header('Location: ./index.php');	
	} else {
?>	<script>
                    alert("권한이 없습니다.");
                    location.replace("<?php echo $URL?>");
         </script>
<?php	
}
?>
