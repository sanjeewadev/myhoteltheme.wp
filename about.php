<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us | LUMIÈRE</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Lato:wght@300;400;700&display=swap"
      rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
  </head>
  <body>
    <!-- Navigation (Same as Index) -->
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
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header
      class="page-header"
      style="
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.5)
          ),
          url('https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
      ">
      <div class="header-content fade-in">
        <h1>Our Heritage</h1>
        <p>Refining hospitality since 1920</p>
      </div>
    </header>

    <!-- Vision Section -->
    <section class="section-padding">
      <div class="container about-grid">
        <div class="about-image scroll-reveal">
          <img
            src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
            alt="Hotel Lobby" />
        </div>
        <div class="about-text scroll-reveal">
          <h4>The Vision</h4>
          <h2>Sanctuary in the City</h2>
          <p>
            Lumière was born from a desire to create a space that transcends the
            ordinary. What started as a small boutique guesthouse in the roaring
            twenties has evolved into an icon of modern luxury, preserving its
            Art Deco roots while embracing contemporary comfort.
          </p>
          <p>
            We believe that true luxury lies in the details—the texture of the
            linens, the scent of the lobby, and the warmth of a smile.
          </p>
        </div>
      </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
      <div class="container stats-grid">
        <div class="stat-item scroll-reveal">
          <h2>100+</h2>
          <p>Years of History</p>
        </div>
        <div class="stat-item scroll-reveal">
          <h2>50</h2>
          <p>Exclusive Suites</p>
        </div>
        <div class="stat-item scroll-reveal">
          <h2>3</h2>
          <p>Michelin Restaurants</p>
        </div>
        <div class="stat-item scroll-reveal">
          <h2>24/7</h2>
          <p>Concierge Service</p>
        </div>
      </div>
    </section>

    <!-- Team Section -->
    <section class="section-padding bg-light">
      <div class="container">
        <div class="section-header text-center">
          <h4>The People</h4>
          <h2>Meet Your Hosts</h2>
        </div>
        <div class="room-grid">
          <!-- Reusing grid class -->
          <div class="team-card scroll-reveal">
            <img
              src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
              alt="Manager" />
            <div class="team-info">
              <h3>Alexander Cole</h3>
              <p>General Manager</p>
            </div>
          </div>
          <div class="team-card scroll-reveal">
            <img
              src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
              alt="Concierge" />
            <div class="team-info">
              <h3>Sarah Jenkins</h3>
              <p>Head of Guest Relations</p>
            </div>
          </div>
          <div class="team-card scroll-reveal">
            <img
              src="https://images.unsplash.com/photo-1583394838336-acd977736f90?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
              alt="Chef" />
            <div class="team-info">
              <h3>Jean-Luc Pierre</h3>
              <p>Executive Chef</p>
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

    <script src="/assets/js/main.js"></script>
  </body>
</html>
