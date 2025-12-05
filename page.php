<?php get_header(); ?>

<div class="container section-padding" style="margin-top: 100px;">
    
    <h1 class="text-center"><?php the_title(); ?></h1>
    
    <hr style="width: 50px; margin: 20px auto; border-top: 2px solid var(--primary-color);">

    <div class="page-content">
        <?php 
            // This is "The Loop". It checks if there is content and prints it.
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    the_content();
                }
            }
        ?>
    </div>

</div>

<?php get_footer(); ?>