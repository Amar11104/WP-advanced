<?php get_header(); ?>

<div id="content">
    <div id="inner_container">
        <div class="img_container">
                <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg">
        </div>

        <div class="img_container">
                <img src="<?php echo get_template_directory_uri(); ?>/images/5.avif">
        </div> 
        <div class="img_container">
                <img src="<?php echo get_template_directory_uri(); ?>/images/r.avif">
        </div>

        <div id="overlay">
            <div id="left_buton" class="overlay_button" onclick="onLeftButton()"></div>
            <div id="right_buton" class="overlay_button" onclick="onRighttButton()"></div>
        </div>
    </div>
</div>

        <div style="text-align: center;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>

        </div>




<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
        <section class="hero">
            Hero
        </section>
        <section class="services">
            <h2>Services</h2>
            <div class="container">
                <div class="services-item">
                    <?php
                    if(is_active_sidebar('services-1')){
                        dynamic_sidebar('services-1');
                    }
                    ?>

                </div>
                <section class="services">
            <h2>Services</h2>
            <div class="container">
                <div class="services-item">
                    <?php
                    if(is_active_sidebar('services-3')){
                        dynamic_sidebar('services-3');
                    }
                    ?>

                </div>
            </div>
        </section>
        <section class="home-blog">
            <h2>Latest News</h2>
            <div class="container">
                <?php
                $args = arrays(
                    'post-type' => 'post',
                    'posts_per_page' => 5,
                    'category_in' => array(9,10,15),
                    'category__not_in' => array(1)
                );
                $postlist = new WP_Query($args);
                if($postlist -> have_posts()):
                    while($postlist -> have_posts()): $postlist -> the_posts()
                    get_template_part('parts/content', 'latest-news');
                endwhile;
                wp_reset_postdata();
            else:?>
            <p>Nothing yet to be displayed</p>
            <?php endif; ?>    

            </div>
        </section>
    </main>
    </div>

</div>

<?php get_footer(); ?>