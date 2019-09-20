<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bake
 */

get_header();
?>

    <!-- =====Main BODY SECTION ==== -->
    <main role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo get_theme_file_uri( 'assets/img/3d-chocolate-cake.jpg'); ?>"></img>
                    <div class="container">
                        <div class="carousel-caption feature-text">
                            <h1>3D打印 + 烘培</h1>
                            <p>3D打印与烘培技术的结合可以帮助烘培师、个人创造出更具艺术效果的烘培产品</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">开始注册</a></p>
                        </div>
                    </div>
                </div>
            
                <div class="carousel-item">
                    <img src="<?php echo get_theme_file_uri( 'assets/img/3d-chocolate-cake.jpg'); ?>"></img>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1></h1>
                            <p></p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="<?php echo get_theme_file_uri( 'assets/img/3d-chocolate-cake.jpg'); ?>"></img>
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1></h1>
                            <p></p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>  
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">向前</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">向后</span>
            </a>
        </div>


        <div class="album py-5 bg-light">
            <div class="container">
            	<div class="row">
            		<?php if ( have_posts() ):  while ( have_posts() ): the_post(); ?>
                        
                		<div class="col-md-4">
                  			<div class="card mb-4 shadow-sm">
                    			<!-- Get Post thumbnail image -->
                                <a href="<?php the_permalink(); ?>">
            						<?php 
            							if ( has_post_thumbnail() ) { 
            								the_post_thumbnail();
            							} 
            						?>                  
                                </a>
                    			<div class="card-body">
                                    <a class="card-post-title" href="<?php the_permalink(); ?>">
                      				    <h5 class="card-title text-center"><?php the_title(); ?></h5>
                                    </a>
                      				<p class="card-text"><?php the_excerpt(); ?></p>
                      				<div class="d-flex justify-content-between align-items-center">
                        				<div class="btn-group">
                          					<button type="button" class="btn btn-sm btn-outline-secondary">下载</button>
                        				</div>
                        				<small class="text-muted">下载量: 99</small>
                      				</div>
                    			</div>
                  			</div>
                		</div>
                      
            		<?php  endwhile; else: ?>
						<p>
                            <?php _e( 'Sorry, no pages matched your criteria.', 'textdomain' );  endif;  ?>
                        </p>
            		
           		</div>
            </div>
        </div>
    </main>



<?php
//get_sidebar();
get_footer();
