<?php

include "./db_conn.php";

$phone = $_POST["user_phone"];
$password = $_POST["user_password"];

$sql = "select * from users where phone = '$phone' and password = '$password'";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) == 0) echo "<script>alert('로그인에 실패');</script>";
else echo "<script>alert('로그인되었습니다.');</script>";
?>