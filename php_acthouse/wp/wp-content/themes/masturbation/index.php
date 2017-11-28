
<?php get_header(); ?>
<div class="content">
<h2 class="new_posts">新着記事</h2>
  
<?php query_posts('posts_per_page=3'); ?>
<?php if(have_posts()) : ?>
	 <?php while(have_posts()) : ?>
		 <?php the_post(); ?>
		 <h3><?php echo get_the_date(); ?></h3>
		 <div class="eye_catch"><?php the_post_thumbnail("medium"); ?></div>
		 <a href="<?php the_permalink(); ?>">
		 <h2 class="title"><?php the_title(); ?>
		 </a>
		 </h2>
		 <p><?php the_category(); ?></p>
		 <p><?php the_tags(); ?></p>
		  <p class="article"><span><?php the_content(); ?></span></p>
      <div class="fb-like" data-href="http://192.168.33.10/php/wp/aboutme" data-width="200" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
		 <hr>
   <?php endwhile; ?>
 <?php endif ; ?>
 </div>

 <div id="meshilogo">
<!-- <img src="logo.png"> -->
  <a href="a.html"><img src="http://get.secret.jp/pt/file/1485392521.png" alt="" width="300" height="300"  class="meshi1" /></a>
  <a href="b.html"><img src="http://get.secret.jp/pt/file/1485392575.png" alt="" width="350" height="350" class="meshi3" /></a>
  <a href="c.html"><img src="http://get.secret.jp/pt/file/1485392633.png" alt="" width="350" height="350" class="meshi3" /></a>

</div>

<div id="postit_box">
  <a href="http://tenga.sod.co.jp/auth/index.php?transactionid=d920c776444a7e6f93259cc0a3681e1c25b90ce8">
    <div class="postit post2">
    サンタさん、テンガが<br>欲しいです。
    </div>
  </a>
  <a href="http://192.168.33.10/php/wp/archives/49">
    <div class="postit post3">
    <span>サンタなどいない</span><span>めしめし</span>めしやま
    </div>
  </a>
  <a href="http://www.marumiya.co.jp/product/series/furikake/fukuro/index.html">
    <div class="postit">
    <span>ご飯を食べる</span><span>ふりかけ</span>
    </div>
  </a>
</div>
<!-- <div class="unknown">
<h2>今日の献立</h2>
<h3>ご飯</h3>
<h2>牛乳</h2>
</div> -->

<div class="sidebar">
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>

