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


<div class="container-fluid">
	<div class="row">
		<!-- 3D model detail Info-->
		<div class="span8">
			<!-- 3D model header Info-->
			<div class="row">
				<div class="span4">
					<img class="baker-avator" src="<?php echo get_theme_file_uri( 'assets/img/small_bilgin__ottt.jpg'); ?>">
				</div>
				<div class="span8">
					<div class="row text-center">
						<h3>会飞的独角兽</h3>
					</div>
					<div class="row">
						由 qwzhang 设计
					</div>
				</div>
			</div>
			<div class="row"></div>
			<div class="row"></div>
			<div class="row"></div>
			<div class="row"></div>
			<div class="row"></div>
			<div class="row"></div>
			<div class="row"></div>
		</div>
		<div class="span4">
			模型下载页面
		</div>
	</div>
</div>



<?php
get_sidebar();
get_footer();










/**
<div id="primary" class="content-area">
	<main id="main" class="site-main">

	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', get_post_type() );

		the_post_navigation();

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

	</main><!-- #main -->
</div><!-- #primary -->
*/