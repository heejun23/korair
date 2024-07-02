<?php
include('./php/dbconn.php');

if(isset($_SESSION['ss_mb_id'])){ //세션아이디가 있는 경우만
  $mb_id = $_SESSION['ss_mb_id'];
}

// $mb_id = $_SESSION['ss_mb_id'];

?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="keywords" content="스카이패스, 사전좌석 배정, 항공권 예매, 수하물 안내, 대한항공, 항공예약, 여행">
  <meta name="Description" content="항공스케줄, 스카이패스, 할인 항공권, 여행상품안내, 여행 좌석예약, 국내여행, 해외여행, 편도 좌석 예약">
  <meta name="Robots" content="Index, Follow">
  <meta http-equiv="Subject" content="국내, 해외 여행정보, 좌석예매">
  <meta http-equiv="Title" content="대한항공">
  <title>대한항공 모바일 웹앱</title>
  <!-- 파비콘 -->
  <link rel="shortcut icon" href="./images/favicon.png">
  <!-- 초기화 -->
  <link rel="stylesheet" href="./css/reset.css" />
  <!-- 스와이퍼 -->
  <link rel="stylesheet" href="./css/swiper.css" />
  <!-- 공통서식 -->
  <link rel="stylesheet" href="./css/common.css" />
  <!-- 메인서식 -->
  <link rel="stylesheet" href="./css/main.css" />
</head>

<body>
  <header>
    <h1>
      <a href="index.php" title="메인화면"><img src="./images/txt_logo.png" alt="상단로고" />
      </a>
    </h1>

    <!-- 토글버튼 클릭시 nav나오게 하기 
1. css로 체크박스에 체크하면 nav 나오게 하기
2. js, jquery = span 태그(햄버거 아이콘) 클릭시 nav나오게하기
-->
    <label for="toggle_btn" class="toggle_btn"></label>
    <input type="checkbox" id="toggle_btn">

    <nav class="gnb">
      <label for="toggle_btn" class="toggle_btn"></label>
      <?php

      if (isset($mb_id)) {
        echo "<a href='logout.php' title='로그아웃' class='logout_btn'>로그아웃</a>";
      } else {
        echo "<a href='login.php' title='로그인' class='login_btn2'>로그인 하세요</a>";
      }

      ?>
      <ul>
        <li><a href="#" title="">메뉴1</a>
          <ul>
            <li><a href="#" title="">서브메뉴1</a></li>
            <li><a href="#" title="">서브메뉴2</a></li>
            <li><a href="#" title="">서브메뉴3</a></li>
          </ul>
        </li>
        <li><a href="#" title="">메뉴2</a>
          <ul>
            <li><a href="#" title="">서브메뉴1</a></li>
            <li><a href="#" title="">서브메뉴2</a></li>
            <li><a href="#" title="">서브메뉴3</a></li>
          </ul>
        </li>
        <li><a href="#" title="">메뉴3</a>
          <ul>
            <li><a href="#" title="">서브메뉴1</a></li>
            <li><a href="#" title="">서브메뉴2</a></li>
            <li><a href="#" title="">서브메뉴3</a></li>
          </ul>
        </li>
        <li><a href="#" title="">메뉴4</a>
          <ul>
            <li><a href="#" title="">서브메뉴1</a></li>
            <li><a href="#" title="">서브메뉴2</a></li>
            <li><a href="#" title="">서브메뉴3</a></li>
          </ul>
        </li>
        <li><a href="#" title="">메뉴5</a>
          <ul>
            <li><a href="#" title="">서브메뉴1</a></li>
            <li><a href="#" title="">서브메뉴2</a></li>
            <li><a href="#" title="">서브메뉴3</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div class="box"></div>

    <?php

    if (isset($mb_id)) {
      echo "<p class='user'>" . $mb_id . "님</p>";
    } else {
      echo "
  <a href='login.php' title='로그인' class='login_btn'>로그인</a>
  ";
    }

    ?>



  </header>

  <main>
    <ul class="box_menu">
      <li class="swiper mySwiper item1">
        <ul class="swiper-wrapper">
          <li class="swiper-slide"><a href="#" title=""><img src="./images/banner03.jpg" alt=""></a></li>
          <li class="swiper-slide"><a href="#" title=""><img src="./images/banner04.jpg" alt=""></a></li>
          <li class="swiper-slide"><a href="#" title=""><img src="./images/banner01.jpg" alt=""></a></li>
          <li class="swiper-slide"><a href="#" title=""><img src="./images/banner02.jpg" alt=""></a></li>
        </ul>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </li>
      
      <li class="item2"><a href="#" title=""><img src="./images/m_img01.jpg" alt=""></a></li>
      <li class="item3"><a href="#" title=""><img src="./images/m_img02.jpg" alt=""></a></li>
      <li class="item4"><a href="#" title=""><img src="./images/m_img05.jpg" alt=""></a></li>
      <li class="item5"><a href="#" title=""><img src="./images/m_img04.jpg" alt=""></a></li>
      <li class="item6"><a href="#" title=""><img src="./images/m_img03.jpg" alt=""></a></li>
    </ul>
    <a href="login.php" title="로그인"><img src="./images/skypass.jpg" alt="" class="login_go"></a>



  </main>

  <footer>
    <ul>
      <li><a href="#" title="">개인정보취급방침</a></li>
      <li><a href="#" title="">PC버전보기</a></li>
      <li><a href="#" title="">앱다운로드</a></li>
    </ul>
  <address>
    Copyright&copy; 2022 KOREAN AIR Allrights reserved. <br>
    사업자등록번호 0000-000-0000 통신판매업 신고번호 : 강서 제00-000
  </address>
  </footer>
  <!-- 제이쿼리cdn -->
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <!-- 스와이퍼 -->
  <script src="./script/swiper.js"></script>
  <script src="./script/main.js"></script>
</body>

</html>
