<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rooms & Suites | LUMIÈRE</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap"
      rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
  </head>
  <body>
    <!-- Navbar (Copy from other pages) -->
    <nav class="navbar" id="navbar">
      <div class="container nav-container">
        <a href="../index.html" class="logo">LUMIÈRE</a>
        <ul class="nav-links">
          <li><a href="../index.html">Home</a></li>
          <li><a href="./about.html">About</a></li>
          <li><a href="./rooms.html">Suites</a></li>
          <li><a href="./dining.html">Dining</a></li>
          <li><a href="./contact.html">Contact</a></li>
          <li><a href="./spa.html">Spa</a></li>
          <li><a href="../booking.html" class="btn-nav">Book Now</a></li>
        </ul>
        <div class="menu-toggle" id="mobile-menu">
          <span class="bar"></span><span class="bar"></span
          ><span class="bar"></span>
        </div>
      </div>
    </nav>

    <header
      class="page-header"
      style="
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.4),
            rgba(0, 0, 0, 0.4)
          ),
          url('https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
      ">
      <div class="header-content fade-in">
        <h1>Accommodations</h1>
        <p>Designed for the discerning traveler</p>
      </div>
    </header>

    <section class="section-padding">
      <div class="container">
        <!-- Filter Buttons -->
        <div class="filter-container text-center fade-in">
          <button class="filter-btn active" data-filter="all">All View</button>
          <button class="filter-btn" data-filter="standard">Standard</button>
          <button class="filter-btn" data-filter="suite">Suites</button>
          <button class="filter-btn" data-filter="villa">Villas</button>
        </div>

        <div class="room-grid" id="room-grid">
          <!-- Standard -->
          <div class="room-card scroll-reveal" data-category="standard">
            <div class="room-img">
              <img
                src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                alt="Room" />
            </div>
            <div class="room-info">
              <h3>Superior King</h3>
              <p>City view, 45 sqm, Marble bath.</p>
              <div class="room-price">$350 <span>/ Night</span></div>
              <a href="booking.html" class="btn-link">Book Now</a>
            </div>
          </div>

          <!-- Suite -->
          <div class="room-card scroll-reveal" data-category="suite">
            <div class="room-img">
              <img
                src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                alt="Room" />
            </div>
            <div class="room-info">
              <h3>Executive Suite</h3>
              <p>Ocean view, living room, 80 sqm.</p>
              <div class="room-price">$550 <span>/ Night</span></div>
              <a href="booking.html" class="btn-link">Book Now</a>
            </div>
          </div>

          <!-- Villa -->
          <div class="room-card scroll-reveal" data-category="villa">
            <div class="room-img">
              <img
                src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                alt="Room" />
            </div>
            <div class="room-info">
              <h3>Presidential Villa</h3>
              <p>Private pool, butler service, 200 sqm.</p>
              <div class="room-price">$1,200 <span>/ Night</span></div>
              <a href="booking.html" class="btn-link">Book Now</a>
            </div>
          </div>

          <!-- More Standard -->
          <div class="room-card scroll-reveal" data-category="standard">
            <div class="room-img">
              <img
                src="https://images.unsplash.com/photo-1595576508898-0ad5c879a061?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                alt="Room" />
            </div>
            <div class="room-info">
              <h3>Deluxe Twin</h3>
              <p>Garden view, two queen beds.</p>
              <div class="room-price">$380 <span>/ Night</span></div>
              <a href="booking.html" class="btn-link">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer (Same as Index) -->
    <footer class="footer">
      <div class="container footer-grid">
        <div class="footer-col">
          <h3>LUMIÈRE</h3>
          <p>Experience the art of living well.</p>
        </div>
        <div class="footer-col">
          <h4>Contact</h4>
          <p>123 Luxury Ave, Beverly Hills, CA</p>
          <p>concierge@lumierehotel.com</p>
        </div>
        <div class="footer-col">
          <h4>Links</h4>
          <ul>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2023 Lumière Hotel. All Rights Reserved.</p>
      </div>
    </footer>

    <!-- Use Footer from index.html -->
    <script src="/assets/js/main.js"></script>
  </body>
</html>
