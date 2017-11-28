$(function(){
     $('.staff01 img').hover(function(){
        $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
          }, function(){
             if (!$(this).hasClass('currentPage')) {
             $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
        }  });
});

$(function(){
     $('.staff02 img').hover(function(){
        $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
          }, function(){
             if (!$(this).hasClass('currentPage')) {
             $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
        }  });
});

$(function(){
     $('.staff03 img').hover(function(){
        $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
          }, function(){
             if (!$(this).hasClass('currentPage')) {
             $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
        }  });
});

$(function(){
     $('.staff04 img').hover(function(){
        $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
          }, function(){
             if (!$(this).hasClass('currentPage')) {
             $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
        }  });
});

$(function(){
     $('.staff05 img').hover(function(){
        $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
          }, function(){
             if (!$(this).hasClass('currentPage')) {
             $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
        }  });
});



$(window).resize(function(){
    //windowの幅をxに代入
    var x = $(window).width();
    //windowの分岐幅をyに代入
    var y = 600;
    if (x <= y) {
        $('#mobile-header').addClass('on');
    } else {
        $('#mobile_header').removeClass('on');
    }
});

$('#staff').slick({
  slidesToShow: 3, //スライドが見える数
  slidesToScroll: 1, //スライドがスクロールする数
  infinite: true, //無限スクロール
  draggable: false //マウスドラッグでのスクロール
});

$(function(){
    $(".pagetop").click(function(){
        $("html,body").animate({scrollTop:0},'slow');
        return false;
    });
});

$(document).ready(
  function(){
    $(".second") .hover(function(){
       $(this).fadeTo("4000",0.3); // マウスオーバーで透明度を30%にする
    },function(){
       $(this).fadeTo("4000",1.0); // マウスアウトで透明度を100%に戻す
    });
  });

$(document).ready(function(){
  $('#staff').slick({
    infinite: true,
    dots:true,
    slidesToShow: 3,
    slidesToScroll: 3
  });
}); 
