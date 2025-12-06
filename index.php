<?php get_header(); ?>

<div class="generic-header" style="background: #f4f4f4; padding: 60px 0; text-align: center;">
    <div class="container">
        <h1>
            <?php 
            if ( is_search() ) {
                echo 'Search Results';
            } else if ( is_home() ) {
                echo 'Our Blog'; // The default blog title
            } else if ( is_archive() ) {
                the_archive_title();
            } else {
                echo 'Page';
            }
            ?>
        </h1>
    </div>
</div>

<div class="container section-padding" style="margin-top: 50px;">
    
    <?php 
    // The Generic Loop
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); 
            ?>
            
            <article class="blog-item" style="margin-bottom: 40px; border-bottom: 1px solid #ddd; padding-bottom: 40px;">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                
                <div class="meta" style="color: #888; font-size: 0.9rem; margin-bottom: 15px;">
                    Posted on <?php the_time('F j, Y'); ?> in <?php the_category(', '); ?>
                </div>
                
                <p><?php the_excerpt(); ?></p>
                
                <a href="<?php the_permalink(); ?>" class="btn-text">Read More &rarr;</a>
            </article>

        <?php 
        } // End While
        
        // Pagination (Previous/Next)
        echo paginate_links();

    } else {
        echo '<p>No content found.</p>';
    }
    ?>

</div>

<?php get_footer(); ?>