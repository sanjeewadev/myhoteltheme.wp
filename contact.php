<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us | LUMIÈRE</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap"
      rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
  </head>
  <body>
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
        height: 40vh;
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.5)
          ),
          url('https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
      ">
      <div class="header-content fade-in">
        <h1>Contact Us</h1>
      </div>
    </header>

    <section class="section-padding">
      <div class="container about-grid">
        <!-- Contact Info -->
        <div class="contact-info">
          <h2>Get in Touch</h2>
          <p>We are here to help you plan your perfect stay.</p>
          <br />
          <div class="contact-item">
            <i class="fas fa-map-marker-alt"></i>
            <div>
              <h4>Address</h4>
              <p>123 Luxury Ave, Beverly Hills, CA 90210</p>
            </div>
          </div>
          <div class="contact-item">
            <i class="fas fa-phone"></i>
            <div>
              <h4>Phone</h4>
              <p>+1 (800) 123-4567</p>
            </div>
          </div>
          <div class="contact-item">
            <i class="fas fa-envelope"></i>
            <div>
              <h4>Email</h4>
              <p>concierge@lumierehotel.com</p>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="booking-details-form">
          <!-- reusing form style -->
          <form id="contactForm">
            <div class="input-group">
              <label>Name</label>
              <input type="text" required />
            </div>
            <div class="input-group">
              <label>Email</label>
              <input type="email" required />
            </div>
            <div class="input-group">
              <label>Message</label>
              <textarea
                rows="5"
                style="
                  width: 100%;
                  padding: 10px;
                  border: 1px solid #ddd;
                "></textarea>
            </div>
            <button
              type="submit"
              class="btn btn-primary"
              style="margin-top: 20px">
              Send Message
            </button>
          </form>
        </div>
      </div>
    </section>

    <!-- Map Placeholder -->
    <div class="map-container">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26456.146608937015!2d-118.40697775!3d34.0722375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bc04d6d147cf%3A0x2948c322b70f03c2!2sBeverly%20Hills%2C%20CA!5e0!3m2!1sen!2sus!4v1683900000000!5m2!1sen!2sus"
        width="100%"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"></iframe>
    </div>

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

    <!-- Footer same as others -->
    <script src="/assets/js/main.js"></script>
  </body>
</html>
