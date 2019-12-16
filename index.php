<?php
/**
 * Template Name: Главная
 */

get_header(); ?>

<section id="ads">
	<a href="<?php echo get_field('link_top_banner','2'); ?>" target="_blank">
		<img src="<?php echo get_field('ads_banner_header'); ?>" alt="">
	</a>
</section>
<section>
	<input type="hidden" name="time_s" id="time_s" value="<?php echo get_field('time_s'); ?>">
	<input type="hidden" name="day_s" id="day_s" value="<?php echo get_field('date_s'); ?>">
	<input type="hidden" name="month_s" id="month_s" value="<?php echo get_field('month_s'); ?>">
	<input type="hidden" name="year_s" id="year_s" value="<?php echo get_field('year_s'); ?>">
	<div class="gridPublic">
		<div class="container-fluid">
			<?php
                error_reporting(0);

				$array_title_1 = array();
				$array_img_1 = array();
				$array_category_1 = array();
				$array_author_1 = array();
				$array_desc_1 = array();
                $array_link_1 = array();
				$array_color_1 = array();

				$args_1 = array(
					'post_type' => 'post',
					'orderby'=>'rand',
					'showposts'=>'4'
				);

				$i = 0;
				$posts_1 = query_posts( $args_1 );
				foreach ($posts_1 as $post_1){
					$array_title_1[$i] = get_the_title($post_1->ID);
                    $array_link_1[$i] = get_permalink($post_1->ID);
					if($terms = get_the_terms( $post_1->ID, 'author_columnist_taxo' ))
					    foreach( $terms as $term ) $array_author_1[$i] = $term->name;

                    if($terms = get_the_terms( $post_1->ID, 'author_taxo' ))
                        foreach( $terms as $term ) $array_author_1[$i] = $term->name;

					if($i == 0) $array_img_1[$i] = get_field('big_picture_article', $post_1->ID);
					else $array_img_1[$i] = get_field('picture_article_420', $post_1->ID);
					$categories = get_the_category($post_1->ID);
					$array_category_1[$i] = $categories[0]->cat_name;
					$array_desc_1[$i] = get_field('desc_article', $post_1->ID);
					$array_color_1[$i] = get_field('color_headline', $post_1->ID);
					$array_color_1[$i] = 'color: '.$array_color_1[$i].' !important;';

					$i++;
				}
				wp_reset_query();
			?>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="row">
                    <a class="banner_link" href="<?php echo $array_link_1[0] ?>">
                        <div class="promoItem-big">
                            <img class="img-responsive" src="<?php echo $array_img_1[0]; ?>" alt="">
                            <span class="headingArticle"><?php echo $array_category_1[0]; ?></span>
                            <span class="authorArticle"><?php echo  $array_author_1[0]; ?></span>
                            <span class="captionArticle" style="<?php echo $array_color_1[0] ?>"><?php echo $array_title_1[0]; ?></span>
                            <span class="promoArticle" style="<?php echo $array_color_1[0] ?>">
                                <?php echo $array_desc_1[0]; ?>
                            </span>
                        </div>
                    </a>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="promoItem-small" id="articleSlider">
								<ul class="itemSlider">
                                    <li>
                                        <a class="banner_link" href="<?php echo $array_link_1[1] ?>">
										    <img class="img-responsive" src="<?php echo $array_img_1[1]; ?>" alt="">
										    <span class="headingArticle"><?php echo $array_category_1[1]; ?></span>
										    <span class="authorArticle"><?php echo $array_author_1[1]; ?></span>
										    <span class="captionArticle" style="<?php echo $array_color_1[1] ?>"><?php echo $array_title_1[1]; ?></span>
                                        </a>
                                    </li>
									<li>
                                        <a class="banner_link" href="<?php echo $array_link_1[2] ?>">
										    <img class="img-responsive" src="<?php echo $array_img_1[2]; ?>" alt="">
										    <span class="headingArticle"><?php echo $array_category_1[2]; ?></span>
										    <span class="authorArticle"><?php echo $array_author_1[2]; ?></span>
										    <span class="captionArticle" style="<?php echo $array_color_1[2] ?>"><?php echo $array_title_1[2]; ?></span>
                                        </a>
                                    </li>
									<li>
                                        <a class="banner_link" href="<?php echo $array_link_1[3] ?>">
										    <img class="img-responsive" src="<?php echo $array_img_1[3]; ?>" alt="">
										    <span class="headingArticle"><?php echo $array_category_1[3]; ?></span>
										    <span class="authorArticle"><?php echo $array_author_1[3]; ?></span>
										    <span class="captionArticle" style="<?php echo $array_color_1[3] ?>"><?php echo $array_title_1[3]; ?></span>
                                        </a>
                                    </li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="row">
							<a href="<?php echo get_field('link_verical_banner','2') ?>" target="_blank">
								<div class="promoItem-vertical" style="background: url(<?php echo get_field('vertical_banner');?>); background-size: cover;">
									<span class="captionArticle"><?php echo get_field('txt_vertical_banner') ?></span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-9">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="row">
									<div class="promoItem-mini">
										<img src="<?php echo get_field('goriz_banner_1'); ?>" alt="">
										<span class="captionArticle"><?php echo get_field('h_txt_goriz_1'); ?></span>
										<span class="promoArticle"><?php echo get_field('txt_goriz_1'); ?></span>
										<ol class="promoItemListDate">
											<li>
												<span class="promoListDateNumber" id="day"></span>
												<span class="promoListDateUnit">дней</span>
											</li>
											<li>
												<span class="promoListDateNumber" id="hour"></span>
												<span class="promoListDateUnit">часов</span>
											</li>
											<li>
												<span class="promoListDateNumber" id="min"></span>
												<span class="promoListDateUnit">минут</span>
											</li>
											<li>
												<span class="promoListDateNumber" id="sec"></span>
												<span class="promoListDateUnit">секунд</span>
											</li>
										</ol>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="row">
									<a href="<?php echo get_field('link_goriz_banner_2','2'); ?>" target="_blank">
										<div class="promoItem-mini" style="background: url(<?php echo get_field('gorizont_banner_2') ?>); background-size: cover;"></div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container-fluid">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="row">
<!--                <a href="#" class="bannerHorizontal"></a>-->
				<a href="http://theworldmag.com/vybrat-podpisku/" class="bannerHorizontal">
					<img src="<?php echo get_field('slim_gorizontal_banner') ?>" alt="">
                    <div class="headline-white">ОФОРМИТЬ ПОДПИСКУ</div>
				</a>
			</div>
		</div>
	</div>
</section>
<section id="ads">
	<a href="<?php echo get_field('link_ads_1','2'); ?>">
		<img src="<?php echo get_field('ads_banner_1'); ?>" alt="">
	</a>
</section>
<section>
	<div class="container-fluid">
        <?php
            $args_public = array(
                'post_type'=>'editions',
                'orderby'=>'ASC',
                'showposts'=>'1'
            );
            $public = query_posts($args_public);

            foreach ($public as $value){
				setup_postdata($value);
				$image = get_field('wrp_picture', $value->ID);
				$id_article = get_field('article', $value->ID);
				$date_public = get_field('date', $value->ID);
				echo '
					<div class="col-md-7 col-sm-6 col-xs-12">
						<div class="row">
							<div class="issueCoverIcoWrap">
								<a href="'.get_permalink('488').'">
									<img class="issueCoverIco" src="'.$image.'" alt="">
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-sm-6 col-xs-12">
						<div class="row">
							<span class="issueCoverDate">'.$date_public.'</span>
							<div class="issueCoverText">
				';
				the_content();
				echo'
								<a href="'.get_permalink($id_article).'" class="link-more">
									Читать далее
								</a>
							</div>
						</div>
					</div>
				';
			}
			wp_reset_query();
        ?>
	</div>
</section>
<section id="ads">
	<a href="<?php echo get_field('link_ads_2','2'); ?>" target="_blank">
		<img src="<?php echo get_field('ads_banner_2'); ?>" alt="">
	</a>
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
						'order' => 'DESC'
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
                    echo '<script>console.log('.$term->slug.')</script>';
					$args = array(
						'public_journal' => $term_info,
						'orderby'=>'rand',
						'showposts'=>'6'
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
						$color_headline = get_field('color_headline', $item->ID);
						$color_headline = 'color: '.$color_headline.' !important';

						$link = get_permalink($item->ID);

						if(($i == 0)||(($i % 4) == 0)){
							echo '
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="row">
									<a class="issueArticleItem-big" href="'.$link.'">
										<img class="img-responsive" src="'.$img_big.'" alt="">
										<span class="headingArticle">'.$category.'</span>
										<span class="authorArticle">'.$author.'</span>
										<span class="captionArticle" style="'.$color_headline.'" >'.$title.'</span>
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
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="row">
				<div class="issueBtnAllWpr">
					<a class="issueBtnAll" href="<?php echo get_permalink('496'); ?>">
						Все материалы выпуска
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container-fluid">
		<div class="col-md-12 col-sm-12">
			<div class="row">
				<div class="headline">Новости</div>
			</div>
		</div>
		<div class="container">
			<?php
			$args = array(
				'post_type' => 'news',
				'showposts'=>'6'
			);
			$posts = query_posts( $args );
			$i = 0;
			foreach( $posts as $post ){
				$i++;
				if(($i == 1) || ((($i-1) % 3) == 0)){
					echo '<div class="row">';
					echo '
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <a href="'.get_permalink($post->ID).'" class="newsItem news-first">
                                <div class="news-picture">
                                    <img src="'.get_field('image_mini').'" alt="">
                                    <span class="headingNews">Новости</span>
                                    <span class="captionArticle" style="color:'.get_field('color_headline').' !important;">'.$post->post_title.'</span>
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
                                    <span class="headingNews">Новости</span>
                                    <span class="captionArticle" style="color:'.get_field('color_headline').' !important;">'.$post->post_title.'</span>
                                </div>
                                <p class="news-text">
                                    '.get_field('desc_news').'
                                </p>
                            </a>
                        </div>
                    ';
					echo '</div>';
				}
				else if(($i % 3) != 0){
					echo '
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <a href="'.get_permalink($post->ID).'" class="newsItem">
                                <div class="news-picture">
                                    <img src="'.get_field('image_mini').'" alt="">
                                    <span class="headingNews">Новости</span>
                                    <span class="captionArticle" style="color:'.get_field('color_headline').' !important;">'.$post->post_title.'</span>
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
	</div>
</section>
<section>
	<div class="container-fluid">
		<div class="imageCollection">
			<div class="imageSlider-wrp">
                <?php
                $args_gallery = array(
                    'post_type' => 'galleries',
                    'orderby'=>'rand',
                    'showposts'=>'1'
                );
                $galleries = query_posts($args_gallery);
                $img_array = array();
                $i = 0;
                foreach ($galleries as $gallery){
                    $gall_link = get_permalink($gallery->ID);
                    $images = get_field('photos', $gallery->ID);
                    foreach ( $images as $image ) {
                        $img_array[$i] = $image['sizes']['thumbnail'];
						$i++;
                    }
                }
                for($j = 0; $j < 8; $j++){
                    echo '
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="row">
                                <div class="imageItem">
                                    <img class="img-responsive" src="'.$img_array[$j].'" alt="">
                                </div>
                            </div>
                        </div>
                    ';
                }
                wp_reset_query();
                ?>
			</div>
			<div class="clearfix"></div>
            <a href="<?php echo $gall_link; ?>">
                <div class="captionBLock">Настроение</div>
            </a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
