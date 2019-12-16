<?php
/*
 * Template Name: Статья "Проза Жизни"
 * Template Post Type: prose_life
 */
get_header();
?>


    <section>
        <div class="container-fluid">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="publicHead">
                        <?php
                            $color = get_field('color_headline');
                            $color = 'color: '.$color.' !important';
                        ?>
                        <img class="img-responsive" src="<?php echo get_field('wrp_image')?>" alt="">
                        <h1 style="<?php echo $color ?>"><?php the_title() ?></h1>
                        <span class="promoArticle" style="<?php echo $color ?>">
                            <?php echo get_field('desc') ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="publicContent">
                        <?php
                        while ( have_posts() ) : the_post();
                            the_content();
                        endwhile;Ј
                        ?>
                        <div class="soc-share">
<!--                            <iframe src="https://www.facebook.com/plugins/share_button.php?href=http://www.theworldmag.com/article/24?lang=ru%2F&amp;layout=button_count&amp;size=small&amp;mobile_iframe=false&amp;width=136&amp;height=20&amp;appId" width="136" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe>-->
                            <?php echo evc_buttons_code(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>