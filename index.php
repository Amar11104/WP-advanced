<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <h1>Blog</h1>
            <div class="container">
                <div class="blog-item">
                    <?php
                    if(have_posts()):
                    while(have_posts()): the_post();
                    get_template_part('parts/content');
                    endwhile;
                    ?>
                    <div class="wpdevs-pagination">
                        <div class="pages new">
                            <?php previous posts_link("<< Newer posts"); ?>
                        <div class="pages old">
                            <?php previous_posts_link(">> Older posts"); ?>
                        </div>
                        </div>
                        <?php
                        else:
                            ?>
                        <p>Nothing yet to be displayed</p>
                        <?php endif; ?>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </main>
    </div>


</div>
<h1>This is our new theme</h1>
<?php get_footer(); ?>