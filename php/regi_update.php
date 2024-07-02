<!-- 회원정보를 입력하기 위한 문서 -->
<?php 
include("./dbconn.php");


$mb_id = trim($_POST['mb_id']);
$mb_password = trim($_POST['mb_password']);
$mb_name = trim($_POST['mb_name']);

date_default_timezone_set('Asia/Seoul');
$mb_datetime = date('Y-m-d H:i:s',time());

//전달받은 값 출력해보기
// echo $mb_id;
// echo $mb_password;
// echo $mb_name;
// echo $mb_datetime;


$sql = "SELECT PASSWORD ($mb_password) AS pass ";//8.0이하 버전 암호화 방식
// $mb_password = password_hash($mb_password, PASSWORD_DEFAULT);
// echo $mb_password;


$result = mysqli_query($conn, $sql);  //데이터베이스에 입력한 결과를 변수에 담음
$row = mysqli_fetch_assoc($result);
$mb_password = $row['pass'];


//변수값을 데이터 sql쿼리문을 작성해 데이터베이스에 입력한다
$sql = "INSERT INTO korair_member(mb_id, mb_password, mb_name, mb_datetime) VALUES ('$mb_id', '$mb_password', '$mb_name', '$mb_datetime')";

$result = mysqli_query($conn,$sql); //데이터베이스에 자료입력한 결과를 변수에 담는다.


if($result){
  echo"<script>alert('회원가입이 완료되었습니다')</script>";
  echo"<script>location.replace('../login.php')</script>";
  exit();
}else{
  echo "회원가입 실패 : " .mysqli_error($conn);
  mysqli_close($conn);  //데이터베이스 접속종료
}











?>
