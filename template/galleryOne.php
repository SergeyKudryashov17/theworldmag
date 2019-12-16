<?php
/**
 * Template Name: Галерея
 * Template Post Type: galleries
 */
get_header();
?>
    <section class="galleryOne">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="headerGallery">
                    <span class="authorArticle">Галерея</span>
                    <h1><?php single_post_title(); ?></h1>
                </div>
                <div class="textBlockGallery">
                    <?php the_field('text-block'); ?>
                </div>
            </div>
            <div class="imageCollection" id="gallary_img">
                <?php
                $images = get_field('photos');
                $caption = get_field('caption_photo');
                $i = 0;
                foreach ( $images as $image ) {
                    echo '
                        <a href="'.$image['url'].'" title="'.$caption[$i]['caption'].'">
                            <div class="col-md-3 col-sm-4 col-xs-12">
                                <div class="row">
                                    <div class="imageItem">
                                        <img class="img-responsive" src="'.$image['sizes']['thumbnail'].'" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
                    $i++;
                }
                ?>
            </div>
            <div class="clearfix"></div>
            <div class="soc-share">
                <?php echo do_shortcode("[fb_button]"); ?>
                <?php echo evc_buttons_code(); ?>
            </div>
        </div>
    </section>

    <div id="blueimp-gallery" class="blueimp-gallery">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
    </div>

    <script>
        document.getElementById('gallary_img').onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {index: link, event: event},
                links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
    </script>

<?php get_footer(); ?>
