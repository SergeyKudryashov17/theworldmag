<?php get_header(); ?>

<section class="txt-area">
    <div class="container-fluid">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <h1><?php the_title() ?></h1>
                <?php
                while( have_posts() ) : the_post();
                    the_content();
                endwhile;
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

