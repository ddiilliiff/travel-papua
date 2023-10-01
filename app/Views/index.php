<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Wisata Papua</title>

   <!-- 
    - favicon
  -->
   <!-- <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/travel3/favicon.svg" type="image/svg+xml"> -->

   <!-- 
    - custom css link
  -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
   <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"> -->

   <!-- 
    - google font link
  -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link
      href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap"
      rel="stylesheet">

   <style>
   .header {

      position: fixed;
      /* Fix the navbar at the top */
      width: 100%;
      /* Full width */
      top: 0;
      /* Stick to the top of the viewport */
      z-index: 1000;
      /* Ensure it's above other content */
   }

   .container-travel {
      display: flex;
      justify-content: space-between;
      margin: 20px;
   }

   /* Style the form columns */
   .form-column {
      flex: 1;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
   }

   /* Style the form rows */
   .form-row {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
   }

   /* Style the labels */
   .form-row label {
      margin-right: 10px;
      font-weight: bold;
   }

   /* Style the input fields */
   .form-row input[type="text"] {
      flex: 1;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
   }
   </style>

</head>

<body id="top">

   <!-- 
    - #HEADER
  -->

   <header class="header" data-header>
      <div class="container">

         <a href="#">
            <h1 class="logo">PAPUA-TRAVEL</h1>
         </a>

         <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
            <ion-icon name="menu-outline" class="open"></ion-icon>
            <ion-icon name="close-outline" class="close"></ion-icon>
         </button>

         <nav class="navbar">

            <ul class="navbar-list">

               <li>
                  <a href="#" class="navbar-link">Home</a>
               </li>

               <li>
                  <a href="#list" class="navbar-link">List</a>
               </li>

               <li>
                  <a href="#akomodasi" class="navbar-link">Akomodasi</a>
               </li>

               <li>
                  <a href="#" class="navbar-link">Pembayaran</a>
               </li>

               <li>
                  <a href="Contact.php" class="navbar-link">Kontak!</a>
               </li>

            </ul>

            <a href="<?php echo base_url(); ?>login" class="btn btn-secondary">Login</a>

         </nav>

      </div>
   </header>





   <main>
      <article>

         <!-- 
        - #HERO
      -->

         <section class="section hero"
            style="background-image: url('<?php echo base_url(); ?>images/bg.png');margin-top:60px; ">
            <div class="container">

               <img src="<?php echo base_url(); ?>images/shape-1.png" width="61" height="61" alt="Vector Shape"
                  class="shape shape-1">

               <img src="<?php echo base_url(); ?>images/shape-2.png" width="56" height="74" alt="Vector Shape"
                  class="shape shape-2">

               <img src="<?php echo base_url(); ?>images/shape-3.png" width="57" height="72" alt="Vector Shape"
                  class="shape shape-3">

               <div class="hero-content">

                  <h5 class="section-subtitle">Welcome</h5>

                  <h5 class="hero-title">Yours Papua Travel</h5>


                  <div class="btn-group">
                     <a href="#" class="btn btn-primary">Get Started</a>

                     <!-- <a href="#" class="btn btn-outline">Learn More</a> -->
                  </div>

               </div>

               <figure class="hero-banner">
                  <img src="<?php echo base_url(); ?>images/kuning.png" width="300" height="300" loading="lazy"
                     alt="hero banner" class="w-50">
               </figure>

            </div>
         </section>




         <!-- 
        - #list
      -->

         <section class="section destination" id="list">
            <div class="container">

               <p class="section-subtitle">Destinations</p>

               <h2 class="h2 section-title">Destinasi Wisata Papua</h2>

               <ul class="destination-list">

                  <?php foreach ($this->data as $d) { ?>
                  <li class="w-50">
                     <a href="<?php echo base_url(); ?>about_kabkot/<?php echo $d['id_kabkot']; ?>"
                        class="destination-card">

                        <figure class="card-banner">
                           <img src="<?php echo base_url('thumbnail'); ?>/<?php echo $d['thumbnail']; ?>" width="1140"
                              height="1100" loading="lazy" alt="Malé, Maldives" class="img-cover">
                        </figure>

                        <div class="card-content">
                           <p class="card-subtitle"><?php echo $d['nama']; ?></p>

                           <h3 class="h3 card-title">Papua</h3>
                        </div>

                     </a>
                  </li>
                  <?php } ?>
               </ul>
               <br>


               <div class="btn-group">
                  <!-- <a href="<?php echo base_url(); ?>jasa_travel" class="btn btn-primary">Jasa Travel</a> -->

                  <!-- <a href="#" class="btn btn-outline">Learn More</a> -->
               </div>
            </div>
         </section>





         <!-- 
        - #akomodasi
      -->


         <section class="section blog" id="akomodasi">
            <div class="container">

               <p class="section-subtitle">From The Blog Post</p>

               <h2 class="h2 section-title">Akomodasi</h2>

               <ul class="popular-list">

                  <li>
                     <div class="popular-card">

                        <figure class="card-banner">
                           <a href="#">
                              <img src="<?php echo base_url(); ?>images/teletabis.jpg" width="740" height="518"
                                 loading="lazy" alt="Kuala Lumpur, Malaysia" class="img-cover">
                           </a>

                           <!-- <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="P12D">12 Days</time>
                  </span> -->
                        </figure>

                        <div class="card-content">

                           <div class="card-wrapper">
                              <div class="card-price">Paket Wisata Jayapura</div>

                              <div class="card-rating">

                              </div>
                           </div>

                           <h3 class="card-title">
                              <a href="#">dapatkan paket wisata untuk mengunjungi tempat-tempat wisata di jayapura </a>
                           </h3>

                           <address class="card-location">Jayapura, Papua</address>

                        </div>

                     </div>
                  </li>

                  <li>
                     <div class="popular-card">

                        <figure class="card-banner">
                           <a href="#">
                              <img src="<?php echo base_url(); ?>images/rajaampat.jpg" width="740" height="518"
                                 loading="lazy" alt="Kuala Lumpur, Malaysia" class="img-cover">
                           </a>

                           <!-- <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="P12D">12 Days</time>
                  </span> -->
                        </figure>

                        <div class="card-content">

                           <div class="card-wrapper">
                              <div class="card-price">Paket Wisata Raja Ampat</div>

                              <div class="card-rating">
                                 <!-- <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>

                      <data value="2">(2)</data> -->
                              </div>
                           </div>

                           <h3 class="card-title">
                              <a href="#">dapatkan paket wisata untuk mengunjungi tempat-tempat wisata di Raja Ampat</a>
                           </h3>

                           <address class="card-location">Raja Ampat, Papua</address>

                        </div>

                     </div>
                  </li>

                  <li>
                     <div class="popular-card">

                        <figure class="card-banner">
                           <a href="#">
                              <img src="<?php echo base_url(); ?>images/merauke.jpg" width="740" height="518"
                                 loading="lazy" alt="Kuala Lumpur, Malaysia" class="img-cover">
                           </a>

                           <!-- <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="P12D">12 Days</time>
                  </span> -->
                        </figure>

                        <div class="card-content">

                           <div class="card-wrapper">
                              <div class="card-price">Paket wisata Merauke</div>

                              <div class="card-rating">
                                 <!-- <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>

                      <data value="2">(2)</data> -->
                              </div>
                           </div>

                           <h3 class="card-title">
                              <a href="#">dapatkan paket wisata untuk mengunjungi tempat-tempat wisata di Merauke</a>
                           </h3>

                           <address class="card-location">Merauke, Papua</address>

                        </div>

                     </div>
                  </li>

               </ul>

            </div>
         </section>


      </article>
   </main>





   <!-- 
    - #FOOTER
  -->

   <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">
      <div class="container">

         <div class="footer-top">

            <ul class="footer-list">

               <li>
                  <p class="footer-list-title">Top destination</p>
               </li>

               <li>
                  <a href="#" class="footer-link">Indonesia, Jakarta</a>
               </li>

               <li>
                  <a href="#" class="footer-link">Maldives, Malé</a>
               </li>

               <li>
                  <a href="#" class="footer-link">Australia, Canberra</a>
               </li>

               <li>
                  <a href="#" class="footer-link">Thailand, Bangkok</a>
               </li>

               <li>
                  <a href="#" class="footer-link">Morocco, Rabat</a>
               </li>

            </ul>

            <ul class="footer-list">

               <li>
                  <p class="footer-list-title">Categories</p>
               </li>

               <li>
                  <a href="#" class="footer-link">Travel</a>
               </li>

               <li>
                  <a href="#" class="footer-link">Lifestyle</a>
               </li>

               <li>
                  <a href="#" class="footer-link">Fashion</a>
               </li>

               <li>
                  <a href="#" class="footer-link">Education</a>
               </li>

               <li>
                  <a href="#" class="footer-link">Food & Drink</a>
               </li>

            </ul>

            <ul class="footer-list">

               <li>
                  <p class="footer-list-title">Quick links</p>
               </li>

               <li>
                  <a href="#" class="footer-link">About</a>
               </li>

               <li>
                  <a href="#" class="footer-link">Contact</a>
               </li>

               <li>
                  <a href="#" class="footer-link">Tours</a>
               </li>

               <li>
                  <a href="#" class="footer-link">Booking</a>
               </li>

               <li>
                  <a href="#" class="footer-link">Terms & Conditions</a>
               </li>

            </ul>

            <div class="footer-list">

               <p class="footer-list-title">Get a newsletter</p>

               <p class="newsletter-text">
                  For the latest deals and tips, travel no further than your inbox
               </p>

               <form action="" class="newsletter-form">
                  <input type="email" name="email" required placeholder="Email address" class="newsletter-input">

                  <button type="submit" class="btn btn-primary">Subscribe</button>
               </form>

            </div>

         </div>

         <div class="footer-bottom">

            <a href="#" class="logo">Tourest</a>

            <p class="copyright">
               &copy; 2022 <a href="#" class="copyright-link">codewithsadee</a>. All Rights Reserved
            </p>

            <ul class="social-list">

               <li>
                  <a href="#" class="social-link">
                     <ion-icon name="logo-facebook"></ion-icon>
                  </a>
               </li>

               <li>
                  <a href="#" class="social-link">
                     <ion-icon name="logo-twitter"></ion-icon>
                  </a>
               </li>

               <li>
                  <a href="#" class="social-link">
                     <ion-icon name="logo-instagram"></ion-icon>
                  </a>
               </li>

               <li>
                  <a href="#" class="social-link">
                     <ion-icon name="logo-linkedin"></ion-icon>
                  </a>
               </li>

               <li>
                  <a href="#" class="social-link">
                     <ion-icon name="logo-google"></ion-icon>
                  </a>
               </li>

            </ul>

         </div>

      </div>
   </footer>



   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

         <header class="section-header">
            <h2>Contact</h2>
            <p>Contact Us</p>
         </header>

         <div class="row gy-4">

            <div class="col-lg-6">

               <div class="row gy-4">
                  <div class="col-md-6">
                     <div class="info-box">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Address</h3>
                        <p>A108 Adam Street,<br>New York, NY 535022</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="info-box">
                        <i class="bi bi-telephone"></i>
                        <h3>Call Us</h3>
                        <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="info-box">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Us</h3>
                        <p>info@example.com<br>contact@example.com</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="info-box">
                        <i class="bi bi-clock"></i>
                        <h3>Open Hours</h3>
                        <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                     </div>
                  </div>
               </div>

            </div>

            <div class="col-lg-6">
               <form action="forms/contact.php" method="post" class="php-email-form">
                  <div class="row gy-4">

                     <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                     </div>

                     <div class="col-md-6 ">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                     </div>

                     <div class="col-md-12">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                     </div>

                     <div class="col-md-12">
                        <textarea class="form-control" name="message" rows="6" placeholder="Message"
                           required></textarea>
                     </div>

                     <div class="col-md-12 text-center">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>

                        <button type="submit">Send Message</button>
                     </div>

                  </div>
               </form>

            </div>

         </div>

      </div>

   </section><!-- End Contact Section -->




   <!-- 
    - #GO TO TOP
  -->

   <a href="#top" class="go-top" data-go-top aria-label="Go To Top">
      <ion-icon name="chevron-up-outline"></ion-icon>
   </a>





   <!-- 
    - custom js link
  -->
   <script src="<?php echo base_url(); ?>assets/travel3/assets/js/script.js"></script>

   <!-- 
    - ionicon link
  -->
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> -->

</body>

</html>