
<?php
/*
Template Name:ちんぽ
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">




	<?php wp_head(); ?>
</head>
<body>
<div class="bgImage">
<div class="blog_title">

<div id="social-icon">
  <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
  <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
  <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
  <a href="#"><i class="fa fa-rss fa-lg"></i></a>
</div>

<div class="demo demo11">
  <div class="heading">
    <svg height="50px" width="100%">
      <text y="45px"><?php bloginfo('name'); ?></text>
    </svg>
  </div>
</div>
   <!-- <h1 class="main_title"><?php bloginfo('name'); ?></h1> -->
   <div class="description">
   <p><?php bloginfo('description'); ?></p>
</div>
</div>

<div id="globalnavi">
  <ul>
    <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
    <li><a href="all_article">なんぞ</a></li>
    <li><a href="aboutme">メッシ</a></li>
    <li><a href="#">味噌カツ</a></li>
    <li><a href="#">豚丼</a></li>
    <li><a href="#">鉄火丼</a></li>
    <li><a href="#">アドカド</a></li>
  </ul>
</div>

<div id="profile_content">
<div id="profile_image">
<img src="http://www.iiyama-pc.jp/iiyaman/images/meshiyama.png" width=300 height=300>
<div class="box">
		<p class="text">よくこんなクソサイトきたな</p>
	</div>
</div>
<div id="profile_text">
<p>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h3 class="profile">プロフィール</h3>
お米の街で生まれた21歳。<br>米俵高校卒業。パンよりご飯、女よりご飯。<br>生肉会社に就職予定。<br>BTW(By the way の略)、あなた納豆は好きですか？<br>僕は控えめに言って大好きです。<br>
一人暮らしをしていた時は、よく納豆にお世話になっていました。<br>
このブログでは、主に納豆についてお話をしていきたいと思っています。ねば<br>
キムチとチーズ、いいっすねえ〜。大根おろしも間違いない。チョコレートはちょっとオブない。<br>
ベストは、刻んだ沢庵・メカブ・豆腐＋納豆の組み合わせ。<br>
あれは神です。<br>
<br>
</p>
</div>
</div>





<?php get_footer(); ?>
