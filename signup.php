<?php

include "./db_conn.php";

$phone = $_POST["user_phone"];
$password = $_POST["user_password"];

$sql = "insert into users values(null, '$phone', '$password')";

mysqli_query($con, $sql);

?>

<meta http-equiv='refresh' content='0;url=index.html'>