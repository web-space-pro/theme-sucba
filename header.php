<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-sucba
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&display=swap" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"rel="stylesheet" type="text/css">
    <?php wp_head(); global $SVG; ?>
    <?php
        if (function_exists('get_field')) {
            $contacts = get_field('contacts', 'options');
            $label_email = get_field('label_email', 'options');
            $widget_settings = get_field('widget_settings', 'options');
            $social_network = get_field('social_network', 'options');
            $header_code = get_field('header_code', 'options');
        }
    ?>
    <?php if(!empty($header_code)): echo $header_code; endif; ?>
</head>

<body <?php body_class('leading-tight'); ?>>
<?php wp_body_open(); ?>

    <header class="header">
        <div class="header__wrapper">
        <div class="header__nav">
            <button class="header__nav--btn">
                Меню
                <p class="dots">
                    <span class="dot"></span>
                </p>
            </button>

            <?php foreach( $widget_settings as $key => $item ): if($item == "Показывать в шапке"): ?>
                <div class="header__bvi">
                    <?php echo do_shortcode( '[bvi text="Версия для слабовидящих"]' ); ?>
                </div>
            <?php  endif; endforeach; ?>
        </div>
        <div class="header__logo">
            <?= the_custom_logo(); ?>
        </div>
        <div class="header__contact">
            <div>
                <?php if(!empty($label_email)): ?>
                    <h4><?=$label_email?></h4>
                <?php endif; ?>

                <?php if(!empty($contacts["email"])): ?>
                    <a href="mailto:<?=$contacts["email"]?>" target="_blank">
                        <?=$contacts["email"];?>
                    </a>
                <?php endif; ?>
            </div>
            <div>
                <?php if(!empty($contacts["number"])): ?>
                   <h4>
                       <a href="tel:<?=$contacts["number"]?>" target="_blank">
                           <?=$contacts["number"];?>
                       </a>
                   </h4>
                <?php endif; ?>
                <?php if(isset($social_network)): ?>
                    <ul class="header__nav--social">

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
            </div>

        </div>
    </div>
    </header>

    <div class="mobile_menu">
        <div class="mobile_menu__box">
            <div class="mobile_menu__box--top">
                <button class="mobile_menu__close">
                    <span class="inner"></span>
                </button>
                <div class="mobile_menu__logo">
                    <?= the_custom_logo(); ?>
                </div>
            </div>
            <div class="mobile_menu__box--menu">
                <?= header_nav();?>
            </div>
            <div class="mobile_menu__box--contact">
                <div>
                    <?php if(!empty($label_email)): ?>
                        <h4><?=$label_email?></h4>
                    <?php endif; ?>

                    <?php if(!empty($contacts["email"])): ?>
                        <a href="mailto:<?=$contacts["email"]?>" target="_blank">
                            <?=$contacts["email"];?>
                        </a>
                    <?php endif; ?>

                    <?php if(!empty($contacts["number"])): ?><a href="<?=$contacts["number"]?>" target="_blank"><?=$contacts["number"]?></a><?php endif; ?>
                </div>
                <div>

                    <?php if(isset($social_network)): ?>
                        <ul class="social">

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
                </div>

            </div>
            <?php foreach( $widget_settings as $key => $item ): if($item == "Показывать в меню"): ?>
                <div class="mobile_menu__bvi">
                    <?php echo do_shortcode( '[bvi text="Версия для слабовидящих"]' ); ?>
                </div>
            <?php  endif; endforeach; ?>

        </div>
    </div>
