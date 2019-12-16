<?php
/*
    Template Name: Кредо
 */
?>
<?php get_header(); ?>

<section class="credoList">
    <div class="container-fluid">
        <?php
            $args = array(
                'post_type' => 'credo',
                'posts_per_page' => '-1'
            );
            $posts = query_posts( $args );
            $i = 0;
            foreach( $posts as $post ){
                $i++;
                if(($i % 2) != 0){
                    echo '
                        <a href="'.get_permalink($post->ID).'" class="credoWrp">
                            <div class="col-md-6 col-sm-6 col-xs-5">
                                <div class="row">
                                    <div class="credo">
                                        <span class="authorArticle">Кредо</span>
                                        <span class="issueAuthorName">'.$post->post_title.'</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-7">
                                <div class="row">
                                    <div class="avatarCredo">
                                        <img src="'.get_field('photo_credo').'" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    ';
                }else{
                    echo '
                        <a href="'.get_permalink($post->ID).'" class="credoWrp">
                            <div class="col-md-6 col-sm-6 col-xs-7">
                                <div class="row">
                                    <div class="avatarCredo">
                                        <img src="'.get_field('photo_credo').'" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-5">
                                <div class="row">
                                    <div class="credo">
                                        <span class="authorArticle">Кредо</span>
                                        <span class="issueAuthorName">'.$post->post_title.'</span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    ';
                }
            }
        ?>
    </div>
</section>

<?php get_footer(); ?>
