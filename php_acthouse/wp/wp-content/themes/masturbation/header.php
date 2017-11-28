<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


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





