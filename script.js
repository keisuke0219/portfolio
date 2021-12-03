
//ウィンドウの高さを取得する
var window_h = $(window).height();

//スクロールイベント
$(window).on("scroll", function() {
  
  //スクロールの位置を取得する
  var scroll_top = $(window).scrollTop();
 
  $(".works-content").each(function() {
    //各box要素のtopの位置を取得する
    var elem_pos = $(this).offset().top;
    
    if (scroll_top >= elem_pos - window_h + 100) {
      $(this).addClass("fadeIn");
    } else {
      $(this).removeClass("fadeIn");
      
    }
  });
});

$(function() {
  var $nav   = $('#navArea');
  var $btn   = $('.toggle_btn');
  var $mask  = $('#mask');
  var open   = 'open'; // class
  // menu open close
  $btn.on( 'click', function() {
    if ( ! $nav.hasClass( open ) ) {
      $nav.addClass( open );
    } else {
      $nav.removeClass( open );
    }
  });
  // mask close
  $mask.on('click', function() {
    $nav.removeClass( open );
  });
} );