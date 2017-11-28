$(function(){

//スタッフの写真入れ替え

     $('.staff01 img').hover(function(){
        $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
          }, function(){
             if (!$(this).hasClass('currentPage')) {
             $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
        }  });


     $('.staff02 img').hover(function(){
        $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
          }, function(){
             if (!$(this).hasClass('currentPage')) {
             $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
        }  });
     $('.staff03 img').hover(function(){
        $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
          }, function(){
             if (!$(this).hasClass('currentPage')) {
             $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
        }  });
     $('.staff04 img').hover(function(){
        $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
          }, function(){
             if (!$(this).hasClass('currentPage')) {
             $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
        }  });
     $('.staff05 img').hover(function(){
        $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
          }, function(){
             if (!$(this).hasClass('currentPage')) {
             $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
        }  });



// $(window).resize(function(){
//     //windowの幅をxに代入
//     var x = $(window).width();
//     //windowの分岐幅をyに代入
//     var y = 600;
//     if (x <= y) {
//         $('#mobile-header').addClass('on');
//     } else {
//         $('#mobile_header').removeClass('on');
//     }
// });

//スタッフの横スライド
    // P
      $('#staff').slick({
        slidesToShow: 1.5, //スライドが見える数
        slidesToScroll: 1, //スライドがスクロールする数
        infinite: true, //無限スクロール
        autoplay: false, //自動
        accessibility: false,
        responsive: true,
        swipe:true, //スワイプ
        arrows:true,
        centerMode: true
      }); 



//上に戻るボタン
    $(".pagetop").click(function(){
        $("html,body").animate({scrollTop:0},'slow');
        return false;
    });
    $(".second") .hover(function(){
       $(this).fadeTo("4000",0.3); // マウスオーバーで透明度を30%にする
    },function(){
       $(this).fadeTo("4000",1.0); // マウスアウトで透明度を100%に戻す
    });

//メニューバー出現
var ddmenu = '#openlist';
         
        $('>ul>li',ddmenu).each(function(){
             
            $(this).hover(
                function(){
                    $('>ul',this).stop(true,true).slideDown(200);
                    // $('img',this).stop(true,true).attr('src', $('img',this).attr("src").replace("_off.", "_on."));
                },
                function(){
                    $('>ul',this).stop(true,true).slideUp(100);
                    // $('img',this).stop(true,true).attr('src', $('img',this).attr("src").replace("_on.", "_off."));
                }
            );
        });




  });

// $(document).ready(function(){
//   $('#staff').slick({
//     infinite: true,
//     dots:true,
//     slidesToShow: 3,
//     slidesToScroll: 3
//   });
// });

// (function($){
//     $(function() {
         
//         var ddmenu = '#openlist';
         
//         $('>ul>li',ddmenu).each(function(){
             
//             $(this).hover(
//                 function(){
//                     $('>ul',this).stop(true,true).slideDown(200);
//                     $('img',this).stop(true,true).attr('src', $('img',this).attr("src").replace("_off.", "_on."));
//                 },
//                 function(){
//                     $('>ul',this).stop(true,true).slideUp(100);
//                     $('img',this).stop(true,true).attr('src', $('img',this).attr("src").replace("_on.", "_off."));
//                 }
//             );
//         });
         
//     });
// })(jQuery);

