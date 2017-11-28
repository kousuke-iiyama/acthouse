$(function(){
// 切り替え秒数の設定
var sec     = 4000;
// 画像用配列の準備
var images = new Array;
// アンカーも含んだ画像オブジェクトを配列に登録
$('#main-visual').children().each(function(){
images[images.length]   = $(this);
});
// 配列用のインデックスの初期化、最初の画像を表示、
var index = 0;
$('#main-visual').html(images[index].clone(true));
// 画像切り替え処理
setInterval(function(){
index++;
// 配列用インデックスの初期化
if (index >= images.length) index = 0;
// 古い画像をフェードアウトし、削除
$('#main-visual > a').fadeOut('slow', function(){
$(this).remove();
});
// 新しい画像をフェードインで表示
$('#main-visual').prepend(images[index].clone(true).fadeIn('slow'));
}, sec);
});
