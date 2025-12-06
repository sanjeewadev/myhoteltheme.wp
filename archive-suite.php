<?php get_header(); ?>

<header class="page-header" style="background-color: #1a1a1a; padding: 100px 0; text-align: center; color: white;">
    <div class="container">
        <h1><?php post_type_archive_title(); ?></h1>
        <p>Explore our complete collection of luxury accommodations.</p>
    </div>
</header>

<section class="section-padding">
    <div class="container">
        
        <div class="room-grid">

            <?php 
            // 3. The Standard Loop (No WP_Query needed!)
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); 
                    ?>

                    <div class="room-card">
                        <div class="room-img">
                             <a href="<?php the_permalink(); ?>">
                                <?php if( has_post_thumbnail() ): ?>
                                    <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" />
                                <?php endif; ?>
                             </a>
                        </div>
                        
                        <div class="room-info">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            
                            <p><?php echo wp_trim_words( get_the_content(), 20 ); ?></p>
                            
                            <div class="room-price">
                                $<?php the_field('room_price'); ?> <span>/ Night</span>
                            </div>
                            
                            <a href="<?php the_permalink(); ?>" class="btn-link">View Details</a>
                        </div>
                    </div>
                    <?php 
                } // End While
                
                // 4. Pagination (Important for Archives!)
                // If you have 50 rooms, this adds "Next Page / Previous Page" buttons
                echo '<div class="pagination">';
                echo paginate_links();
                echo '</div>';

            } else {
                echo '<p>No suites found.</p>';
            }
            ?>
            
        </div>
    </div>
</section>

<?php get_footer(); ?>