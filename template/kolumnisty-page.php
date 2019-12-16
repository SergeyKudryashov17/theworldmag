<?php
/*
    Template Name: Колумнисты
 */
?>
<?php get_header(); ?>

    <section class="ListColumnist">
        <div class="container-fluid">
            <?php
            $args = array(
                'taxonomy' => 'author_columnist_taxo',
                'hide_empty' => false,
            );
            $terms = get_terms( $args );
            $i = 0;
            foreach( $terms as $term ){
                $i++;
                if(($i%2) == 0){
                    echo '
                        <a class="issueAuthor" href="'.get_term_link($term->term_id).'">
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="avatarAuthor">
                                    <img src="'.get_field('photo_author', 'author_columnist_taxo_'.$term->term_id).'" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-6 col-xs-6">
                                <div class="row">
                                    <span class="authorArticle">Колумнист</span>
                                    <span class="issueAuthorName">'.$term->name.'</span>
                                    <span class="issueAuthorAbout issueAuthorAboutEven">'.$term->description.'</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    ';
                }else{
                    echo '
                        <a class="issueAuthor" href="'.get_term_link($term->term_id).'">
                            <div class="col-md-8 col-sm-6 col-xs-6">
                                <div class="row">
                                    <span class="authorArticle">Колумнисты</span>
                                    <span class="issueAuthorName">'.$term->name.'</span>
                                    <span class="issueAuthorAbout">'.$term->description.'</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="avatarAuthor">
                                    <img src="'.get_field('photo_author', 'author_columnist_taxo_'.$term->term_id).'" alt="">
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

