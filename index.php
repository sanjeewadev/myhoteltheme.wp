
    <!-- Navigation -->
     <?php get_header( ); ?>

    <!-- Hero Section -->
    <header id="home" class="hero">
      <div class="hero-content">
        <h4 class="fade-in">The Ultimate Escape</h4>
        <h1 class="fade-in">Experience Elegance</h1>
        <p class="fade-in">
          Where luxury meets comfort in the heart of the city.
        </p>
        <a href="#rooms" class="btn btn-primary fade-in">Explore Suites</a>
      </div>
    </header>

    <!-- Booking Bar (Floating) -->
    <section class="booking-section">
      <form class="booking-form" id="bookingForm">
        <div class="input-group">
          <label>Check In</label>
          <input type="date" required />
        </div>
        <div class="input-group">
          <label>Check Out</label>
          <input type="date" required />
        </div>
        <div class="input-group">
          <label>Guests</label>
          <select>
            <option value="1">1 Adult</option>
            <option value="2" selected>2 Adults</option>
            <option value="3">3 Adults</option>
            <option value="4">Family</option>
          </select>
        </div>
        <button type="submit" class="btn btn-dark">Check Availability</button>
      </form>
    </section>

    <!-- About Section -->
    <section id="about" class="about section-padding">
      <div class="container about-grid">
        <div class="about-text scroll-reveal">
          <h4>Our Story</h4>
          <h2>A Legacy of Luxury</h2>
          <p>
            Nestled on the coastline, Lumière offers an sanctuary of calm. Since
            1920, we have redefined hospitality with our world-class service,
            award-winning architecture, and attention to the smallest details.
          </p>
          <a href="#" class="btn-text">Read More &rarr;</a>
        </div>
        <div class="about-image scroll-reveal">
          <!-- Placeholder Image -->
          <img
            src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
            alt="Hotel Interior" />
        </div>
      </div>
    </section>

    <!-- Rooms Section -->
    <section id="rooms" class="rooms section-padding bg-light">
      <div class="container">
        <div class="section-header text-center">
          <h4>Accommodation</h4>
          <h2>Our Exquisite Suites</h2>
        </div>
        <div class="room-grid">
          <!-- Room 1 -->
          <div class="room-card scroll-reveal">
            <div class="room-img">
              <img
                src="https://images.unsplash.com/photo-1590490360182-c33d57733427?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                alt="Deluxe Room" />
            </div>
            <div class="room-info">
              <h3>Deluxe King</h3>
              <p>Panoramic ocean views, king-sized bed, and marble bathroom.</p>
              <div class="room-price">$350 <span>/ Night</span></div>
              <a href="#" class="btn-link">View Details</a>
            </div>
          </div>
          <!-- Room 2 -->
          <div class="room-card scroll-reveal">
            <div class="room-img">
              <img
                src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                alt="Executive Suite" />
            </div>
            <div class="room-info">
              <h3>Executive Suite</h3>
              <p>
                Separate living area, private balcony, and executive lounge
                access.
              </p>
              <div class="room-price">$550 <span>/ Night</span></div>
              <a href="#" class="btn-link">View Details</a>
            </div>
          </div>
          <!-- Room 3 -->
          <div class="room-card scroll-reveal">
            <div class="room-img">
              <img
                src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                alt="Presidential Suite" />
            </div>
            <div class="room-info">
              <h3>Presidential Villa</h3>
              <p>
                The epitome of luxury with a private pool, butler service, and
                spa.
              </p>
              <div class="room-price">$1,200 <span>/ Night</span></div>
              <a href="#" class="btn-link">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Amenities -->
    <section id="amenities" class="amenities section-padding">
      <div class="container">
        <div class="section-header text-center">
          <h4>Facilities</h4>
          <h2>Experience The Best</h2>
        </div>
        <div class="amenities-grid">
          <div class="amenity-item scroll-reveal">
            <i class="fas fa-swimming-pool"></i>
            <h3>Infinity Pool</h3>
            <p>Climate controlled outdoor pool with skyline views.</p>
          </div>
          <div class="amenity-item scroll-reveal">
            <i class="fas fa-utensils"></i>
            <h3>Fine Dining</h3>
            <p>Three Michelin-star restaurants serving global cuisine.</p>
          </div>
          <div class="amenity-item scroll-reveal">
            <i class="fas fa-spa"></i>
            <h3>Wellness Spa</h3>
            <p>Rejuvenate your body and mind with organic treatments.</p>
          </div>
          <div class="amenity-item scroll-reveal">
            <i class="fas fa-glass-martini-alt"></i>
            <h3>Rooftop Bar</h3>
            <p>Signature cocktails in an exclusive evening atmosphere.</p>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>
