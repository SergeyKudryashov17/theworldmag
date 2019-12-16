<?php if ( have_comments() ) : ?>
<h3 id="comments"><?php comments_number('Комментариев нет', '1 комментарий', '% комментариев' );?> к записи &#8220;<?php the_title(); ?>&#8221;</h3>
<ol class="commentlist">
    <?php wp_list_comments(); ?>
</ol>
<div class="navigation">
    <div class="alignleft"><?php previous_comments_link() ?></div>
    <div class="alignright"><?php next_comments_link() ?></div>
</div>

<h3>Добавить комментарий</h3>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" id="commentform" method="post">
    <label>Имя (обязательно)</label>
    <input type="text" name="author" id="author" required>
    <label>E-mail (обязательно)</label>
    <input type="text" name="email" id="email" required>
    <label>Текст комментария</label>
    <textarea name="comment" id="comment" cols="30" rows="10" required></textarea>
    <input type="submit" value="Добавить" />
    <?php comment_id_fields();
    do_action('comment_form', $post->ID); ?>
</form>