<?php get_header(); ?>
<div id ="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            
                <?php
                
                    while(have_posts()): the_post();
                    get_template_part( 'parts/content', 'single' );
            ?>
         <div class="wpdevs-pagination
            <div class="pages next">
                <?php next_post_links('&laquo; %link') ?>
            </div>
            <div class="pages previous">
                <?php previous_post_links('%link &raquo;') ?>    
            </div>
         </div>

            <?php
                    if( comments_open() || get_comments_number() ){
                        comments_template();
                    }
                    endwhile;
                ?>


        </div>
    </main>
</div>
<?php get_footer(); ?>
