<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Spa & Wellness | LUMIÈRE</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap"
      rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
  </head>
  <body>
    <!-- Navbar (Same) -->
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
            rgba(0, 0, 0, 0.3),
            rgba(0, 0, 0, 0.3)
          ),
          url('https://images.unsplash.com/photo-1544161515-4ab6ce6db874?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
      ">
      <div class="header-content fade-in">
        <h1>Serenity Spa</h1>
        <p>Restore Balance & Harmony</p>
      </div>
    </header>

    <section class="section-padding">
      <div class="container">
        <div class="section-header text-center">
          <h4>Treatments</h4>
          <h2>Signature Therapies</h2>
        </div>
        <div class="amenities-grid">
          <!-- Reusing existing grid -->
          <div class="amenity-item scroll-reveal">
            <i class="fas fa-leaf"></i>
            <h3>Aromatherapy Massage</h3>
            <p>60 Mins - $120</p>
            <p class="text-sm">Gentle strokes using essential oils.</p>
          </div>
          <div class="amenity-item scroll-reveal">
            <i class="fas fa-hot-tub"></i>
            <h3>Hydrotherapy Bath</h3>
            <p>45 Mins - $90</p>
            <p class="text-sm">Mineral rich water therapy.</p>
          </div>
          <div class="amenity-item scroll-reveal">
            <i class="fas fa-mortar-pestle"></i>
            <h3>Deep Tissue</h3>
            <p>90 Mins - $180</p>
            <p class="text-sm">Intensive muscle release.</p>
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
