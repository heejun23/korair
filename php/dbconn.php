<?php

$mysql_host = 'localhost';
$mysql_user = 'heejun';
$mysql_pass = 'xhRbwhdm3!';
$mysql_db = 'heejun';

//데이터베이스 연결 변수
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

if(!$conn){ //db 연결 실패시
  die('db연결실패:'. mysqli_connect_error());
}

//세션연결을 위해
session_start();


?>
