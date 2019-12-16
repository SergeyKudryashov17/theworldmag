<?php
/**
 * Template Name: Новости
 */
get_header();
?>

<section class="">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <h2 class="headline"><?php the_title(); ?></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <?php echo do_shortcode( '[ajax_load_more post_type="news" posts_per_page="6"]' ); ?>
        <?php echo evc_buttons_code(); ?>
        <div class="clearfix"></div>
    </div>
</section>

<?php get_footer(); ?>
