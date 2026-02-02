<?php get_header(); ?>

<div id ="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="page-template">
                    <?php
                    if(have_posts()) the_post();
                    get_template_part( 'parts/content', 'page' );

                    if( comments_open() || get_comments_number() ){:
                        comments_template();
                    }
                    endwhile;
                    ?>
                </div>
            </div>
        </main>
    </div>

<?php get_footer(); ?>