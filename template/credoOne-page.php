<?php
/**
 * Template Name: Кредо-герой
 * Template Post Type: credo
 */
get_header();
?>

    <section class="credoList">
        <div class="container-fluid">
            <?php
                $args = array(
                    'post_type' => 'credo'
                );
                $posts = query_posts( $args );
            ?>
            <div href="#" class="credoWrp">
                <div class="col-md-6 col-sm-6 col-xs-5">
                    <div class="row">
                        <div class="credo">
                            <span class="authorArticle">Кредо</span>
                            <span class="issueAuthorName"><?php echo $post->post_title; ?></span>
                            <span class="aboutCredo"><?php echo get_field('desc_credo'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-7">
                    <div class="row">
                        <div class="avatarCredo">
                            <img src="<?php echo get_field('photo_credo'); ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="contentCredo">
                    <?php
                        echo get_field('content_credo');
                    ?>
                    <div class="soc-share">
                        <?php echo do_shortcode("[fb_button]"); ?>
                        <?php echo evc_buttons_code(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
