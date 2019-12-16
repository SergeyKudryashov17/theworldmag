<?php
/**
 * The template for displaying the header
 *
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            if(is_tax()) single_term_title();
            else single_post_title();
        ?>
    </title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://3dsec.sberbank.ru/demopayment/docsite/assets/css/modal.css">
    <script src="https://3dsec.sberbank.ru/demopayment/docsite/assets/js/ipay.js"></script>
    <script type="text/javascript">
        var ipay = new IPAY({
            api_token : "7j9m4nhb4pba1fgbehe2kee11k"
        });
    </script>
</head>
<body>
<header>
    <div class="container-fluid">
        <div class="col-md-6 col-sm-5 col-xs-6">
            <div class="row">
                <div class="logo">
                    <a href="<?php echo get_page_link('2') ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/headerLogo.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-5 col-xs-6">
            <div class="row">
                <nav>
                    <a href="#" id="menu_btn">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo get_page_link('19') ?>">Колумнисты</a>
                    <a href="<?php echo get_page_link('8') ?>">Галереи</a>
                    <a href="<?php echo get_page_link('10') ?>">Кредо</a>
                    <a href="<?php echo get_page_link('12') ?>">Проза жизни</a>
                    <a href="<?php echo get_page_link('383') ?>">Красота</a>
                    <a href="<?php echo get_page_link('16') ?>">The World Club</a>
                    <a href="<?php echo get_page_link('14') ?>">Новости</a>
                    <a href="<?php echo get_page_link('3116') ?>">Стиль</a>
                    <div class="clearfix"></div>
                </nav>
            </div>
        </div>
        <div class="col-md-2 col-md-offset-0 col-sm-6 col-sm-offset-5 hidden-xs">
            <div class="row">
                <div class="social-links">
                    <a href="<?php echo get_field('link_facebook', '2') ?>" target="_blank">
                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo get_field('link_vk', '2')?>" target="_blank">
                        <i class="fa fa-vk" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo get_field('link_twitter', '2') ?>" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo get_field('link_instagram', '2')?>" target="_blank">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo get_field('link_telegram', '2')?>" target="_blank">
                        <i class="fa fa-telegram" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo get_field('link_youtube','2') ?>" target="_blank">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                    <a>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </a>
                    <a href="https://theworldmag.com/en/" class="lang">
                        <span>EN</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-xs-12 mobile_menuWrp">
            <div class="mobile_menu">
                <ul>
                    <li><a href="<?php echo get_page_link('19') ?>">Колумнисты</a></li>
                    <li><a href="<?php echo get_page_link('8') ?>">Галереи</a></li>
                    <li><a href="<?php echo get_page_link('10') ?>">Кредо</a></li>
                    <li><a href="<?php echo get_page_link('12') ?>">Проза жизни</a></li>
                    <li><a href="<?php echo get_page_link('383') ?>">Красота</a></li>
                    <li><a href="<?php echo get_page_link('16') ?>">The World Club</a></li>
                    <li><a href="<?php echo get_page_link('14') ?>">Новости</a></li>
                    <li><a href="<?php echo get_page_link('3116') ?>">Стиль</a></li>
                    <li>
                        <a href="<?php echo get_field('link_facebook', '2') ?>" target="_blank">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo get_field('link_vk', '2')?>" target="_blank">
                            <i class="fa fa-vk" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo get_field('link_twitter', '2') ?>" target="_blank">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo get_field('link_instagram', '2')?>" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo get_field('link_telegram', '2')?>" target="_blank">
                            <i class="fa fa-telegram" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo get_field('link_youtube','2') ?>" target="_blank">
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://theworldmag.com/en/" class="lang_mobile">
                            <span>EN</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php get_template_part('searchform'); ?>
</header>