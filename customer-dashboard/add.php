<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.php">Alex Smith</a></h1>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="user.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>My Account</span></a></li>
          <li><a href="index.php" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Dashboard</span></a></li>
          <li><a href="#add" class="nav-link scrollto active"><i class="bx bx-add-to-queue"></i> <span>Add Pet</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="add" class="contact">
      <div class="container">
  
        <div class="section-title">
          <h2>Animal Information/ <span>Add</span></h2>
        </div>
  
        <div class="row" data-aos="fade-in">
  
          <div class="mt-5 mt-lg-0 d-flex align-items-stretch">
           
            <form method="post" action="../customer-dashboard/add_process.php" >
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">PetName:</label>
                  <input class="form-control" type="text" id="name" name="name" required>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="species">Species:</label>
                  <input class="form-control" type="text" id="species" name="species" required>
                </div>
  
                <div class="form-group col-md-6">
                  <label for="breed">Breed:</label>
                  <input class="form-control" type="text" id="breed" name="breed" required>

                </div>
              </div>
              <div class="row">
                <div class="form-group" style="width: 100%; max-width: 180px; margin-bottom: 10px;">
                  <label for="sex" style="font-size: 12px;">Sex</label>
                  <select class="form-control" id="sex" name="sex" required style="font-size: 12px;">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                
                <div class="form-group" style="width: 100%; max-width: 180px; margin-bottom: 10px;">
                  <label for="age" style="font-size: 12px;">Age</label>
                  <input type="number" class="form-control" name="age" id="age" required style="font-size: 12px;">
                </div>
                
                <div class="form-group" style="width: 100%; max-width: 180px; margin-bottom: 10px;">
                  <label for="date" style="font-size: 12px;">Birthdate</label>
                  <input type="date" class="form-control" name="date" id="date" required style="font-size: 12px;">
                </div>
                     
              </div>



        <!-- <label for="sex">Sex:</label>
        <input type="text" id="sex" name="sex" required><br>

        <label for="age">Age:</label>
        <input type="text" id="age" name="age" required><br>

        <label for="date">Birthdate:</label>
        <input type="text" id="date" name="date" required><br>-->
        
        <button type="submit" name="submit">Add Data</button>
        </form> 
       
         <!--<form method="post" action="../customer-dashboard/add_process.php" class="php-email-form">
              
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name" required>
                </div>
              </div>
  
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="species">Species</label>
                  <input type="text" class="form-control" name="species" id="species" required>
                </div>
  
                <div class="form-group col-md-6">
                  <label for="breed">Breed</label>
                  <input type="text" class="form-control" name="breed" id="breed" required>
                </div>
              </div>
              
              <div class="row">
                <div class="form-group" style="width: 100%; max-width: 180px; margin-bottom: 10px;">
                  <label for="sex" style="font-size: 12px;">Sex</label>
                  <select class="form-control" id="sex" name="sex" required style="font-size: 12px;">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                
                <div class="form-group" style="width: 100%; max-width: 180px; margin-bottom: 10px;">
                  <label for="age" style="font-size: 12px;">Age</label>
                  <input type="number" class="form-control" name="age" id="age" required style="font-size: 12px;">
                </div>
                
                <div class="form-group" style="width: 100%; max-width: 180px; margin-bottom: 10px;">
                  <label for="date" style="font-size: 12px;">Birthdate</label>
                  <input type="date" class="form-control" name="date" id="date" required style="font-size: 12px;">
                </div>
                     
              </div>
              <div class="text-center" style="display: inline-block;"><button type="submit" name="submit">Add</button></div>
              <div class="text-center" style="display: inline-block;">
                <button type="reset">Reset</button>
              </div>
            </form>-->
    
          </div>
  
        </div>
  
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/daterangepicker.js"></script>
</body>

</html>