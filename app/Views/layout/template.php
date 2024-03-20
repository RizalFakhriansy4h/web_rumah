<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?= $title; ?></title>
      <link rel="icon" href="/assets/hero/orange.ico" type="image/x-icon">
      <link rel="stylesheet" href="/assets/css/styles.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
      <style>
         .menu-container {
         overflow-x: scroll; 
         white-space: nowrap;
         }
         .card {
         width: 18rem;
         display: inline-block;
         margin-right: 10px;
         }
         .card-text {
         color: #212529; /* Warna teks default */
         font-size: 16px; /* Ukuran teks */
         }
      </style>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container">
            <!-- logo -->
            <a class="navbar-brand" href="/">
            <img src="https://www.homespot.id/icons/logo.svg" alt="Logo" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- navbar -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                     <a class="nav-link <?= ($title === "Beranda") ? 'active' : '' ?>" aria-current="page" href="/">Beranda</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link <?= ($title === "Asuransi") ? 'active' : '' ?>" href="/asuransi">Asuransi</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link <?= ($title === "Kontak") ? 'active' : '' ?>" href="/contact">Kontak</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link <?= ($title === "Tentang Kami") ? 'active' : '' ?>" href="/about">Tentang Kami</a>
                  </li>
               </ul>
               <!-- login -->
               <form class="d-flex">
               <?= (session()->has('logged')) ? '<a href="/logout" class="btn btn-danger" onclick="return confirm(\'Yakin mau logout?\')">Logout</a>' : '<a href="/login" class="btn btn-primary">Login</a>' ?>
               </form>
            </div>
         </div>
      </nav>

      <!-- render section -->
      <?= $this->renderSection('content'); ?>


      <!--footer-->
      <br>
      <br>
      <br>
      <footer class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <h5>Sponsored by:</h5>
                  <img src="https://www.homespot.id/icons/logo.svg" alt="Logo" class="img-fluid">
                  <img src="https://www.bitcorp.id/user-template/assets/img/Logo/Logobit.png" alt="Logo" class="img-fluid">
               </div>
               <div class="col-md-4">
                  <h5>About Us</h5>
                  <p>PT Beringin Inti Teknologi (BIT) Intiland Tower Lt 12A Jalan Jendral Sudirman No. 32 Jakarta Pusat 10220 Indonesia.</p>
               </div>
               <div class="col-md-4">
                  <h5>Contact</h5>
                  <ul class="list-unstyled">
                     <li>Email: support@homespot.id</li>
                     <li>Phone: +62 813-8900-1162</li>
                  </ul>
               </div>
            </div>
         </div>
      </footer>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      <script>
         const menuContainer = document.querySelector('.menu-container');
         
         menuContainer.addEventListener('mousedown', function(e) {
         // Hanya mulai geser jika tidak ada seleksi teks
         if (window.getSelection().toString() === '') {
           let startX = e.pageX - menuContainer.offsetLeft;
           let scrollLeft = menuContainer.scrollLeft;
         
           document.addEventListener('mousemove', function(e) {
             let moveX = e.pageX - menuContainer.offsetLeft;
             let walk = moveX - startX;
             menuContainer.scrollLeft = scrollLeft - walk;
           });
         
           document.addEventListener('mouseup', function() {
             document.removeEventListener('mousemove', null);
           });
         }
         });
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
   </body>
</html>