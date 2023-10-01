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
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/travel3/favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="<?php echo base_url();?>css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap"
    rel="stylesheet">

    <style>
        .header{
   
    position: fixed; /* Fix the navbar at the top */
    width: 100%; /* Full width */
    top: 0; /* Stick to the top of the viewport */
    z-index: 1000; /* Ensure it's above other content */
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
    <a href="<?php echo base_url('#list');?>" class="navbar-link">Kembali</a>
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

          <p class="section-subtitle">Featured Tours</p>

          <h2 class="h2 section-title">Jasa Travel</h2>
          <div class="container-travel">
        <div class="form-column">
            <div class="form-row">
                <label for="departure1">Departure:</label>
                <input type="text" id="departure1" placeholder="Departure">
            </div>
            <div class="form-row">
                <label for="destination1">Destination:</label>
                <input type="text" id="destination1" placeholder="Destination">
            </div>
        </div>
        <div class="form-column">
            <div class="form-row">
                <label for="departure2">Hotel Tujuan:</label>
                <input type="text" id="departure2" placeholder="Departure">
            </div>
            <div class="form-row">
                <label for="destination2">Total:</label>
                <input type="text" id="destination2" placeholder="Destination">
            </div>
        </div>
    </div>
         
        
          <br>
          <div class="btn-group">
                <a href="#" class="btn btn-primary">Cek</a>
              </div>
        </div>
      </section>







    </article>
  </main>








  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top aria-label="Go To Top">
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="<?php echo base_url();?>assets/travel3/assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>