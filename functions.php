<?php
//Функция подключения стилей и скриптов
function artrange_scripts_styles(){
    //Регистрируем стили
    wp_register_style( 'style', get_template_directory_uri() . '/css/style.css', array(), null, 'screen');
    wp_register_style( 'media-style', get_template_directory_uri() . '/css/media.css', array(), null, 'screen');
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), null, 'screen');
    wp_register_style( 'font-awesome_min', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css', array(), null, 'screen');
    wp_register_style( 'slick_css', get_template_directory_uri() . '/assets/slick/slick.css', array(), null, 'screen');
    wp_register_style( 'slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css', array(), null, 'screen');
    wp_register_style( 'jQueryUI_style', get_template_directory_uri() . '/assets/jQueryUI/jquery-ui.min.css', array(), null, 'screen');
    wp_register_style( 'blueimp-gallery_style', get_template_directory_uri() . '/assets/Gallery-master/css/blueimp-gallery.min.css', array(), null, 'screen');

    //Подключаем стили
    wp_enqueue_style( 'bootstrap');
    wp_enqueue_style( 'font-awesome_min');
    wp_enqueue_style( 'slick_css');
    wp_enqueue_style( 'slick-theme');
    wp_enqueue_style( 'jQueryUI_style');
    wp_enqueue_style( 'style');
    wp_enqueue_style( 'media-style');
    wp_enqueue_style( 'blueimp-gallery_style');

    //Регистрируем скриты
    wp_register_script( 'jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), null, true);
    wp_register_script( 'jQuery-migrate', '//code.jquery.com/jquery-migrate-1.2.1.min.js', array(), null, true);
    wp_register_script( 'jQueryUI', get_template_directory_uri() . '/assets/jQueryUI/jquery-ui.min.js', array(), null, true);
    wp_register_script( 'slick_js', get_template_directory_uri() . '/assets/slick/slick.min.js', array(), null, true);
    wp_register_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.js', array(), null, true);
    wp_register_script( 'script', get_template_directory_uri() . '/js/script.js', array(), null, true);
    wp_register_script( 'blueimp-gallery_script', get_template_directory_uri() . '/assets/Gallery-master/js/blueimp-gallery.min.js', array(), null, true);
    //Подключаем скрипты
    wp_enqueue_script( 'jQuery');
    wp_enqueue_script( 'jQuery-migrate');
    wp_enqueue_script( 'jQueryUI');
    wp_enqueue_script( 'slick_js');
    wp_enqueue_script( 'bootstrap_js');
    wp_enqueue_script( 'script');
    wp_enqueue_script( 'blueimp-gallery_script');
}
add_action( 'wp_enqueue_scripts', 'artrange_scripts_styles', 1 );

function add_open_grath_tags(){
    $id = get_the_ID();
    $post_type = get_post_type($id);

    if ($post_type == 'prose_life')
        echo '<meta property="og:image" content="' .get_field('wrp_image', $id). '"/>';

    if (($post_type == 'news') || ($post_type == 'beautys') || ($post_type == 'style'))
        echo '<meta property="og:image" content="'.get_field('image_big', $id). '"/>';

    if ($post_type == 'post')
        echo '<meta property="og:image" content="' .get_field('wrp_pict_article', $id). '"/>';

    if ($post_type == 'galleries')
        echo '<meta property="og:image" content="' .get_field('wrp_gallery', $id). '"/>';

}
add_action( 'wp_head', 'add_open_grath_tags');

add_image_size( 'size-club', 350, 450 );
?>