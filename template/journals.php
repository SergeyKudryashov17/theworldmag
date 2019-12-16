<?php
/*
 * Template Name: Выпуски журнала
 */
get_header();
?>
<section>
    <h2 class="headline"><?php the_title(); ?></h2>
</section>
<section>
    <div class="container-fluid">
        <?php
        $args = array(
            'post_type'=>'editions',
            'orderby'=>'ASC'
        );
        $journals = query_posts($args);
        foreach ($journals as $journal){
            echo '
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="'.get_field('pdf', $journal->ID).'">
                        <img src="'.get_field('wrp_picture', $journal->ID).'" alt="">
                        <div class="name_journal">'.get_the_title($journal->ID).'</div>
                    </a>
                </div>
            ';
        }
        ?>
    </div>
</section>

<?php get_footer(); ?>

