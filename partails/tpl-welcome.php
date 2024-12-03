<?php
    if ( function_exists('get_field') ) {
        $title  = get_sub_field('title');
        $image  = get_sub_field('photo');
        $link   = get_sub_field('link');
        $sity   = get_sub_field('sity');
        $select_show   = get_sub_field('settings_show');
    }
?>
<div class="mask">
    <section class="hero">
        <div class="container">
            <div class="row">
            <div class="col-md-7">
                <div class="hero__content">
                    <h1> <?= $title; ?></h1>
                    <div class="hero__content--info">
                        <a class="btn btn-primary" href="<?= $link["url"]; ?>" target="<?= $link["target"]; ?>"> <?= $link["title"]; ?> </a>
                        <span class="hero__content--sity"><?= $sity; ?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <?php if($select_show =="3dMavic"): ?>
                <div class="hero__mavic3D">
                    <div class="hero__mavic3D--box">
                        <?= do_shortcode('[mavic]'); ?>
                    </div>
                </div>
                <?php else: ?>
                <div class="hero__image">
                    <div class="hero__image--box">
                        <img class="image" src="<?= $image["url"] ?>" alt=" <?= $image["alt"] ?> ">
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        </div>
    </section>
