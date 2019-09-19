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

        

    </main>

<?php
get_sidebar();
get_footer();
