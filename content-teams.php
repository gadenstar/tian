<?php
/**
 * @package nii_framework
 */
$teams_name = vp_metabox("teams_set.teams_name");
$teams_img = vp_metabox("teams_set.teams_img");
$teams_content = vp_metabox("teams_set.teams_content");
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="uk-grid team-box ">
		<div class="uk-width-5-10 team-img">
			<img src="<?php echo $teams_img; ?>" alt="">
		</div>
		<div class="uk-width-5-10 team-info">
			<div class="name">
				<span>姓名</span>
				<h3 class="uk-h3">
					<?php echo $teams_name; ?>
				</h3>
			</div>
			<?php echo custom_taxonomies_terms_links(); ?>

			<?php
			//http://codex.wordpress.org/Function_Reference/get_the_terms
			//http://www.ashuwp.com/courses/highgrade/239.html
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

		


			</div>
	</div>
	<div class="team-content">
		<?php echo $teams_content; ?>
	</div>
		<div class="nimabi">

		<?php 
		vp_metabox("team_set.team_member_name"); ?>
		<?php vp_metabox("name.binding_group.vp_meta_sample_2"); ?>
		<?php echo vp_metabox("vp_meta_sample_2.binding_group.0.name"); ?>
		<?php 
		$meta = get_post_meta($post->ID, 'team_set', true);
				//echo $meta;
				foreach($meta as $key3=>$value3)
				echo "<p>".$key3."=>".$value3."</p>";
			$key6 = $key3->team_member_img;
			echo $meta['team_member_job'];
			printf($meta['team_member_job']);
		 ?>
		<?php the_taxonomies( 'before=<ul>&after=</ul>' ); ?>
	<?php echo custom_taxonomies_terms_links(); ?>
	</div>
	<!-- .entry-meta -->
	<header class="entry-header nimabi">
		<h1 class="uk-h2"></h1>
		<?php show_category(); //get_categories( $args );?>
		<div class="entry-meta">

		</div><!-- .entry-meta -->
		
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'nii_framework' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php nii_framework_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
