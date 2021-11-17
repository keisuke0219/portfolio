
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
      $(this).addClass("fadein");
    } else {
      $(this).removeClass("fadein");
      
    }
  });
});