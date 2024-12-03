<?php
/**
 * The template for displaying the footer
 * @package theme-sucba
 */

?>
<?php
global $SVG;
if (function_exists('get_field')) {
    $contacts = get_field('contacts', 'options');
    $social_network = get_field('social_network', 'options');
    $footer_code = get_field('footer_code', 'options');
    $we_work = get_field('we_work', 'options');
    $footer_development = get_field('footer_development', 'options');
    $footer_copyright = get_field('footer_copyright', 'options');
}
?>
	<footer class="footer">
		<div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
                    <div class="footer__logo">
                        <a href="<?= get_home_url(); ?>">
                            <img width="180" height="100" src="/wp-content/uploads/2024/11/logo_sucba.svg" alt="">
                        </a>
                        <h3>СУЦБА</h3>
                    </div>
                </div>
                <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4">
                    <?php if(isset($we_work)): ?>
                        <div class="footer__work">
                            <?php foreach( $we_work as $key => $item ): ?>
                                  <?php if($key == "label"): ?>
                                        <h3><?=$item?></h3>
                                 <?php else: ?>
                                        <p><?=$item?></p>
                                <?php endif; ?>
                            <?php   endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-xs-7 col-sm-5 col-md-4 col-lg-4">
                    <div class="footer__contact">
                        <?php if(!empty($contacts["number"])): ?>
                            <a href="tel:<?=$contacts["number"]?>" target="_blank">
                                <?=$contacts["number"];?>
                            </a>
                        <?php endif; ?>
                        <?php if(!empty($contacts["email"])): ?>
                            <a href="mailto:<?=$contacts["email"]?>" target="_blank">
                                <?=$contacts["email"];?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="hr"></div>
            <div class="row row-bottom">
                <div class="col-xs-12 col-sm-6 col-md-6">

                    <?php if(isset($social_network)): ?>
                    <ul class="footer__social">

                            <?php foreach( $social_network as $key => $item ): ?>
                                <?php    if($key =='vk' && !empty($item) ){ ?>
                                    <li>
                                        <a href="<?=$item;?>"  target="_blank">
                                            <?= $SVG['vk']; ?>
                                        </a>
                                    </li>
                                <?php   }elseif($key =='tg' && !empty($item)){ ?>
                                    <li>
                                        <a href="<?=$item;?>"  target="_blank">
                                            <?= $SVG['telegram']; ?>
                                        </a>
                                    </li>
                                <?php  }elseif($key =='whatsApp' && !empty($item)){ ?>
                                    <li>
                                        <a href="<?=$item;?>"  target="_blank">
                                            <?= $SVG['whatsapp']; ?>
                                        </a>
                                    </li>
                                <?php   } ?>
                            <?php   endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <?php if(!empty($footer_development)): ?>
                        <div class="footer__dev">
                            <p><?= $footer_development?></p>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <?php if(!empty($footer_copyright)): ?>
                        <div class="footer__copyright">
                            <p><?= $footer_copyright ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
	</footer>


<?php wp_footer(); ?>
<?php if(!empty($footer_code)): echo $footer_code; endif; ?>

</body>
</html>
