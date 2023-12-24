<?php
@include 'connection.php';
error_reporting(0);
if(isset($_POST['submit'])){

  $loc = mysqli_real_escape_string($conn, $_POST['location']);
  $pickup = mysqli_real_escape_string($conn, $_POST['pickup']);
  $return = mysqli_real_escape_string($conn, $_POST['return']);

  $insert = "INSERT INTO booking(location, pickup_date, return_date) VALUES('$loc','$pickup','$return')";
  mysqli_query($conn, $insert);    
};
if(isset($_POST['rent'])){
  $car = mysqli_real_escape_string($conn, $_POST['carname']);
  $price = mysqli_real_escape_string($conn, $_POST['carprice']);

  $update = "UPDATE booking SET car='$car', price_inrupees='$price' WHERE id=(SELECT MAX(id) FROM booking)";
  mysqli_query($conn,$update);  
};

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Rental System</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
  <header>
    <a href="#" class="logo"><img src="img/jeep.png"></a>
    <div class="bx bx-menu" id="menu-icon"></div>
    <ul class="navbar">
      <li><a href="#home">Home</a></li>
      <li><a href="#ride">Ride</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#about">About</a></li>
    </ul>
    <div class="header-btn">
      <a href="booking.php" class="sign-up">Bookings</a>
      <a href="index.php" class="sign-in">Sign Out</a>
    </div>
  </header>
  <section class="home" id="home">
    <div class="text">
      <h1><span>Looking</span> to <br> rent a car</h1>
      <p1>Then this is the platform where you can seamlessly<br> rent cars with just a few clicks</p1>
    </div>
    <div class="form-container">
      <form action=""  autocomplete="off" method="post">
        <div class="input-box">
          <span>Location</span>
          <input type="search" name="location" id="" placeholder="Enter Place" required>
        </div>
        <div class="input-box">
          <span>Pick-Up Date</span>
          <input type="date" name="pickup" id="pickup" required>
        </div>
        <div class="input-box">
          <span>Return Date</span>
          <input type="date" name="return" id="return"  required>
        </div>
        <button name="submit" id="" class="btn">Save Data</button>
      </form>
    </div>
  </section>
  <section class="ride" id="ride">
    <div class="heading">
      <span>How Its Work</span>
      <h1>Rent With 3 Easy Steps</h1>
    </div>
    <div class="ride-container">
      <div class="box">
        <i class='bx bxs-map'></i>
        <h2>Choose A Location</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis sit atque laborum, fugit rerum incidunt quidem,</p>
      </div>
      <div class="box">
        <i class='bx bxs-calendar-check'></i>        <h2>Pick-Up Date</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis sit atque laborum, fugit rerum incidunt quidem,</p>
      </div>
      <div class="box">
        <i class='bx bxs-calendar-star'></i>
        <h2>Book A Car</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis sit atque laborum, fugit rerum incidunt quidem,</p>
      </div>
    </div>
  </section>
  <section class="services" id="services">
    <div class="heading">
      <span>Best Services</span>
      <h1>Explore Out Top Deals <br> From Top Rated Dealers</h1>
    </div>
    <div class="services-container">
      <!-- Generated Through JavaScript -->
    </div>
  </section>

  <section class="about" id="about">
    <div class="heading">
      <span>About Us</span>
      <h1>Best Customer Experience</h1>
    </div>
    <div class="about-container">
      <div class="about-img">
        <img src="img/about.png" alt="">
      </div>
      <div class="about-text">
        <span>About Us</span>
        <p>Greetings, and welcome to your one-stop shop for easy and convenient online auto rentals. We are your entryway to hassle-free travel experiences; we are more than just a platform. In our ideal world, renting a car would only require a click. Our platform is intended to completely transform how you use and enjoy transportation.</p>
        <a href="#" class="btn">Learn More</a>
      </div>
    </div>
  </section>

  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="test1.js"></script>
</body>
</html>