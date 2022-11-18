<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Resume Selector</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/adds.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  

  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Resume Selector</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">


    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Looking for a job? Or potential candidates to pick?</h1>
          <ul>
            <li> You have come to the right place.</li>
            <li>Sign up/Login to get started!</li>
          </ul>
          <div class="mt-3">
            <a href="#login" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/rec.jpg" class="img-fluid" alt="">
        </div>
      </div>
    </div>


  </section><!-- End Hero -->

  <main id="main">
<section id="login" class="about">
      <div class="container">

        <div class="row content">

<div class="sign-up-form">
<h2>Login/Sign up</h2>
<div class="container" id="container">
  <div class="form-container sign-up-container">
    <form action="process_register.php" method="POST">
      <h1>Sign Up</h1>
      <input type="text" name = "username" placeholder="Name" />
      <input type="email" name = "email" placeholder="Email"  />
      <input type="password" name= "password" placeholder="Password" />

      <div class="radio_but" >
        <div style="padding-right: 12px;">
      <input type="radio" name="type_user" value="recruiter" >
      Recruiter
      </div>

      <div style="padding-left: 12px ;">
      <input type="radio" name="type_user" value="applicant">
      Applicant</div>
      </div>
        

      <button>Sign Up</button>
    </form>
  </div>
  <div class="form-container sign-in-container">
    <form action="process_login.php" method="POST">
      <h1>Login</h1>
      
       <div class="radio_but" >
        <div style="padding-right: 12px;">
      <input type="radio" id="recruiter_option" name="type_user" value="recruiter" onclick="show_file()">
      Recruiter
      </div>

      <div style="padding-left: 12px ;">
      <input type="radio" id="applicant_option" name="type_user" value="applicant" onclick="show_file()">
      Applicant
      </div>

      </div>

      <input type="email" name="email" placeholder="Email" />
      <input type="password" name="password" placeholder="Password" />


      <div class="show_file">
      <h4>or</h4>
      <input type="file" name="resume">
      </div>


      <button>Login</button>

    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1>Welcome back</h1>
        <p>Click to login</p>
        <button class="ghost" id="signIn">Login</button>
      </div>
      <div class="overlay-panel overlay-right">
        <h1>No account yet?</h1>
        <p>Click here to start</p>
        <button class="ghost" id="signUp">Sign Up</button>
      </div>
    </div>
  </div>
</div>
</div>

</div>
</div>
</section>

    <!-- ======= About Section ======= -->
   <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>About the page and some instructions</h2>
            <h3>For recruiters and applicants</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              This page uses a resume selector algorithm. 
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> The applicant is required to upload their resume in pdf format.</li>
              <li><i class="ri-check-double-line"></i> The recruiter can filter the applicants as required based on keywords. </li>
              <li><i class="ri-check-double-line"></i> The status tab shows the status of being accepted or rejected.</li>
            </ul>
            <p class="fst-italic">
              Do login to begin.
            </p>
          </div>
        </div>

      </div>
    </section>  


    
    <!-- ======= Team Section ======= -->
    <section id="contact" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact us</h2>
          


        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              
              <div class="col-mt-4">

                <div class="info-box mt-4">
                  <h3>Developed by</h3>
                  <h5 style="color:blueviolet;"> Team ancient debuggers</h5>
                  <p>Debashish Roy<br>Subhra Chakravorty<br>Jatin Gupta<br>Vishal Pawar<br>Annapoorani Anantharaman</p>
                </div>
              </div>
            
            </div>

          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email us</h3>
                  <p>debashish.roy@students.iiit.ac.in<br>
                     subhra.chakravorty@students.iiit.ac.in<br>
                     jatin.gupta@students.iiit.ac.in<br>
                     vishal.pawar@students.iiit.ac.in<br>
                  annapoorani.a@students.iiit.ac.in</p>
            </div>
          </div>


          </div>
        </div>


      </div>
    </section><!-- End Team Section -->

   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Resume Selector</h3>
            <p>Emergency contact:</p>
            <br>
            <p>+91-9876543210</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              
              <li><i class="bx bx-chevron-right"></i> <a href="#login">Login</a></li>
              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Possible recruiters</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Possible recruiters</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Game developer</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Analyst</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Security</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Procurement</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Networking</a></li>
            </ul>
          </div>

          

        </div>
      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script type="text/javascript" src="assets/js/add_js.js"></script>

</body>

</html>
