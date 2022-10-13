<?php session_start(); include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume - v4.7.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">


<?php 
$id = $_GET['id'];
$kueri = mysqli_query($conn, "SELECT * FROM portfolio WHERE id='$id'");
$row = mysqli_fetch_array($kueri);
 ?>

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

<?php $qr = mysqli_query($conn, "SELECT * FROM gambar WHERE id_portfolio = '$id'");
while ($vw=mysqli_fetch_array($qr)) {
 ?>
                <div class="swiper-slide">
                  <h3><?php echo $vw['note']; ?></h3>
                  <img src="assets/img/portfolio/<?php echo $vw['gambar'] ?>" alt="">
                </div>
<?php } ?>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>


          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3><?php echo $row['nama']; ?></h3>
              <ul>
                <li><strong>Category</strong>: <?php echo $row['category']; ?></li>
                <li><strong>Client</strong>: <?php echo $row['client']; ?></li>
                <li><strong>Project date</strong>: <?php echo $row['date']; ?></li>
                <li><strong>Project URL</strong>: <a href="<?php echo $row['url']; ?>"><?php echo $row['url']; ?></a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>More details about this project</h2>
              <p>
                <?php echo $row['detail']; ?>
              </p>
            </div>
          </div>

        </div>

      </div>
      <a href="index.php" class="btn btn-primary ">Back To Previous Page</a>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>