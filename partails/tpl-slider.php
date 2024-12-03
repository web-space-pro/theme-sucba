<?php
    if ( function_exists('get_field') ) {
        $title  = get_sub_field('title');
        $images  = get_sub_field('images');
        $link   = get_sub_field('link');
        $slides   = get_sub_field('slides');
    }
?>

<section class="partSlider">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="partSlider__title">
                    <h2><?= $title; ?></h2>
                </div>
            </div>
            <div class="col-12">
                <div class="partSlider__slider">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <?php foreach( $slides as $item ): ?>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <?php  echo wp_get_attachment_image( $item['photo']['id'], 'full' ); ?>
                                    </div>
                                    <?php if(!empty($item['label'])): ?>
                                        <div class="information">
                                            <a href="<?=(!empty($item['file']['url']) ? $item['file']['url'] : '/');?>" target="_blank"><?=$item['label'];?><?=$item['label'];?></a>
                                        </div>
                                    <?php endif;?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-button-next">
                            <svg width="12" height="26" viewBox="0 0 12 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2.1249L1.78471 -1.90735e-06L11.5055 11.5807C11.6622 11.7663 11.7866 11.9869 11.8715 12.23C11.9563 12.4731 12 12.7337 12 12.997C12 13.2603 11.9563 13.5209 11.8715 13.764C11.7866 14.007 11.6622 14.2277 11.5055 14.4133L1.78471 26L0.00168133 23.8751L9.12538 13L0 2.1249Z" fill="white" />
                            </svg>
                        </div>
                        <div class="swiper-button-prev">
                            <svg width="12" height="26" viewBox="0 0 12 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 23.8751L10.2153 26L0.494453 14.4193C0.337758 14.2337 0.213403 14.0131 0.128545 13.77C0.0436863 13.5269 0 13.2663 0 13.003C0 12.7397 0.0436863 12.4791 0.128545 12.236C0.213403 11.993 0.337758 11.7723 0.494453 11.5867L10.2153 0L11.9983 2.1249L2.87462 13L12 23.8751Z" fill="white" />
                            </svg>
                        </div>
                    </div>
                </div>
                <?php if(!empty( $link["url"])): ?>
                <div class="partSlider__btn">
                    <a class="btn btn-primary" href="<?= $link["url"]; ?>" target="<?= $link["target"]; ?>"> <?= $link["title"]; ?> </a>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>
