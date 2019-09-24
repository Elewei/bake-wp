<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bake
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="content">
			<!-- ====3D Models section=== -->
			<div class="row align-items-start">
				<div class="col-8">
					<?php
					
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );
						the_post_navigation();
					endwhile; // End of the loop.
					
					?>
				</div>
				<div class="col-4">
					信息页面
				</div>
			</div>
			<div class="row align-self-center">
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>					
			</div>			
		</div>


	</main>
</div>


<?php
//get_sidebar();
get_footer();











