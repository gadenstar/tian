<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package nii_framework
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="topbar">
		<div class="uk-container uk-container-center uk-clearfix">
			<h5 class="uk-h5 uk-float-left">湖南天安家装（集团）有限公司<span>服务热线:400-888-1429</span></h5>
			<ul class="uk-float-right">
				<li class =""><a href="">设为首页</a></li>
				<li><a href="">收藏本站</a></li>
			</ul>
		</div>
	</div>
	<header id="masthead" class="header" role="banner">
		<div class="brand-nav">
			<div class="uk-container uk-container-center">
				<nav class="uk-navbar">
					<a href="#my-id" class="uk-navbar-toggle   uk-hidden-large "  data-uk-offcanvas></a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="uk-navbar-brand "><?php bloginfo( 'name' ); ?></a>
					<div class="uk-navbar-flip">
			       		<ul class="uk-navbar-nav uk-visible-large">
				            <?php wp_nav_menu( 
				            array( 
				            'items_wrap' => '%3$s',
				            'theme_location' => 'primary', 
				            'container'=>false,
				            'menu_class' => 'uk-navbar-nav',
				            'walker'			=>	new JWalker_Nav_Menu,

				             ) 
				             ); ?>
			        	</ul>
			        	
			    	</div>
				</nav>
			</div>
		</div>
<!-- 		<div class="search-box uk-visible-large">
			<div class="uk-container uk-container-center">
				<form action="<?php echo home_url( '/' ); ?>" method="get" id="searchform">
					<input type="text" name="s" id="s" class="search-input" value="<?php the_search_query(); ?>" placeholder="输入关键字搜索" />
					<button class="search-btn" type="submit"><i class="icon uk-icon-search"></i></button>
				</form>
			</div>
		</div> -->
	</header><!-- #masthead -->
	<?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?>	
	
	<div id="content" class="site-content">
		