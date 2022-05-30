<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"> -->

<title>Inquiry</title>

<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="main.css">

</head>

<body>

<!-- Navbar  -->  
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top ">
  <div class="container">
    <img src ="apitonglogo.png" class="img-responsive logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse container" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item nav-a">
          <a class="nav-link" href="../HomePage/index.php">Home</a>
      </li>

      <li class="nav-item nav-a">
          <a class="nav-link" href="../Packages/Packages.php">Packages</a>
      </li>

      <li class="nav-item nav-a">
        <a class="nav-link" href="../Inquiry/Inquiry.php">Inquiry</a>
    </li>

      <li class="nav-item nav-a">
          <a class="nav-link" href="../About/About.php">About Us</a>
      </li>

      <?php if(isset($_SESSION['email']))
      {
      ?>
      <li class="nav-item nav-a">
        <a class="nav-link" href="../Profile/profile.php">User Profile</a>
      </li>
        <li class="nav-item nav-a">
          <a class="nav-link" href="../Logout/Logout.php">Log out</a>
        </li>
      <?php }else{ ?>
        

      <li class="nav-item nav-a">
        <a class="nav-link" href="../Login/loginBackEnd.php">Log in</a>
      </li>
      <?php } ?>
      

      


      <!-- <ul class="nav navbar-nav flex-row justify-content-center flex-nowrap">
        <div class="input-group mr-0"> 
          <a href="../Logout.html"><button name="submit" class="btn">Logout</button></a>
        </div>
      </ul> -->
    </div>
  </div>
</nav>

<div class="container " id="inquiry-bg">
  <div class="contact-section">
    <div class="row">
        <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5 ">
          <div class="contact-info address">
              <div><i class=""></i>Quezon, NCR 1113, PH</div>
              <div><i class=""></i>apitongscatering@business.com</div>
              <div><i class=""></i>+639 178 883 334 / +02 8394-7896</div>
              <div><i class=""></i>Mon - Fri 8:00 AM to 5:00 PM</div>
          </div>
        </div>
        <div class="col col-12 col-xl-6 d-flex justify-content-center mb-5">
          <div class="contact-form">
            <h2>Contact Us</h2>
            <form class="contact mt-3 mb-5" action="inquiryBackEnd.php" method="post">
              <input type="text" name="name" class="text-box" placeholder="Your Name" required>
              <input type="email" name="email" class="text-box" placeholder="Your Email" required>
              <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
              <input type="submit" name="submit" class="send-btn mt-3 " value="Send">
            </form>
          </div>
        </div>
    </div>
    </div>
</div>


<!-- Footer  -->
<div class="global">
  <div class="container">
    <div class="row ">
      <div class="col col-12 col-md-6 col-xl-6 mt-5">
        <h6>Legal</h6>
        <ul class="nav flex-column">
          <li><a href="../TermsConditions/TermsCondition.html">Terms & Conditions</a></li>
          <li><a href="../PrivacyPolicy/PrivacyPolicy.html">Privacy Policy</a></li>
          <li><a href="../Forum/Forum.html">Forums</a></li>
        </ul>
      </div>
      <div class="col col-12 col-md-6 col-xl-6 mt-5 mb-5">
        <h6>Support</h6>
        <ul class="nav flex-column">
          <li>Phone Number: +639178883334</li>
          <li>Landline: 394-7896<li>
          <li>Email: apitongscatering@business.com</li>
        </ul>
      </div>
      <div class="social">
        <div class="mt-5 mb-4">
            <a href="https://www.facebook.com/Dirtysoda11"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/RAVEN75754452?s=09"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/algeralddelapaz/"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-snapchat-ghost"></i></a>
        </div>
      </div>
      <p class="copyright mb-5"> &copy; Apitongs Food & Catering Services. All Rights Reserved</p>
    </div>
</div>
</div>



<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" 
crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.6.0.js"
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
crossorigin="anonymous"></script>

<script src="main.js"></script>

</body>

</html>