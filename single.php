<?php get_header(); ?>
    <section>
        <div class="container-fluid">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="publicHead" style="background: url(<?php echo get_field('wrp_pict_article'); ?>); background-size: cover;">
                        <?php
                            $pos = get_field('position_headline');
                            if($pos == 'right'){
                                $align_head = 'text-align: right;';
                                $align_preview = 'float: right; text-align: right;';
                            }else{
                                $align_head = '';
                                $align_preview = '';
                            }
                        ?>
                        <h1 style="color: <?php echo get_field('color_headline'); ?> !important; <?php echo $align_head; ?>"><?php the_title() ?></h1>
                        <span class="promoArticle" style="color: <?php echo get_field('color_headline'); ?> !important; <?php echo $align_preview; ?>">
                            <?php echo get_field('desc_article') ?>
                        </span>
                        <span class="headingArticle">
                            <?php
                                $id = get_the_ID();
                                $category = get_the_category($id);
                                echo $category[0]->cat_name;
                            ?>
                        </span>
                        <span class="authorArticle">
                            <?php

                                if($name = get_the_terms( $id, 'author_columnist_taxo' )){
                                    foreach( $name as $cur_term ){
                                        echo $cur_term->name;
                                    }
                                }
                                if($name = get_the_terms( $id, 'author_taxo' )){
                                    foreach( $name as $cur_term ){
                                        echo $cur_term->name;
                                    }
                                }
                                wp_reset_query();
                            ?>
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
                            endwhile;
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="previewList">
                        <?php echo do_shortcode( '[ajax_load_more post_type="post" posts_per_page="6"]' ); ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>