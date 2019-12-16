<?php
/*
 * Template Name: Статьи из выпуска
 */
get_header();
?>
<section>
    <div class="container-fluid">
        <div class="col-md-12">
            <h2 class="headline" id="art_journal_head">
                <?php the_title(); ?>
            </h2>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="issueArticleList">
                <?php
                    $args = array(
                        'taxonomy' => 'public_journal',
                        'orderby' => 'id',
                        'order' => 'DESC',
                    );
                    $terms = get_terms($args);
                    $name_term = '';
                    $exclude_id = array();
                    $term_info = '';
                    $i = 0;
                    foreach ($terms as $term){
                        $term_info = $term->slug;
                        break;
                    }

                    $args = array(
                        'public_journal' => $term_info,
                        'orderby'=>'rand',
                        'posts_per_page' => -1
                    );

                    $i = 0;
                    $query = query_posts($args);
                    foreach ($query as $item){
                        $author = '';
                        if($name = get_the_terms( $item->ID, 'author_columnist_taxo' ))
                            foreach( $name as $cur_term ) $author = $cur_term->name;

                        if($name = get_the_terms( $item->ID, 'author_taxo' ))
                            foreach( $name as $cur_term ) $author = $cur_term->name;

                        $title = get_the_title($item->ID);

                        $categories = get_the_category($item->ID);
                        $category = $categories[0]->cat_name;

                        $img = '';
                        $img_big = get_field('picture_article', $item->ID);
                        $img_small = get_field('small_picture_article', $item->ID);

                        $link = get_permalink($item->ID);

                        if(($i == 0)||(($i % 4) == 0) || (($i % 10) == 0)){
                            echo '
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="row">
                                            <a class="issueArticleItem-big" href="'.$link.'">
                                                <img class="img-responsive" src="'.$img_big.'" alt="">
                                                <span class="headingArticle">'.$category.'</span>
                                                <span class="authorArticle">'.$author.'</span>
                                                <span class="captionArticle">'.$title.'</span>
                                            </a>
                                        </div>
                                    </div>
                                ';
                        }
                        else{
                            echo '
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="row">
                                            <a class="issueArticleItem" href="'.$link.'">
                                                <img class="img-responsive" src="'.$img_small.'" alt="">
                                                <span class="headingArticle">'.$category.'</span>
                                                <span class="authorArticle">'.$author.'</span>
                                                <span class="captionArticle">'.$title.'</span>
                                            </a>
                                        </div>
                                    </div>
                                ';
                        }
                        $i++;
                    }
                    wp_reset_query();
                ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
