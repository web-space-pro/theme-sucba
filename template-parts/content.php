<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-sucba
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single__post'); ?>>

    <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <?php endif; ?>
    <div class="single__post--header" style="background-image: url('<?php echo $image[0]; ?>')">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?= the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="single__post--content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php
                    the_content(
                        sprintf(
                            wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'theme-sucba' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            wp_kses_post( get_the_title() )
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>
</article>
