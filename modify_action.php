<?php
    $mysqli = mysqli_connect("localhost", "root", "toor1234", "vul_test");
    $number = $_POST[number];
    $title = $_POST[title];
    $content = $_POST[content];
    $date = date('Y-m-d');
    $check_query = "update board set title='$title', content='$content', date='$date' where num=$number";
    $result = mysqli_query($mysqli, $check_query);
    if($result) {
?>
        <script>
            alert("수정되었습니다.");
            location.replace("./view.php?num=<?=$number?>");
        </script>
<?php    }
    else {
        echo "fail";
    }
?>
