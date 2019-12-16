<?php
/*
 * Template Name: Оформление подписки
 */

get_header(); ?>
<section id="">
    <div class="col-md-12 col-sm-12 colxs12">
        <div class="row">
            <h2 class="headline">КУПИТЬ THE WORLD(архив)</h2>
        </div>
    </div>
</section>
<section id="product">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1 hidden-sm hidden-xs"></div>
            <div id="cover_pict"  class="col-md-10 col-sm-12 col-xs-12">
                <div class="row">
                    <?php
                    $args = array(
                        'post_type'=>'editions',
                    );
                    $journals = query_posts($args);
                    $i = 1;
                    $count_journal =  count($journals);
                    foreach ($journals as $journal): ?>
                        <div class="col-md-3 col-sm-3 col-xs-6 nopad text-center">
                            <label class="image-checkbox" data-number="<?php echo $count_journal; ?>">
                                <img class="img-responsive" width="150px"  src="<?php echo get_field('wrp_picture', $journal->ID); ?>">
                                <input type="checkbox" data-id="<?php echo $i ?>" name="image[]" value="" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                            <div class="prices">Цена: <span class="item_price">700</span>₽</div>
                        </div>
                        <?php
                        $i++;
                        $count_journal--;
                    endforeach;
                    ?>
                </div>
            </div>
            <div class="col-md-1 hidden-sm hidden-xs"></div>
        </div>
        <div class="row">
            <h2 class="headline">ОФОРМИТЬ ГОДОВУЮ ПОДПИСКУ (The World New)</h2>
            <h2 class="headline-bl">
                <i class="fa fa-check hidden"></i>
                5 новых номеров всего за 2000р
            </h2>
        </div>
        
        <div class="col-md-3 col-sm-4"></div>
        <div class="col-md-6 col-sm-4">
            <a href="http://theworldmag.com/oformit-podpisku/" id="btn-next-step" class="hidden">
                <div class="submit">
                    <button id="sub" type="submit">ДАЛЕЕ</button>
                </div>
            </a>    
        </div>
        <div class="col-md-3 col-sm-4"></div>
    </div>
</section>
<?php get_footer(); ?>