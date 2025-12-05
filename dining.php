<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dining | LUMIÈRE</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap"
      rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
  </head>
  <body>
    <!-- Navbar (Same as above) -->
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
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.5)
          ),
          url('https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
      ">
      <div class="header-content fade-in">
        <h1>Culinary Journeys</h1>
        <p>Tastes from around the globe</p>
      </div>
    </header>

    <!-- Restaurant 1 -->
    <section class="section-padding">
      <div class="container about-grid">
        <div class="about-text scroll-reveal">
          <h4>Fine Dining</h4>
          <h2>The Azure Room</h2>
          <p>
            Experience Mediterranean flavors with a modern twist. Chef Pierre's
            signature seafood platter is a must-try.
          </p>
          <div class="menu-preview">
            <div class="menu-item">
              <span>Lobster Thermidor</span>
              <span class="price">$85</span>
            </div>
            <div class="menu-item">
              <span>Wagyu Beef Carpaccio</span>
              <span class="price">$45</span>
            </div>
            <div class="menu-item">
              <span>Truffle Risotto</span>
              <span class="price">$38</span>
            </div>
          </div>
        </div>
        <div class="about-image scroll-reveal">
          <img
            src="https://images.unsplash.com/photo-1550966871-3ed3c47e2ce2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
            alt="Restaurant Interior" />
        </div>
      </div>
    </section>

    <!-- Restaurant 2 (Reversed) -->
    <section class="section-padding bg-light">
      <div class="container about-grid" style="direction: rtl">
        <!-- CSS Trick for visual swap -->
        <div class="about-text scroll-reveal" style="direction: ltr">
          <h4>Rooftop Bar</h4>
          <h2>Skyline Lounge</h2>
          <p>
            Sip bespoke cocktails while watching the sunset over the city
            skyline. The atmosphere is electric, the drinks divine.
          </p>
          <div class="menu-preview">
            <div class="menu-item">
              <span>Lumière Signature Martini</span>
              <span class="price">$22</span>
            </div>
            <div class="menu-item">
              <span>Smoked Old Fashioned</span>
              <span class="price">$20</span>
            </div>
          </div>
        </div>
        <div class="about-image scroll-reveal">
          <img
            src="https://images.unsplash.com/photo-1572116469696-31de0f17cc34?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
            alt="Bar" />
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
