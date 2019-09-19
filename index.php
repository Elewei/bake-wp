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
            		<div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="<?php echo get_theme_file_uri( 'assets/img/create_1.jpg'); ?>">
                <div class="card-body">
                  <h5 class="card-title">蓝猫</h5>
                  <p class="card-text">2D平面蓝猫图案</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">查看</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">下载</button>
                    </div>
                    <small class="text-muted">下载量: 99</small>
                  </div>
                </div>
              </div>
            		</div>
<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        the_title( '<h1>', '</h1>' ); 
        the_content();
    endwhile; 
else: 
    _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); 
endif; 
?>
            		<!--
		            <div class="col-md-4">
		              <div class="card mb-4 shadow-sm">
		                <img class="card-img-top" src="<?php echo get_theme_file_uri( 'assets/img/create_2.jpg'); ?>">

		                <div class="card-body">
		                  <h5 class="card-title"></h5>
		                  <p class="card-text"></p>
		                  <div class="d-flex justify-content-between align-items-center">
		                    <div class="btn-group">
		                      <button type="button" class="btn btn-sm btn-outline-secondary">查看</button>
		                      <button type="button" class="btn btn-sm btn-outline-secondary">下载</button>
		                    </div>
		                    <small class="text-muted">下载量: 80</small>
		                  </div>
		                </div>
		              </div>
		            </div>
		            <div class="col-md-4">
		              <div class="card mb-4 shadow-sm">
		                <img class="card-img-top" src="<?php echo get_theme_file_uri( 'assets/img/create_3.jpg'); ?>">
		                <div class="card-body">
		                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		                  <div class="d-flex justify-content-between align-items-center">
		                    <div class="btn-group">
		                      <button type="button" class="btn btn-sm btn-outline-secondary">查看</button>
		                      <button type="button" class="btn btn-sm btn-outline-secondary">下载</button>
		                    </div>
		                    <small class="text-muted">9 mins</small>
		                  </div>
		                </div>
		              </div>
		            </div>

		            <div class="col-md-4">
		              <div class="card mb-4 shadow-sm">
		                <img class="card-img-top" src="<?php echo get_theme_file_uri( 'assets/img/create_4.jpg'); ?>">
		                <div class="card-body">
		                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		                  <div class="d-flex justify-content-between align-items-center">
		                    <div class="btn-group">
		                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
		                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
		                    </div>
		                    <small class="text-muted">9 mins</small>
		                  </div>
		                </div>
		              </div>
		            </div>
		            <div class="col-md-4">
		              <div class="card mb-4 shadow-sm">
		                <img class="card-img-top" src="<?php echo get_theme_file_uri( 'assets/img/create_1.jpg'); ?>">
		                <div class="card-body">
		                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		                  <div class="d-flex justify-content-between align-items-center">
		                    <div class="btn-group">
		                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
		                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
		                    </div>
		                    <small class="text-muted">9 mins</small>
		                  </div>
		                </div>
		              </div>
		            </div>
		            <div class="col-md-4">
		              <div class="card mb-4 shadow-sm">
		                <img class="card-img-top" src="<?php echo get_theme_file_uri( 'assets/img/create_2.jpg'); ?>">
		                <div class="card-body">
		                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		                  <div class="d-flex justify-content-between align-items-center">
		                    <div class="btn-group">
		                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
		                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
		                    </div>
		                    <small class="text-muted">9 mins</small>
		                  </div>
		                </div>
		              </div>
		            </div>

		            <div class="col-md-4">
		              <div class="card mb-4 shadow-sm">
		                <img class="card-img-top" src="<?php echo get_theme_file_uri( 'assets/img/create_3.jpg'); ?>">
		                <div class="card-body">
		                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		                  <div class="d-flex justify-content-between align-items-center">
		                    <div class="btn-group">
		                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
		                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
		                    </div>
		                    <small class="text-muted">9 mins</small>
		                  </div>
		                </div>
		              </div>
		            </div>
		            <div class="col-md-4">
		              <div class="card mb-4 shadow-sm">
		                <img class="card-img-top" src="<?php echo get_theme_file_uri( 'assets/img/create_4.jpg'); ?>">
		                <div class="card-body">
		                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		                  <div class="d-flex justify-content-between align-items-center">
		                    <div class="btn-group">
		                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
		                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
		                    </div>
		                    <small class="text-muted">9 mins</small>
		                  </div>
		                </div>
		              </div>
		            </div>
		            <div class="col-md-4">
		              <div class="card mb-4 shadow-sm">
		                <img class="card-img-top" src="<?php echo get_theme_file_uri( 'assets/img/create_1.jpg'); ?>">
		                <div class="card-body">
		                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		                  <div class="d-flex justify-content-between align-items-center">
		                    <div class="btn-group">
		                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
		                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
		                    </div>
		                    <small class="text-muted">9 mins</small>
		                  </div>
		                </div>
		              </div>
		            </div>
		        	-->
           		</div>
            </div>
        </div>

    </main>



<?php
get_sidebar();
get_footer();
