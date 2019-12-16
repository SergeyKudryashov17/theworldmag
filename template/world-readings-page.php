<?php
/*
 * Template Name: Мировые чтения
 * Template Post Type: post
 */
get_header(); ?>

    <section>
        <div class="container-fluid">
            <?php
                $args = array(
                    'post_type'=>'world_readings'
                );
                $query = query_posts($args);
                foreach ($query as $value){
                    setup_postdata($value);
                    $img = get_field('wrp_image', $value->ID);
                    $title = get_the_title($value->ID);
                    $description = get_field('desc', $value->ID);
                    $photo_array = array();
                    $images = get_field('photos', $value->ID);

                    echo '
                        <div class="headerContent" style="background: url('.$img.'); background-size: cover; background-position: center;">
                            <h1>'.$title.'</h1>
                            <p class="headText">
                                '.$description.'
                            </p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="contentWorldRead">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                    ';
                    the_content();
                    echo '
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="imageCollection" id="img">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="fotoSlider-wrp">
                    
                    ';
                    $i = 0;
                    foreach ($images as $image){
                        echo '
                            <div class="col-md-3 col-sm-6 col-xs-12 no-padding">
                                <div class="imageItem">
                                    <a href="'.$image['url'].'">
                                         <img class="img-responsive" src="'.$image['sizes']['thumbnail'].'" alt="">
                                    </a>
                                </div>
                            </div>
                        ';
                    }
                    echo '
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    ';
                }
            ?>
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
        document.getElementById('img').onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {index: link, event: event},
                links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
    </script>

<?php get_footer(); ?>