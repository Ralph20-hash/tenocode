<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Right Aligned Navigation</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <nav>
    <div class="brand">CARTON</div>
    <div class="nav-links">
      <a href="index.html">Home</a>
      <a href="about.html">About</a>

      <div class="dropdown">
        <button class="dropbtn">All cars</button>
        <div class="dropdown-content">
          <a href="#sedan">Sedan</a>
          <a href="#suv">SUV</a>
          <a href="#pickup">Pickup</a>
          <a href="#electric">Electric</a>
        </div>
      </div>

      <a href="contact.php">Contact</a>
     
    </div>
  </nav>
  
</head>
<body>

  <div class="container">
    <div class="contact-info">
      <h2>Contact CARTON</h2>
      <p>
        Contact us. Your voice matters. We value your opinions, concerns, and recommendations. Should you need clarifications before booking our car rentals, let us hear them!
      </p>
      <p>If you need a service outside of our scope, let’s talk about it. We’ll find the best way possible to meet your needs.</p>

      <h3>CALL US</h3>
      <p>+63 995 378 4200</p>

      <h3>EMAIL US</h3>
      <p>inquiries@carton.com</p>

      <h3>VISIT US</h3>
      <p>5179 Hayes St, Brgy. Pio del Pilar, Makati City</p>

      <h3>OFFICE HOURS</h3>
      <p>Monday to Friday: 8AM to 11PM<br>Saturday and Sunday: 10AM to 6PM</p>

      <iframe 
        src="https://www.google.com/maps?q=5179+Hayes+St,+Makati,+Philippines&output=embed" 
        width="100%" 
        height="250" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
      </iframe>
    </div>

    <div class="contact-form">
      <h2>CONTACT US</h2>
      <form action="submit_contact.php" method="post">
      <form action="https://formsubmit.co/lllcartonlll@gmail.com" method="POST">
  <div class="row">
    <input type="text" name="firstName" placeholder="First Name" required>
    <input type="text" name="lastName" placeholder="Last Name" required>
  </div>
  <div class="row">
    <input type="email" name="email" placeholder="Email" required>
  </div>
  <input type="tel" name="phone" placeholder="Phone Number" required>
  <textarea name="message" rows="5" placeholder="Message" required></textarea>
  <input type="hidden" name="_captcha" value="true">
  <button type="submit">Send</button>
  <input type="hidden" name="_captcha" value="true">
</form>

    </div>
  </div>

</body>
</html>