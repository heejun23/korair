$(document).ready(function () {
  // 슬라이드
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    speed: 1000,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  $('.toggle_btn').click(function(){
    $('bg_blur').css(
      {'filter':'blur(2px)',
      'z-index':'105'
  })
  })



});


