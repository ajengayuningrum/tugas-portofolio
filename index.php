<?php include 'admin/koneksi.php';
$queryAbout = mysqli_query($koneksi,  "SELECT * FROM about ORDER BY id DESC");
$querySetting = mysqli_query($koneksi, "SELECT * FROM general_setting ORDER BY id DESC");
$querySkills = mysqli_query($koneksi,  "SELECT * FROM skills ORDER BY id ASC");
$queryResume = mysqli_query($koneksi,  "SELECT * FROM resume ORDER BY id ASC");
$queryPendidikan = mysqli_query($koneksi,  "SELECT * FROM pendidikan ORDER BY id ASC");
$queryPortofolio = mysqli_query($koneksi,  "SELECT * FROM portofolio ORDER BY id ASC");

$rowSetting = mysqli_fetch_assoc($querySetting);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <?php include 'inc/head.php'; ?>

  <!-- =======================================================
  * Template Name: Lonely
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-lonely/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Ajeng Ayuningrum</h1>
      </a>

      <?php include 'inc/nav.php'; ?>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <!-- style="background: url(assets/depan/img/foto2.jpeg) top center no-repeat;" -->
    <section id="hero" class="hero section dark-background">
      <img src="assets/depan/img/foto3.jpeg" alt="">
      <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
        <h1 style="font-size: 800%;">B O N J O U R!</h1>
        <h4 style="font-size: 400%;">Comment ça va?<br></h4>
        <a href="#about" class="btn-scroll" title="Scroll Down"><i class="bi bi-chevron-down"></i></a>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>À propos de moi</h2>
        <?php while ($rowAbout = mysqli_fetch_assoc($queryAbout)): ?>
        <p style="font-size: x-large; margin-bottom: 30px;"><?php echo $rowAbout['tentang'] ?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        
          <div class="row gy-4 justify-content-center">
            <div class="col-lg-4">
              <img width="400" name="foto" src="admin/upload/<?php echo $rowAbout['foto'] ?>" alt="">
            </div>
            <div class="col-lg-8 content">
              <div class="row">
                <div class="col-lg-10" style="font-size: x-large; margin-top: 70px;">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i><strong>Née :</strong> <span><?php echo $rowAbout['tanggal_lahir'] ?></span></li>
                    <li><i class="bi bi-chevron-right"></i><strong>Le Numéro de Téléphone :</strong> <span><?php echo $rowAbout['nomor_handphone'] ?></span></li>
                    <li><i class="bi bi-chevron-right"></i><strong>Ville :</strong> <span><?php echo $rowAbout['kota'] ?></span></li>
                    <li><i class="bi bi-chevron-right"></i><strong>Diplôme Universitaire :</strong> <span><?php echo $rowAbout['jurusan'] ?></span></li>
                    <li><i class="bi bi-chevron-right"></i><strong>Courrier électronique:</strong> <span><?php echo $rowAbout['email'] ?></span></li>
                  </ul>
                </div>
              </div>
            </div>
        
      </div>
      <?php endwhile ?>
    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="section-title">


      <div class="container-sm section-title" data-aos="fade-up">
        <h2 style="margin-top: -70px;">Langues</h2>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <?php while ($rowSkills = mysqli_fetch_assoc($querySkills)) : ?>
            <div class="row">
              <div class="col-lg-6">
                <div class="">
                  <ul>
                    <li>
                      <h4 style="font-size: xx-large;"><?php echo $rowSkills['skill'] ?></h4>
                    </li>
                  </ul>
                  <p style="font-size: x-large;" class="mb-1"><?php echo $rowSkills['deskripsi_skill'] ?></p>
                </div>
              </div>
            </div>
          <?php endwhile ?>
        </div>
      </div>


    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Résumé</h2>

      </div><!-- End Section Title -->
      <div class="container">
        <div class="row">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="">
              <h2 class="resume-title">Expériences Professionnelles</h2>
              <?php while ($rowResume = mysqli_fetch_assoc($queryResume)) : ?>
                <div class="resume-item">
                  <h4 class="" style="font-size: 150%;"><?php echo $rowResume['profesi'] ?></h4>
                  <h5 style="font-size: 120%;"><?php echo $rowResume['tahun'] ?></h5>
                  <p style="font-size: 120%;"><em><?php echo $rowResume['tempat'] ?></em></p>
                  <ul>
                    <li style="font-size: 130%;"><?php echo $rowResume['deskripsi_profesi'] ?></li>
                  </ul>
                </div>
              <?php endwhile ?>
            </div>
          </div>
            <!-- Edn Resume Item -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <h3 class="resume-title">Éducation</h3>
              <?php while ($rowPendidikan = mysqli_fetch_assoc($queryPendidikan)) : ?>
              <div class="resume-item">
                <h4 style="font-size: 150%;"><?php echo $rowPendidikan['jurusan'] ?></h4>
                <h5 style="font-size: 120%;"><?php echo $rowPendidikan['tahun'] ?></h5>
                <p style="font-size: 130%;"><em><?php echo $rowPendidikan['universitas'] ?></em></p>
              </div><!-- Edn Resume Item -->
              <?php endwhile ?>
            </div>
        </div>

    </section><!-- /Resume Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 style="margin-top: -30px;">Portfolio</h2>
        <p style="font-size: x-large;">Voici quelques exemples de mes portfolios.</p>
      </div><!-- End Section Title -->
      <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
          </ul><!-- End Portfolio Filters -->
          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            <?php while ($rowPortofolio = mysqli_fetch_assoc($queryPortofolio)) : ?>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="admin/upload/<?php echo $rowPortofolio['foto'] ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?php echo $rowPortofolio['deskripsi_foto'] ?></h4>
              </div>
            </div><!-- End Portfolio Item -->
            <?php endwhile ?>
        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p><?php echo $rowSetting['website_address']; ?></p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p><?php echo $rowSetting['website_phone']; ?></p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p><?php echo $rowSetting['website_email']; ?></p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <?php include 'inc/footer.php'; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <?php include 'inc/js.php' ?>

</body>

</html>