<?php

// author ivan@ivan.pw
// *************************************

//define(‘WP_DEBUG’, true);

add_image_size('list_preview', 400, 600, false);

add_action('widgets_init', 'vox_widgets_init');

add_theme_support('post-thumbnails');

add_action('wpcf7_submit', 'action_wpcf7_submit', 10, 2);

add_action('after_setup_theme', function () {
    register_nav_menus([
        'header_menu' => 'Меню в шапке',
        'footer_menu' => 'Меню в подвале',
        'footer_menu_2' => 'Меню в подвале 2',
        'footer_menu_3' => 'Меню в подвале 3',
    ]);
});

function misha_my_load_more_scripts()
{
    global $wp_query;

    // In most cases it is already included on the page and this line can be removed
    wp_enqueue_script('jquery');

    // register our main script but do not enqueue it yet
    wp_register_script('main', get_template_directory_uri() . '/dist/main.js', ['jquery']);

    // now the most interesting part
    // we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
    // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
    wp_localize_script('main', 'misha_loadmore_params', [
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        'posts' => json_encode($wp_query->query_vars), // everything about your loop is here
        'current_page' => get_query_var('paged') ? get_query_var('paged') : 1,
        'max_page' => $wp_query->max_num_pages,
    ]);

    // var_dump(json_encode($wp_query->query_vars));

    wp_enqueue_script('main');
}

add_action('wp_enqueue_scripts', 'misha_my_load_more_scripts');

function misha_loadmore_ajax_handler()
{
    // prepare our arguments for the query
    $args = json_decode(stripslashes($_POST['query']), true);
    $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
    $args['post_status'] = 'publish';

    // it is always better to use WP_Query but not here
    query_posts($args);

    if (have_posts()):

        // run the loop
        while (have_posts()): the_post();

    // look into your theme code how the posts are inserted, but you can use your own HTML of course
    // do you remember? - my example is adapted for Twenty Seventeen theme
    echo '
      <div class="col-12 col-md-4 mb-4">
      <div class="blog-list__item"><div class="image" style="background: url(' . get_the_post_thumbnail_url($post, [400, 300]) . ') no-repeat 50% 50% / cover;"></div>
      <div class="bottom">' . get_the_title() . '
      <a href="' . get_post_permalink() . '" class="more">Подробнее</a>
      </div>
      </div>   
      </div>';

    // for the test purposes comment the line above and uncomment the below one
    // the_title();

    endwhile;

    endif;
    die; // here we exit the script and even no wp_reset_query() required!
}

add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}