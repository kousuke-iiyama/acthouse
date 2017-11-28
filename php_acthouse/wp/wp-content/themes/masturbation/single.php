<?php get_header(); ?>

<div id="wrapper">

 <div class="sidebar_single">
<?php get_sidebar(); ?>
</div>

<div class="single_content">
<?php if(have_posts()) : ?>
	 <?php while(have_posts()) : ?>
   <?php the_post(); ?>
		 <p class="data"><?php echo get_the_date(); ?></p>
		 <h3 class="title"><?php the_title(); ?></h3>
		 <p class="category"><?php the_category(); ?></p>
		 <p><?php the_tags(); ?></p>
		 <p class="article"><?php the_content(); ?></p>

		 <a class="facebook-iine" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>"
     onClick="window.open(encodeURI(decodeURI(this.href)),
      'sharewindow',
      'width=550, height=450, personalbar=0, toolbar=0, scrollbars=1, resizable=!'
      ); return false;">
      Facebookでシェア
     </a>
      <a class="twitter-tweet" href="http://twitter.com/intent/tweet?text=【<?php the_title(); ?> | <?php the_permalink(); ?>】"
      onClick="window.open(encodeURI(decodeURI(this.href)),
      'tweetwindow',
      'width=550, height=450, personalbar=0, toolbar=0, scrollbars=1, resizable=!'
      ); return false;">
      twitterでツイート
      </a>
		<!--  <div class="fb-like" data-href="http://192.168.33.10/php/wp/aboutme" data-width="200" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div> -->

<div class="col-full">
  <div class="wrap-col">
    <?php comments_template(); ?>
  </div><!-- ^ .wrap-col END-->
</div><!-- ^ .col-full END-->
		<?php endwhile; ?>
 <?php endif ; ?>
</div>

<div class="adv">
<img src="http://www.arionet.jp/data/wp-content/uploads/2011/11/upload.png" width="200px" height="600px">
</div>

</div>


<?php get_footer(); ?>