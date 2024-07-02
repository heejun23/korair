<?php
include("./dbconn.php");

$mb_id = trim($_POST['mb_id']);
$mb_password = trim($_POST['mb_password']);

echo''.$mb_id.'<br>'.$mb_password.'<br>';

//사용자가 입력한 아이디값을 db에서 검색
$sql = "SELECT * FROM korair_member WHERE mb_id = '$mb_id'";
$result = mysqli_query($conn,$sql);
$mb = mysqli_fetch_assoc($result);

// 사용자가 입력한 비번과 DB의 비번이 일치하는지
$sql = "SELECT PASSWORD('$mb_password') AS mb_password";

//쿼리결과를 변수에 담기
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$password = $row["mb_password"];

echo "데이터베이스 암호 ".$password."<br>";
echo "사용자 입력암호 ".$mb_password."<br>";

//만약 사용자 암호와 db암호가 일치하지 않는다면
if(!$mb['mb_id'] || !($password === $mb['mb_password'])) {
  echo "<script>alert('가입된 회원아이디가 아니거나 비밀번호가 틀립니다. \\n 비밀번호는 대소문자를 구분합니다.');
  location.replace('../login.php');
  </script>";
}

$_SESSION['ss_mb_id'] = $mb_id;

mysqli_close($conn);
if(isset($_SESSION['ss_mb_id'])) {
  echo "<script>alert('로그인 되었습니다');
  location.replace('../index.php');
  </script>";
}




?>
