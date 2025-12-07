<?php
/**
 * Template Name: Book Now Template
 *
 */

get_header( );

?>

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

    <?Php get_footer(); ?>