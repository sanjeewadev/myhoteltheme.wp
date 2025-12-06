<?php get_header(); ?>

<header class="page-header" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>'); height: 60vh; display: flex; align-items: center; justify-content: center; color: white; background-size: cover; background-position: center;">
    <div class="container text-center">
        <h1 style="font-size: 3rem; text-shadow: 2px 2px 10px rgba(0,0,0,0.5);"><?php the_title(); ?></h1>
    </div>
</header>

<div class="container section-padding">
    <div class="room-details-grid" style="display: grid; grid-template-columns: 2fr 1fr; gap: 50px;">
        
        <div class="room-main">
            <h2>Room Overview</h2>
            <div class="room-content">
                <?php 
                while( have_posts() ) {
                    the_post();
                    the_content(); 
                }
                ?>
            </div>
            
            <hr>
            
            <h3>Room Features</h3>
            <ul>
                <li><strong>Price:</strong> $<?php the_field('room_price'); ?> / Night</li>
                <li><strong>Size:</strong> <?php the_field('room_size'); ?> sq ft</li>
                <li><strong>View:</strong> <?php the_field('room_view'); ?></li>
            </ul>
        </div>

        <div class="room-sidebar" style="background: #f9f9f9; padding: 30px; border: 1px solid #ddd;">
            <h3>Book This Suite</h3>
            <p>From <span style="color: #c5a880; font-size: 1.5rem; font-weight: bold;">$<?php the_field('room_price'); ?></span> / night</p>
            
            <form>
                <label>Check In</label>
                <input type="date" style="width: 100%; padding: 10px; margin-bottom: 10px;">
                <button class="btn btn-primary" style="width: 100%;">Check Availability</button>
            </form>
        </div>

    </div>
</div>

<?php get_footer(); ?>