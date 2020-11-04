<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo('charset');?>" />
    <title><?php wp_title();?>
    </title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/vox-fav.png" type="image/png">

    <?php if (is_singular() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
}?>

    <?php wp_head()?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/main.css?<?=time();?>">

</head>

<body <?php body_class();?>>


    <header class="header">
        <div class="container">
            <nav class="row">
                <div class="col-auto">
                    <a class="gohome btn btn-default" href="/"> </a>
                </div>
                <div class="col d-none d-md-flex">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'header_menu',
                        'depth' => 3,
                        'container' => false,
                        'menu_class' => 'navbar-nav',
                    ]);
                    ?>
                </div>


                <div class="mobile-menu closed">
                    <a href="#" class="close"></a>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'header_menu',
                        'depth' => 3,
                        'container' => false,
                        'menu_class' => 'navbar-nav',
                    ]);
                    ?>
                </div>

                <div class="col d-flex d-md-none justify-content-end">
                    <a class="show-menu btn btn-default" href="#"> </a>
                </div>
                <div class="col-auto d-none d-md-flex align-items-center ">
                    <a href="/process#support" class="btn btn-default mt-3 mt-md-0">Поддержать инициативу</a>
                </div>
            </nav>
        </div>

        <?php
if (is_front_page()) {
                        ?>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>ГОРОД — ЭТО ЕГО <br />ЖИТЕЛИ</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 d-none d-mb-flex text-center">
                    <p>То есть основная идея фото как мне кажется, <br class="d-none d-md-block" />
                        должна быть про то, что город — это его жители, он состоит из жителей и ими живёт.</p>
                </div>

                <div class="col-12 d-flex d-md-none">
                    <a href="/process#support" class="btn btn-default mt-3 mt-md-0 w-100">Поддержать инициативу</a>
                </div>
            </div>
        </div>
        <?php
                    }
?>
        </div>


    </header>