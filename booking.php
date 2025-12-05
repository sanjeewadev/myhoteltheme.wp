<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Your Stay | LUMIÈRE</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Lato:wght@300;400;700&display=swap"
      rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>
  <body>
    <nav class="navbar" id="navbar">
      <div class="container nav-container">
        <a href="index.html" class="logo">LUMIÈRE</a>
        <ul class="nav-links">
          <li><a href="./index.html">Home</a></li>
          <li><a href="./about.html">About</a></li>
          <li><a href="./rooms.html">Suites</a></li>
          <li><a href="./dining.html">Dining</a></li>
          <li><a href="./contact.html">Contact</a></li>
          <li><a href="./spa.html">Spa</a></li>
          <li><a href="./booking.html" class="btn-nav">Book Now</a></li>
        </ul>
        <div class="menu-toggle" id="mobile-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </div>
    </nav>

    <header
      class="page-header"
      style="
        height: 50vh;
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.5)
          ),
          url('https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
      ">
      <div class="header-content fade-in">
        <h1>Reservation</h1>
        <p>Secure your sanctuary</p>
      </div>
    </header>

    <section class="section-padding">
      <div class="container booking-page-grid">
        <!-- Left: The Form -->
        <div class="booking-details-form">
          <form id="reservationForm">
            <h3>1. Stay Details</h3>
            <div class="form-row">
              <div class="input-group">
                <label>Check In</label>
                <input type="date" id="checkIn" required />
              </div>
              <div class="input-group">
                <label>Check Out</label>
                <input type="date" id="checkOut" required />
              </div>
            </div>
            <div class="input-group">
              <label>Select Suite</label>
              <select id="roomType" required>
                <option value="350">Deluxe King ($350/night)</option>
                <option value="550">Executive Suite ($550/night)</option>
                <option value="1200">Presidential Villa ($1,200/night)</option>
              </select>
            </div>

            <h3>2. Guest Information</h3>
            <div class="form-row">
              <div class="input-group">
                <label>First Name</label>
                <input type="text" placeholder="John" required />
              </div>
              <div class="input-group">
                <label>Last Name</label>
                <input type="text" placeholder="Doe" required />
              </div>
            </div>
            <div class="input-group">
              <label>Email Address</label>
              <input type="email" placeholder="john@example.com" required />
            </div>

            <h3>3. Payment Details (Secure)</h3>
            <div class="input-group">
              <label>Card Number</label>
              <input type="text" placeholder="XXXX-XXXX-XXXX-XXXX" />
            </div>

            <button
              type="submit"
              class="btn btn-primary"
              style="width: 100%; margin-top: 20px">
              Confirm Booking
            </button>
          </form>
        </div>

        <!-- Right: Sticky Summary -->
        <div class="booking-summary-wrapper">
          <div class="booking-summary">
            <h3>Your Stay</h3>
            <div class="summary-line">
              <span>Check-In:</span>
              <span id="summaryCheckIn">-</span>
            </div>
            <div class="summary-line">
              <span>Check-Out:</span>
              <span id="summaryCheckOut">-</span>
            </div>
            <div class="summary-line">
              <span>Room:</span>
              <span id="summaryRoom">Deluxe King</span>
            </div>
            <div class="summary-line">
              <span>Duration:</span>
              <span id="summaryNights">0 Nights</span>
            </div>
            <hr />
            <div class="summary-total">
              <span>Total:</span>
              <span id="summaryTotal">$0</span>
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

    <script src="./assets/js/main.js"></script>
  </body>
</html>
