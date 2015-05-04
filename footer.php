<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package nii_framework
 */
?>
		</div>
	</div><!-- #content   -->

	<footer id="colophon" class="site-footer " role="contentinfo">
		<div class="uk-container uk-container-center">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'nii_framework' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'nii_framework' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'nii_framework' ), 'nii_framework', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
	<div id="my-id" class="uk-offcanvas">
		<div class="uk-offcanvas-bar">
				<form action="<?php echo home_url( '/' ); ?>" method="get" id="searchform">
					<input type="text" name="s" id="s" class="search-input" value="<?php the_search_query(); ?>" placeholder="输入关键字搜索" />
					<button class="search-btn" type="submit"><i class="icon uk-icon-search"></i></button>
				</form>
			<ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
		
				<?php wp_nav_menu( 
					array( 
						'items_wrap' => '%3$s',
						'theme_location' => 'primary', 
						'container'=>false,
						'menu_class' => 'uk-navbar-nav uk-hidden-small',
						 'walker'			=>	new JWalker_Nav_Menu,
						)); ?>

			</ul>
		</div>
	  
	</div>
<?php wp_footer(); ?>
<script type="text/javascript">

</script>
</body>
</html>
