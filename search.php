<?php get_header(); ?>

<section class="search_result">
    <div class="publicContent">
        <div class="container">
            <h1>Результаты поиска по запросу: "<?php echo $_GET['s'];?>"</h1>
            <ul>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                    <p><?php the_excerpt(); ?></p>
                </li>
            <?php endwhile; else: ?>
            </ul>
                <h3>Поиск не дал результатов.</h3>
            <?php endif;?>
        </div>
    </div>
</section>

<?php get_footer(); ?>