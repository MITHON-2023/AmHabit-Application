<?php

include "./db_conn.php";

$phone = $_POST["user_phone"];
$password = $_POST["user_password"];

$sql = "select * from users where phone = '$phone' and password = '$password'";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) == 0) echo "<script>location.href = 'loginFailed.html';</script>";
else echo "<script>location.href = 'loginSucceed.html';</script>";
?>