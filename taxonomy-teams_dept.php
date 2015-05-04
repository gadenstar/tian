<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package nii_framework
 */

get_header(); 


?>
<div class=" uk-container uk-container-center">
<div class="uk-grid">
	<div id="primary" class="content-area uk-width-medium-1-1">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<ul id="my-id" class="uk-subnav">
			    <li data-uk-filter=""><a href="">ALL</a></li>
			    <li data-uk-filter="filter-a"><a href="">部门1</a></li>
			    <li data-uk-filter="filter-b"><a href="">部门1</a></li>
			</ul>
			</header><!-- .page-header -->
			

			<!-- 动态网格 -->
			<div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 tm-grid-heights team-grid " data-uk-grid="{controls: '#my-id',gutter: 20}">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
					<?php 
						$teams_name = vp_metabox("teams_set.teams_name");
						$teams_img = vp_metabox("teams_set.teams_img");
						$teams_content = vp_metabox("teams_set.teams_content");
					?>

				<div class="grid-box">
				<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
					<div class="box-image">
						<a class="focus" href="<?php the_permalink(); ?>">
							<img src="<?php echo $teams_img; ?>" alt="">
						</a>
					</div>
					<div class="centent">
						<header>
							<?php echo custom_taxonomies_terms_links(); ?>
							<?php
			//http://codex.wordpress.org/Function_Reference/get_the_terms
				$terms = get_the_terms( $post->ID, 'teams_job' );
				$draught_links = array();

					foreach ( $terms as $term ) {
						$draught_links[] = $term->name;
					}
										
					$on_draught = join( ", ", $draught_links );
				?>

				<p class="beers draught">
					On draught: <span><?php echo $on_draught; ?></span>
				</p>
							<h3 class="uk-h3"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo $teams_name; ?></a></h3>
						</header>
					</div>
				</article><!-- #post-## -->
			</div>

			<?php endwhile; ?>
				</div>
			<?php
				//Reset Query 
				par_pagenavi();
				wp_reset_query();
	
				 
				?> 

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


</div>
</div>
<?php get_footer(); ?>
