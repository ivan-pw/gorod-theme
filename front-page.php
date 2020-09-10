<?php get_header();?>
<main>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-12 text-left">
                    <h2>Наши задачи</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3 text-center">
                    <div class="front-icon" style="background: #fff url(<?php echo get_template_directory_uri(); ?>/img/i1.svg) no-repeat center center;">
                    </div>
                    <p>Вернуть город его жителям!</p>
                </div>
                <div class="col-12 col-md-3 text-center">
                    <div class="front-icon" style="background: #fff url(<?php echo get_template_directory_uri(); ?>/img/i2.svg) no-repeat center center;">
                    </div>
                    <p>Наша цель — выстроить и закрепить в законах Москвы механизмы участия жителей города в принятии городских решений</p>
                </div>
                <div class="col-12 col-md-3 text-center">
                    <div class="front-icon" style="background: #fff url(<?php echo get_template_directory_uri(); ?>/img/i3.svg) no-repeat center center;">
                    </div>
                    <p>Запустить в Москве общественный диалог по важнейшим вопросам для жизни города</p>
                </div>
                <div class="col-12 col-md-3 text-center">
                    <div class="front-icon" style="background: #fff url(<?php echo get_template_directory_uri(); ?>/img/i4.svg) no-repeat center center;">
                    </div>
                    <p>Заставить власть бережней обращаться с городом и его жителями, заставить уважать жителей</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="panel panel-v1 mr-5">
                        <div class="top">Как делать?</div>
                        <div class="bottom">Главное — это принципы включённости в процесс всех заинтересованных жителей и учёта их пожеланий, которые, как и технические аспекты, могут быть применены в любом
                            вопросе, затрагивающем интересы горожан
                            <a href="/howto" class="more">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 offset-md-4 col-md-8">
                    <div class="panel panel-v1 panel-v1__part2 ml-5">
                        <div class="top">Что делать?</div>
                        <div class="bottom">Для того, чтобы Москва развивалась и стала городом для людей, стала ближе к своим жителям, необходимо перестроить систему городского управления и внедрить соучаствующие методы в процесс принятия решений</div>
                        <a href="/todo" class="more">Подробнее</a>
                    </div>
                </div>
            </div>

            <a name="blog"></a>
            <div class="row">
                <div class="col-12 text-left">
                    <h2>Блог</h2>
                </div>
            </div>
            <div class="container">
                <div class="blog-list row">
                    <?php if (have_posts()): while (have_posts()): the_post();?>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="blog-list__item">
                            <div class="image" style="background: url(<?=get_the_post_thumbnail_url($post, [400, 300]);?>) no-repeat 50% 50% / cover;"></div>
                            <div class="bottom"><?php the_title();?>
                                <a href="<?=get_post_permalink();?>" class="more">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;endif;?>
                </div>

                <div class="row">
                    <?php
                    global $wp_query; // you can remove this line if everything works for you

                    // don't display the button if there are not enough posts
                    if ($wp_query->max_num_pages > 1) {
                        echo '
                        <div class=" col-12 col-md-4 offset-md-4">
                        <div class="btn btn-default misha_loadmore">Показать больше новостей</div>
                        </div>';
                    }
                    // you can use <a> as well
                    ?>
                </div>
            </div>
    </article>
</main>

<?php get_footer();