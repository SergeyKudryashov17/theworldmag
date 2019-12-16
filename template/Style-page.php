<?php
/**
 * Template Name: Стиль
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
        <?php
        $args = array(
            'post_type' => 'style'
        );
        $posts = query_posts( $args );
        $i = 0;
        foreach( $posts as $post ){
            $i++;
            if(($i == 1) || (($i - 1) % 3 == 0)){
                echo '<div class="row">';
            }
            if(($i == 1) || ((($i-1) % 3) == 0)){
                echo '
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <a href="'.get_permalink($post->ID).'" class="newsItem news-first">
                                <div class="news-picture">
                                    <img src="'.get_field('image_mini').'" alt="">
                                    <span class="headingNews">Стиль</span>
                                    <span class="captionArticle" style="color:'.get_field('color_headline', $post->ID).'">'.$post->post_title.'</span>
                                </div>
                                <p class="news-text">
                                    '.get_field('desc_news').'
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
                                    <img src="'.get_field('image_mini').'" alt="">
                                    <span class="headingNews">Стиль</span>
                                    <span class="captionArticle" style="color:'.get_field('color_headline', $post->ID).'">'.$post->post_title.'</span>
                                </div>
                                <p class="news-text">
                                    '.get_field('desc_news').'
                                </p>
                            </a>
                        </div>
                    </div>
                    ';
            }
            else if(($i % 3) != 0){
                echo '
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <a href="'.get_permalink($post->ID).'" class="newsItem">
                                <div class="news-picture">
                                    <img src="'.get_field('image_mini').'" alt="">
                                    <span class="headingNews">Стиль</span>
                                    <span class="captionArticle" style="color:'.get_field('color_headline', $post->ID).'">'.$post->post_title.'</span>
                                </div>
                                <p class="news-text">
                                    '.get_field('desc_news').'
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
