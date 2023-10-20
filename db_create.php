<?php

include "./db_conn.php";

$sql = "create table users(
    id int not null auto_increment,
    phone varchar(50),
    password varchar(100),
    primary key(id));
    ";
    
mysqli_query($con, $sql);
?>