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
	        </div>
	        </div>
	    </div>
    </main>

<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        the_title( '<h2>', '</h2>' ); 
        the_post_thumbnail(); 
        the_excerpt();
    endwhile; 
else: 
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
endif; 
?>


<?php
get_sidebar();
get_footer();
