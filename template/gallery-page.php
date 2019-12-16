<?php
/*
    Template Name: Галереи
 */
?>
<?php get_header(); ?>

    <section class="galleryWrp">
    <div class="container-fluid">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h1>Галереи</h1>
        </div>
        <div class="clearfix"></div>
        <?php
            $args = array(
                'post_type' => 'galleries',
                'posts_per_page' => '-1'
            );
            $posts = query_posts( $args );
            $i = 0;
            foreach( $posts as $post ){
                $i++;
                if(($i % 2) != 0){
                    echo '
                        <a href="'.get_permalink($post->ID).'" class="galleryItem">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="gallery-img">
                                        <img src="'.get_field('wrp_gallery').'" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 nameGalleryWrp">
                                <div class="row">
                                    <span class="nameGallery">'.$post->post_title.'</span>
                                    <span class="galleryDate">'.get_field('date_public').'</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    ';
                }else{
                    echo '
                        <a href="'.get_permalink($post->ID).'" class="galleryItem leftGalleryPos">
                            <div class="col-md-6 col-sm-6 col-xs-12 nameGalleryWrp">
                                <div class="row">
                                    <span class="nameGallery">'.$post->post_title.'</span>
                                    <span class="galleryDate">'.get_field('date_public').'</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="gallery-img">
                                        <img src="'.get_field('wrp_gallery').'" alt="">
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
