<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sixteen
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    
    <div class="container">
		<div class="site-info">
			<?php printf( __( '©Copyright2017 きょうもメシがウマい All Rights Reserved', 'sixteen' ), '<a href="tenga.com" rel="designer">ちんぽ</a>' ); ?>
		</div><!-- .site-info -->
		
        <div id="footertext">
        	<?php echo esc_html(get_theme_mod('seller_footer_text')); ?>
        </div>    
        
        </div><!--.container-->
	</footer><!-- #colophon -->
</div><!-- #page -->
			 	
<?php wp_footer(); ?>
</body>
</html>