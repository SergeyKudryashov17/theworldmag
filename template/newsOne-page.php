<?php
/*
 * Template Name: Новость/Стиль
 * Template Post Type: news, style, beautys
 */
?>
<?php get_header(); ?>
    <section>
        <div class="container-fluid">
            <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
                <div class="publicHeadNews" style="background: url('<?php echo get_field('image_big') ?>'); background-size: cover">
                    <?php
                    $color = get_field('color_headline');
                    $color = 'color: '.$color.' !important';
                    ?>
<!--                <img class="img-responsive" src="--><?php //echo get_field('image_big') ?><!--" alt="">-->
                    <h1 style="<?php echo $color ?>"><?php single_post_title(); ?></h1>
                    <span class="promoArticle" style="<?php echo $color ?>">
                        <?php echo get_field('desc_news')?>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
                <div class="publicContent">
                    <?php
                    while( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                    ?>
<!--                <div class="soc-share">-->
<!--                --><?php //echo do_shortcode("[fb_button]"); ?>
<!--                </div>-->
                    <?php echo evc_buttons_code(); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>