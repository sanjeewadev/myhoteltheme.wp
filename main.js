document.addEventListener("DOMContentLoaded", () => {
  // 1. Navigation Scroll Effect
  const navbar = document.getElementById("navbar");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });

  // 2. Mobile Menu Toggle
  const mobileMenu = document.getElementById("mobile-menu");
  const navLinks = document.querySelector(".nav-links");

  mobileMenu.addEventListener("click", () => {
    navLinks.classList.toggle("active");
    // Simple hamburger animation toggle
    mobileMenu.classList.toggle("is-active");
  });

  // 3. Scroll Reveal Animation
  const revealElements = document.querySelectorAll(".scroll-reveal, .fade-in");

  const revealOnScroll = () => {
    const windowHeight = window.innerHeight;
    const elementVisible = 150;

    revealElements.forEach((element) => {
      const elementTop = element.getBoundingClientRect().top;
      if (elementTop < windowHeight - elementVisible) {
        element.style.opacity = "1";
        element.style.transform = "translateY(0)";
      }
    });
  };

  // Initial styles for js animation
  revealElements.forEach((el) => {
    el.style.opacity = "0";
    el.style.transform = "translateY(30px)";
    el.style.transition = "all 0.8s ease-out";
  });

  window.addEventListener("scroll", revealOnScroll);
  // Trigger once on load
  revealOnScroll();

  // 4. Booking Form Simulation
  const bookingForm = document.getElementById("bookingForm");
  bookingForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const checkIn = bookingForm.querySelector(
      'input[type="date"]:nth-of-type(1)'
    ).value;
    const checkOut = bookingForm.querySelector(
      'input[type="date"]:nth-of-type(2)'
    ).value;

    if (checkIn && checkOut) {
      alert(
        `Availability Checked!\n\nCheck-In: ${checkIn}\nCheck-Out: ${checkOut}\n\n(In a real site, this would redirect to a booking engine.)`
      );
    } else {
      alert("Please select valid dates.");
    }
  });
});

/* --- APPEND INSIDE THE DOMContentLoaded FUNCTION --- */

// 5. Booking Page Logic (Dynamic Pricing)
const reservationForm = document.getElementById("reservationForm");

if (reservationForm) {
  // Elements
  const checkInInput = document.getElementById("checkIn");
  const checkOutInput = document.getElementById("checkOut");
  const roomSelect = document.getElementById("roomType");

  // Summary Elements
  const sumCheckIn = document.getElementById("summaryCheckIn");
  const sumCheckOut = document.getElementById("summaryCheckOut");
  const sumRoom = document.getElementById("summaryRoom");
  const sumNights = document.getElementById("summaryNights");
  const sumTotal = document.getElementById("summaryTotal");

  // Calculate Function
  function updateSummary() {
    // Get Values
    const roomPrice = parseFloat(roomSelect.value);
    const roomName =
      roomSelect.options[roomSelect.selectedIndex].text.split("(")[0];
    const checkInDate = new Date(checkInInput.value);
    const checkOutDate = new Date(checkOutInput.value);

    // Update Text
    sumRoom.innerText = roomName;

    if (checkInInput.value) sumCheckIn.innerText = checkInInput.value;
    if (checkOutInput.value) sumCheckOut.innerText = checkOutInput.value;

    // Calculate Nights & Total
    if (
      checkInInput.value &&
      checkOutInput.value &&
      checkOutDate > checkInDate
    ) {
      const diffTime = Math.abs(checkOutDate - checkInDate);
      const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

      sumNights.innerText = `${diffDays} Nights`;
      sumTotal.innerText = `$${(diffDays * roomPrice).toLocaleString()}`;
    } else {
      sumNights.innerText = "0 Nights";
      sumTotal.innerText = "$0";
    }
  }

  // Event Listeners
  checkInInput.addEventListener("change", updateSummary);
  checkOutInput.addEventListener("change", updateSummary);
  roomSelect.addEventListener("change", updateSummary);

  // Form Submit Simulation
  reservationForm.addEventListener("submit", (e) => {
    e.preventDefault();
    alert(
      "Thank you! Your reservation request has been received. We will send a confirmation email shortly."
    );
    reservationForm.reset();
    updateSummary();
  });
}

/* --- APPEND INSIDE DOMContentLoaded --- */

// 6. Room Filtering Logic
const filterBtns = document.querySelectorAll(".filter-btn");
const roomCards = document.querySelectorAll(".room-card");

if (filterBtns.length > 0) {
  filterBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      // Remove active class from all
      filterBtns.forEach((b) => b.classList.remove("active"));
      // Add to clicked
      btn.classList.add("active");

      const filterValue = btn.getAttribute("data-filter");

      roomCards.forEach((card) => {
        // Show all
        if (filterValue === "all") {
          card.classList.remove("hide");
        } else {
          // Check category
          if (card.getAttribute("data-category") === filterValue) {
            card.classList.remove("hide");
          } else {
            card.classList.add("hide");
          }
        }
      });
    });
  });
}

// 7. Contact Form Simulation
const contactForm = document.getElementById("contactForm");
if (contactForm) {
  contactForm.addEventListener("submit", (e) => {
    e.preventDefault();
    alert("Message Sent! Our concierge will contact you shortly.");
    contactForm.reset();
  });
}
