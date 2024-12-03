<?php
    if ( function_exists('get_field') ) {
        $title         = get_sub_field('title');
        $image         = get_sub_field('image');
        $contactform   = get_sub_field('contactform');
    }
?>

<section class="partOne">
    <div class="container">
        <div class="row row--flex">
            <div class="col-lg-6">
                <div class="partOne__image">
                    <img class="image" src="<?= $image["url"] ?>" alt="<?= $image["alt"] ?> ">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="partOne__title">
                    <h2 class="c-black"><?= $title; ?></h2>
                </div>

                <div class="partOne__form">
                    <div>
                        <?= do_shortcode('[contact-form-7 id="'.$contactform.'"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
