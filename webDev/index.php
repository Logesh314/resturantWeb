<?php
// Start the PHP session to capture query parameters
if (isset($_GET['success']) && $_GET['success'] == 'true') {
    echo "<script>alert('Reservation successfully made!');</script>";
} elseif (isset($_GET['error']) && $_GET['error'] == 'true') {
    echo "<script>alert('There was an error with your reservation. Please try again.');</script>";
}
?>
<?php
// Start the PHP session to capture query parameters
if (isset($_GET['contact_success']) && $_GET['contact_success'] == 'true') {
    echo "<script>alert('Your message has been successfully sent!');</script>";
} elseif (isset($_GET['contact_error']) && $_GET['contact_error'] == 'true') {
    echo "<script>alert('There was an error sending your message. Please try again later.');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Welcome to Burger Hut, where we serve the finest gourmet burgers.">
  <meta name="keywords" content="Burger Hut, gourmet burgers, restaurant, food">
  <title>Burger Hut</title>

  <link rel="stylesheet" href="styles.css">
  <!-- FontAwesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    /* Add styles specific to your slider here */
    .slider {
      position: relative;
      width: 100%;
      overflow: hidden;
      background: #0c0000;
    }
    .slider-container {
      display: flex;
      transition: transform 0.5s ease;
    }
    .slider-slide {
      min-width: 100%;
      box-sizing: border-box;
      position: relative;
    }
    .slider-slide img {
      width: 100%;
      display: block;
    }
    .slider-content {
      position: absolute;
      bottom: 20px;
      left: 20px;
      color: white;
      background: rgba(0, 0, 0, 0.5);
      padding: 10px;
    }
    .slider-prev, .slider-next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
      font-size: 24px;
      z-index: 100;
    }
    .slider-prev {
      left: 10px;
    }
    .slider-next {
      right: 10px;
    }
  </style>
</head>

<body>
  <header>
    <div class="logo-container">
      <div class="logo">
        <img src="iconlogo.png" alt="Burger Hut Logo">
      </div>
      <div class="brand-name">
        <h1>Burger Hut</h1>
      </div>
    </div>
    <nav>
      <ul>
        <li><a href="#home" class="nav-link">Home</a></li>
        <li><a href="#about" class="nav-link">About</a></li>
        <li><a href="#menu" class="nav-link">Menu</a></li>
        <li><a href="#reservations" class="nav-link">Reservations</a></li>
        <li><a href="#contact" class="nav-link">Contact</a></li>
      </ul>
    </nav>
  </header>
</body>


  <!-- Home Section -->
  <section id="home" class="hero">
    <div class="hero-content">
      <h1>Welcome to Burger Hut</h1>
      <p>Experience the Taste of Perfection</p>
      <a href="#menu" class="btn">Explore Our Menu</a>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about dark-theme">
    <div class="about-content">
      <h2>About Burger Hut</h2>
      <p>Experience the finest gourmet burgers in a cozy and rustic atmosphere. At Burger Hut, we are dedicated to delivering exceptional flavors that will tantalize your taste buds.</p>
      <p>Our chefs meticulously craft each burger using locally sourced ingredients and unique flavor combinations. From juicy beef patties to mouthwatering vegetarian options, there's something for everyone.</p>
      <a href="#menu" class="btn">Explore Our Menu</a>
    </div>
    <div class="about-image">
      <img src="about-image.jpg" alt="About Burger Hut">
    </div>
  </section>

  <!-- Menu slider -->
 


<!-- Sections -->
<section id="home" class="home">
  <!-- Home content -->


<section id="about" class="about">
  <!-- About content -->


<section id="menu" class="menu">
  <!-- Menu content -->


  <section class="slider">
    <div class="slider-container">
      <div class="slider-slide">
        <img src="slide1.jpg" alt="Classic Cheeseburger">
        <div class="slider-content">
          <h3>Classic Cheeseburger</h3>
          <p>A juicy beef patty topped with melted cheese, fresh lettuce, tomato, and our special sauce.</p>
        </div>
      </div>
      <div class="slider-slide">
        <img src="slide2.jpg" alt="Veggie Delight">
        <div class="slider-content">
          <h3>Veggie Delight</h3>
          <p>A delicious veggie patty made from a blend of fresh vegetables and spices.</p>
        </div>
      </div>
      <div class="slider-slide">
        <img src="slide3.jpg" alt="Spicy BBQ Burger">
        <div class="slider-content">
          <h3>Spicy BBQ Burger</h3>
          <p>A fiery burger packed with flavor! Grilled chicken breast smothered in spicy BBQ sauce.</p>
        </div>
      </div>
      <!-- Add more slides as needed -->
    </div>
    <button class="slider-prev">❮</button>
    <button class="slider-next">❯</button>
  </section>

  <!-- Reservations Section -->
  <section id="reservations" class="reservations">
  <div class="reservation-form">
    <h2>Make a Reservation</h2>
    <form action="process_reservation.php" method="POST">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <input type="tel" name="phone" placeholder="Phone Number" required>
      <input type="date" name="date" required>
      <input type="time" name="time" required>
      <textarea name="message" placeholder="Additional Message" rows="5"></textarea>
      <button type="submit">Submit</button>
    </form>
  </div>
</section>


  <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials">
    <h2>What Our Customers Say</h2>
    <div class="testimonial">
      <img src="customer1.jpg" alt="Customer John Doe">
      <p>"The burgers at Burger Hut are simply amazing! The flavors are rich, and the ingredients are always fresh. It's my go-to place whenever I'm craving a delicious meal."</p>
      <h4>John Doe</h4>
    </div>
    <div class="testimonial">
      <img src="customer2.jpg" alt="Customer Jane Smith">
      <p>"Burger Hut never disappoints! The quality of their burgers and the friendly service make it a top-notch dining experience. I highly recommend it to all burger lovers!"</p>
      <h4>Jane Smith</h4>
    </div>
  </section>

  <!-- Gallery Section -->
  <section id="gallery" class="gallery">
    <h2>Gallery</h2>
    <div class="image-grid">
      <div class="image-item">
        <img src="gallery1.jpg" alt="Gallery Image 1">
      </div>
      <div class="image-item">
        <img src="gallery2.jpg" alt="Gallery Image 2">
      </div>
      <div class="image-item">
        <img src="gallery3.jpg" alt="Gallery Image 3">
      </div>
      <div class="image-item">
        <img src="gallery4.jpg" alt="Gallery Image 4">
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact">
  <div class="contact-container">
    <h2>Contact Us</h2>
    <div class="contact-info">
      <div class="info-item">
        <i class="fas fa-map-marker-alt"></i>
        <p>123 Main Street, City, Country</p>
      </div>
      <div class="info-item">
        <i class="fas fa-phone-alt"></i>
        <p>+1 234 567 890</p>
      </div>
      <div class="info-item">
        <i class="fas fa-envelope"></i>
        <p>info@burgerhut.com</p>
      </div>
    </div>

    <!-- Contact Form -->
    <form action="process_contact.php" method="POST" class="contact-form">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>
</section>

<!-- Footer -->
<footer class="footer">
  <div class="footer-content">
    <div class="footer-logo">
      <img src="iconlogo.png" alt="Berger Hut Logo">
    </div>
    <nav class="footer-links">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#menu">Menu</a>
      <a href="#reservations">Reservations</a>
      <a href="#testimonials">Testimonials</a>
      <a href="#gallery">Gallery</a>
      <a href="#contact">Contact</a>
    </nav>
    <div class="footer-social">
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
  </div>
  <p class="footer-text">&copy; 2024 Burger Hut. All rights reserved.</p>
</footer>
</body>
</html>

  <!-- Custom Slider JavaScript -->
  <script>
    const prevButton = document.querySelector('.slider-prev');
    const nextButton = document.querySelector('.slider-next');
    const sliderContainer = document.querySelector('.slider-container');
    const slides = document.querySelectorAll('.slider-slide');
    let currentIndex = 0;

    function updateSlider() {
      const offset = -currentIndex * 100;
      sliderContainer.style.transform = `translateX(${offset}%)`;
    }

    prevButton.addEventListener('click', () => {
      if (currentIndex > 0) {
        currentIndex--;
      } else {
        currentIndex = slides.length - 1;
      }
      updateSlider();
    });

    nextButton.addEventListener('click', () => {
      if (currentIndex < slides.length - 1) {
        currentIndex++;
      } else {
        currentIndex = 0;
      }
      updateSlider();
    });

    // Optional: Auto-slide every 3 seconds
    setInterval(() => {
      nextButton.click();
    }, 3000);
  </script>

  <!-- JavaScript for Active Link Highlighting -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const sections = document.querySelectorAll('section');
      const navLinks = document.querySelectorAll('.nav-link');

      window.addEventListener('scroll', () => {
        let current = '';

        sections.forEach(section => {
          const sectionTop = section.offsetTop - 100; // Adjust offset as needed
          if (pageYOffset >= sectionTop) {
            current = section.getAttribute('id');
          }
        });

        navLinks.forEach(link => {
          link.classList.remove('active');
          if (link.getAttribute('href') === '#' + current) {
            link.classList.add('active');
          }
        });
      });
    });
  </script>
</body>
</html>