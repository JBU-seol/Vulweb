<?php
                $mysqli = mysqli_connect("localhost", "root", "toor1234", "vul_test");
                
                $id = $_POST[name];                      //Writer
                $pw = $_POST[pw];                        //Password
                $title = $_POST[title];                  //Title
                $content = $_POST[content];              //Content
                $date = date('Y-m-d');           	 //Date
 
                $URL = './main.php';                   //return URL
 
 
                $check_query = "insert into board (num, name, password, title, content, date, hit) values(null,'$id', '$pw', '$title', '$content', '$date',0)";
 
 
                $result = mysqli_query($mysqli, $check_query);
                if($result){
?>                  <script>
                        alert("<?php echo "글이 등록되었습니다."?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }
 
                mysqli_close($connect);
?>

