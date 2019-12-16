<?php
/**
 * Template Name: Проза жизни
 */
get_header();
?>

<section class="">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <h2 class="headline">Проза жизни</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <?php
        $args = array(
            'post_type' => 'prose_life',
            'posts_per_page' => '-1'
        );
        $posts = query_posts( $args );
        $i = 0;
        foreach( $posts as $post ){
            $id = get_the_ID($post);
            $color = 'color: '.get_field('color_headline', $id).' !important;';
            $i++;
            if(($i == 1) || ((($i-1) % 3) == 0)){
                echo '
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <a href="'.get_permalink($post->ID).'" class="newsItem news-first">
                                <div class="news-picture">
                                    <img src="'.get_field('mini_image').'" alt="">
                                    <span class="headingNews">Проза жизни</span>
                                    <span class="captionArticle" style="'.$color.'">'.$post->post_title.'</span>
                                </div>
                                <p class="news-text">
                                    '.get_field('desc').'
                                </p>
                            </a>
                        </div>
                    ';
            }
            else if(($i % 3) == 0){
                echo '
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <a href="'.get_permalink($post->ID).'" class="newsItem news-end">
                                <div class="news-picture">
                                    <img src="'.get_field('mini_image').'" alt="">
                                    <span class="headingNews">Проза жизни</span>
                                    <span class="captionArticle" style="'.$color.'">'.$post->post_title.'</span>
                                </div>
                                <p class="news-text">
                                    '.get_field('desc').'
                                </p>
                            </a>
                        </div>
                    ';
            }
            else if(($i % 3) != 0){
                echo '
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <a href="'.get_permalink($post->ID).'" class="newsItem">
                                <div class="news-picture">
                                    <img src="'.get_field('mini_image').'" alt="">
                                    <span class="headingNews">Проза жизни</span>
                                    <span class="captionArticle" style="'.$color.'">'.$post->post_title.'</span>
                                </div>
                                <p class="news-text">
                                    '.get_field('desc').'
                                </p>
                            </a>
                        </div>
                    ';
            }
        }
        ?>
    </div>
</section>

<?php get_footer(); ?>
