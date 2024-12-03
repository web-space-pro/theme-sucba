<?php
    if ( function_exists('get_field') ) {
        $title      = get_sub_field('title');
        $sub_title  = get_sub_field('sub_title');
        $content    = get_sub_field('content');
        $covervideo = get_sub_field('covervideo');
        $addvideo   = get_sub_field('addvideo');
        $iconplay   = get_sub_field('iconplay');
    }

?>

<section class="infoPrograms">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="infoPrograms__heading">
                    <h2><?= $title; ?></h2>
                    <?php if(!empty($sub_title)): ?>
                     <h3><?= $sub_title; ?></h3>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php if(isset($content)): ?>
            <?php foreach( $content as $key => $item ): ?>
                <?php  if($key % 2 == 0):?>
                    <div class="infoPrograms__item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="infoPrograms__content">
                                    <h4><?= $item['title']; ?></h4>
                                    <?= $item['description']; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <?php foreach( $item['settings_show'] as $value ): ?>
                                    <?php  if($value["acf_fc_layout"] == "Video"): ?>
                                        <?php
                                        $cover_video = $value["covervideo"]['url'];
                                        $icon_video = $value["iconplay"]['url'];
                                        ?>
                                        <div class="infoPrograms__video">
                                            <div class="video-box">
                                                <div class="bg-video" style="background-image: url(<?= $cover_video; ?>);">
                                                    <div class="bt-play">
                                                        <img src="<?= $icon_video; ?>" alt="<?= get_bloginfo(); ?>">
                                                    </div>
                                                </div>
                                                <div class="video-container">
                                                    <?php if($value['addvideo'][0]["acf_fc_layout"] == "file"):?>
                                                       <video preload="auto" controls="" playsinline="" src="<?=$value['addvideo'][0]["file"]["link"];?>"></video>
                                                    <?php else: ?>
                                                        <iframe width="560" height="315" src="<?=$value['addvideo'][0]["embed"];?>"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;"  allowfullscreen></iframe>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="infoPrograms__image">
                                            <img src="<?=$value["photo"]['url'] ?>" alt="<?=$value["photo"]['alt'] ?>">
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                <div class="infoPrograms__item">
                    <div class="row">
                      <div class="col-md-6">
                                <?php foreach( $item['settings_show'] as $value ): ?>
                                    <?php  if($value["acf_fc_layout"] == "Video"): ?>
                                        <?php
                                        $cover_video = $value["covervideo"]['url'];
                                        $icon_video = $value["iconplay"]['url'];
                                        ?>
                                        <div class="infoPrograms__video">
                                            <div class="video-box">
                                                <div class="bg-video" style="background-image: url(<?= $cover_video; ?>);">
                                                    <div class="bt-play">
                                                        <img src="<?= $icon_video; ?>" alt="<?= get_bloginfo(); ?>">
                                                    </div>
                                                </div>
                                                <div class="video-container">
                                                    <?php if($value['addvideo'][0]["acf_fc_layout"] == "file"):?>
                                                        <video preload="auto" controls="" playsinline="" src="<?=$value['addvideo'][0]["file"]["link"];?>"></video>
                                                    <?php else: ?>
                                                        <iframe width="560" height="315" src="<?=$value['addvideo'][0]["embed"];?>"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;"  allowfullscreen></iframe>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="infoPrograms__image">
                                            <img src="<?=$value["photo"]['url'] ?>" alt="<?=$value["photo"]['alt'] ?>">
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                      <div class="col-md-6">
                                <div class="infoPrograms__content">
                                    <h4><?= $item['title']; ?></h4>
                                    <?= $item['description']; ?>
                                </div>
                            </div>
                    </div>
                </div>
               <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>
