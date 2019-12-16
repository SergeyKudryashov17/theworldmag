<?php
/**
 *
 */
get_header();
?>
    <section class="ColumnistOne">
        <?php
            $term_tax = get_queried_object();
            $term_tax_id = $term_tax->term_id;
            $args = array(
                'taxonomy' => 'author_columnist_taxo',
                'hide_empty' => false,
                'include' => $term_tax_id
            );
            $terms = get_terms( $args );
            foreach( $terms as $term ){
                $url_img = get_field('photo_author', 'author_columnist_taxo_'.$term->term_id);
                $term_name = $term->name;
                $term_desc = $term->description;
            }
        ?>
        <div class="issueAuthor" href="#">
            <div class="col-md-8 col-sm-6 col-xs-6">
                <div class="row">
                    <span class="authorArticle">Колумнисты</span>
                    <span class="issueAuthorName"><?php echo $term_name; ?></span>
                    <span class="issueAuthorAbout"><?php echo $term_desc; ?></span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="avatarAuthor">
                    <img src="<?php echo $url_img; ?>" alt="">
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="issueArticleList">
                    <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'author_columnist_taxo' => $term_name,
                        'posts_per_page' => '-1',
                        'orderby'     => 'date',
	                    'order'       => 'DESC'
                    );
                    $posts = get_posts($args);
                    $i = 0;
                    foreach( $posts as $pst ) {
                        setup_postdata($pst);
                        $i++;
                        $categories = get_the_category($pst->ID);
                        $pst_name = $pst->post_title;
                        foreach ($categories as $category) {
                            $category_name = $category->name;
                        }
                        if ($i == 1) {
                            echo '
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="row">
                                        <a class="issueArticleItem-big" href="' . get_permalink($pst->ID) . '">
                                            <img class="img-responsive" src="' . get_field('picture_article',$pst->ID) . '" alt="">
                                            <span class="headingArticle">' . $category_name . '</span>
                                            <span class="authorArticle">' . $term_name . '</span>
                                            <span class="captionArticle" style="color:'.get_field('color_headline', $pst->ID).'">' . $pst->post_title . '</span>
                                        </a>
                                    </div>
                                </div>
                            ';
                        } else if (($i % 5) == 0) {
                            echo '
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="row">
                                        <a class="issueArticleItem-big" href="' . get_permalink($pst->ID) . '">
                                            <img class="img-responsive" src="' . get_field('picture_article',$pst->ID) . '" alt="">
                                            <span class="headingArticle">' . $category_name . '</span>
                                            <span class="authorArticle">' . $term_name . '</span>
                                            <span class="captionArticle" style="color:'.get_field('color_headline', $pst->ID).'">' . $pst->post_title . '</span>
                                        </a>
                                    </div>
                                </div>
                            ';
                        } else if (($i % 9) == 0) {
                            echo '
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="row">
                                        <a class="issueArticleItem-big" href="' . get_permalink($pst->ID) . '">
                                            <img class="img-responsive" src="' . get_field('picture_article',$pst->ID) . '" alt="">
                                            <span class="headingArticle">' . $category_name . '</span>
                                            <span class="authorArticle">' . $term_name . '</span>
                                            <span class="captionArticle" style="color:'.get_field('color_headline', $pst->ID).'">' . $pst->post_title . '</span>
                                        </a>
                                    </div>
                                </div>
                            ';
                        } else {
                            echo '
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="row">
                                        <a class="issueArticleItem" href="' . get_permalink($pst->ID) . '">
                                            <img class="img-responsive" src="' . get_field('small_picture_article',$pst->ID) . '" alt="">
                                            <span class="headingArticle">' . $category_name . '</span>
                                            <span class="authorArticle">' . $term_name . '</span>
                                            <span class="captionArticle">' . $pst->post_title . '</span>
                                        </a>
                                    </div>
                                </div>
                            ';
                        }
                    }
                    wp_reset_postdata();
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
