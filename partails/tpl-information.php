<?php
    if ( function_exists('get_field') ) {
        $title     = get_sub_field('title');
        $content = get_sub_field('content');
        $step_info = get_sub_field('step_info');
        $image     = get_sub_field('image');
        $movavic   = get_sub_field('movavic');
    }
?>

<section class="information">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2><?= $title; ?></h2>
                <div class="information__content">
                    <?= $content; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="information__image">
                    <img class="image" src="<?= $image["url"] ?>" alt="<?= $image["alt"] ?> ">
                    <img src="<?= $movavic["url"] ?>" alt="<?= $movavic["alt"] ?> " class="movavic">
                </div>
                <?php if(isset($step_info)): ?>
                    <div class="information__work">
                        <?php foreach( $step_info as $key => $item ): ?>
                            <div>
                                <h3><?= $item['title']?></h3>
                                <span><?= $item['text']?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>
</div>
