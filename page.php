<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * @package theme-sucba
 */
get_header();

if (function_exists('get_field')) {
    $cart_map = get_field('cart_map', 'options');
    $cart_address = get_field('cart_address', 'options');
    $title_review = get_field('title_review', 'options');
    $form_review = get_field('form_review', 'options');
    $image_left = get_field('image_left', 'options');
    $image_right = get_field('image_right', 'options');
}

?>
    <?php  if (have_posts() ): ?>
        <div class="wrapper">
            <?php
                while ( have_posts() ) : the_post() ; ?>
                    <?php
                    if ( function_exists('have_rows') && have_rows('componetncs' )) :
                        while( have_rows('componetncs') )
                        {
                            the_row();
                            $layout = get_row_layout();
                            $inclusion = get_stylesheet_directory() . DIRECTORY_SEPARATOR . "partails" . DIRECTORY_SEPARATOR ."tpl-{$layout}.php";

                            if( file_exists( $inclusion ) )
                            {
                                include( $inclusion );
                            }
                        }
                    else:
                        get_template_part( 'template-parts/content', get_post_type() );
                        ?>
                    <?php
                    endif;
                endwhile;
            endif ?>
        </div>

    <section class="partReviews">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="partReviews__title">
                        <h2><?=$title_review;?></h2>
                    </div>
                    <div class="partReviews__form">
                         <?= do_shortcode('[contact-form-7 id="'.$form_review.'"]'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="partReviews__image --l">
            <img src="<?=$image_left['url']?>" alt="<?=$image_left['alt']?>">
        </div>
        <div class="partReviews__image --r">
            <img src="<?=$image_right['url']?>" alt="<?=$image_right['alt']?>">
        </div>
    </section>

    <section class="partMap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="partMap__title">
                        <div>
                            <h2><?=$cart_map;?></h2>
                        </div>
                        <div class="partMap__title--address">
                            <?=$cart_address;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div id="map"></div>
        </div>
    </section>

<?php
//get_sidebar();
get_footer();
