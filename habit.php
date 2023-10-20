<?php
include 'db_conn.php'; // 데이터베이스 연결 정보를 가져옴

// POST 요청에서 사용자가 입력한 값 가져오기
$content1 = $_POST['inputHabit1'];
$day1 = $_POST['inputDay1'];
$content2 = $_POST['inputHabit2'];
$day2 = $_POST['inputDay2'];

// SQL 쿼리를 사용하여 습관 정보를 데이터베이스에 추가
$sql = "INSERT INTO habit (content1, day1, content2, day2) VALUES ('$content1', '$day1', '$content2', '$day2')";

mysqli_query($con, $sql);

echo "<script>location.href = 'home.php';</script>";
?>
