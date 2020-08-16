<?php
	$URL1='./write.php';
	if($_FILES["fileToUpload"]["size"] > 500000){
?>	<script>
	 alert("<php echo "파일의 용량이 큽니다."?>");
	 location.replace("<?php echo $URL1?>");
	</script>
<?php
	}
	
	$mysqli = mysqli_connect("localhost", "root", "toor1234", "vul_test");
                
        $id = $_POST["name"];                      //Writer
        $pw = $_POST["pw"];                        //Password
        $title = $_POST["title"];                  //Title
        $content = $_POST["content"];              //Content
        $date = date('Y-m-d');           	 //Date
        $URL2 = './main.php';                   //return URL
 
	if($_FILES['fileToUpload']['name']){
	 $filename=$_FILES['fileToUpload']['name'];
	 $path='/uploads/'.$filename;
	 move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$path);
	}
	else{
	 $filename=null;
	}
        $check_query = "insert into board (num, name, password, title, content,file, date, hit, likehit) values(null,'$id', '$pw', '$title', '$content','$filename', '$date',0,0)";
 
 
        $result = mysqli_query($mysqli, $check_query);
	if($result){	
?>      <script>
          alert("<?php echo "글이 등록되었습니다."?>");
          location.replace("<?php echo $URL2?>");
         </script>
<?php
       }
       else{
          echo "FAIL, Error";
       }
    
	mysqli_close($connect);
?>

