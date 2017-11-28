$(function(){
$(".tenga").on("click",function(){

$(".tenga").animate({
	'marginLeft': '500px'}).animate({'left':'500px'}).animate({'top':'500px'}).animate({'left':'0px'}).animate({'top':'0px'});

});

$(".tenga2").on("click",function(){
 $(".tenga2").animate({
 	"marginLeft": '500px'
 });
$(".tenga3").animate({
	"marginLeft": "500px"
});
$(".tenga4").animate({
	"marginLeft": "500px"
});

});

$('.tenga').mouseover(function(){
		$(this).css('opacity', '.4').animate({'opacity': '1'}, 'slow');
	});

var topBtn=$('#pageTop');
topBtn.hide();
 
//◇ボタンの表示設定
$(window).scroll(function(){
  if($(this).scrollTop()>80){
    //---- 画面を80pxスクロールしたら、ボタンを表示する
    topBtn.fadeIn();
  }else{
    //---- 画面が80pxより上なら、ボタンを表示しない
    topBtn.fadeOut();
  } 
});
 
// ◇ボタンをクリックしたら、スクロールして上に戻る
topBtn.click(function(){
  $('body,html').animate({
  scrollTop: 0},500);
  return false;
});

 var tab = $('#menu'),

    offset = tab.offset();

  $(window).scroll(function () {

  if($(window).scrollTop() > offset.top) {

    tab.addClass('fixed');

  } else {

    tab.removeClass('fixed');

  }

});
$('.tenga4').jrumble({
x: 2, //横の揺れ幅を設定
y: 2, //縦の揺れ幅を設定
rotation: 1 //回転角度の幅を設定
});
 
//hoverしたら、震えがスタートして、離れたらストップします。
$('.tenga4').hover(function(){
$(this).trigger('startRumble');
}, function(){
$(this).trigger('stopRumble');
})
// $(window).load(function(){
//    $("#menubar").sticky({ topSpacing: 0 });
// });

// $('#baba').jrumble({
// x: 2, //横の揺れ幅を設定
// y: 2, //縦の揺れ幅を設定
// rotation: 1 //回転角度の幅を設定
// });
 
// //hoverしたら、震えがスタートして、離れたらストップします。
// $('#baba').hover(function(){
// $(this).trigger('startRumble');
// }, function(){
// $(this).trigger('stopRumble');
// })


});




