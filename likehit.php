<?php
                $mysqli = mysqli_connect('localhost', 'root', 'toor1234', 'vul_test');
                $number = $_GET['num'];
		$hit = "update board set likehit=likehit+1 where num=$number";
                mysqli_query($mysqli,$hit);
		header('location: ./main.php');
?>
