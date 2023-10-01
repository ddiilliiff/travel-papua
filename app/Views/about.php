<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tourest - Explore the World</title>

   <!-- 
    - favicon
  -->
   <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/travel3/favicon.svg" type="image/svg+xml">

   <!-- 
    - custom css link
  -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">

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
                  <a href="<?php echo base_url('#list'); ?>" class="navbar-link">Kembali</a>
               </li>
            </ul>

            <a href="#" class="btn btn-secondary">Login</a>

         </nav>

      </div>
   </header>





   <main>
      <article>


         <!-- 
        - #POPULAR
      -->

         <section class="section popular" id="tentang">
            <div class="container" style="text-align:justify">

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
                                 <img src="<?php echo base_url('upload'); ?>/<?php echo $d['gambar']; ?>" width="1140"
                                    height="1100" loading="lazy" alt="Malé, Maldives" class="img-cover">
                              </figure>

                              <div class="card-content">
                                 <p class="card-subtitle"><?php echo $d['nama_destinasi']; ?></p>

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
               <br>
               <br>
               <div class="btn-group">
                  <a href="#" class="btn btn-primary">Booking</a>
                  <a href="#" class="btn btn-primary">Pemandu Wisata</a>
                  <a href="#" class="btn btn-primary">Jasa Travel</a>
                  <a href="#" class="btn btn-primary">Translator</a>

                  <!-- <a href="#" class="btn btn-outline">Learn More</a> -->
               </div>
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

</body>

</html>