jQuery(function($){
  $(".js-slider").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3
  });
});

// ハンバーガーメニュー
$(function() {
  function toggleNav() {
      var body = document.body;
      var hamburger = document.getElementById('js-button');
      var blackBg = document.getElementById('js-blackBack');
      hamburger.addEventListener('click', function() {
        body.classList.toggle('active');
      });
      blackBg.addEventListener('click', function() {
        body.classList.remove('active');
      });
  }
  toggleNav();
});