<?php

include "./db_conn.php";

$sql = "create table users(
    id int not null auto_increment,
    phone varchar(50),
    password varchar(100),
    primary key(id));
    ";
    
mysqli_query($con, $sql);

$sql = "create table habit(
    id int not null auto_increment,
    content1 varchar(50),
    day1 int,
    content2 varchar(50),
    day2 int,
    primary key(id));
    ";

mysqli_query($con, $sql);
?>