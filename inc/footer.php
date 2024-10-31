<?php
include 'admin/koneksi.php';

$querySetting = mysqli_query($koneksi, "SELECT * FROM general_setting ORDER BY id DESC");
$rowSetting = mysqli_fetch_assoc($querySetting);
?>

<footer id="footer" class="footer light-background">
    <div class="container">
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="container">
        <div class="copyright">
          <span>Copyright</span> <strong class="px-1 sitename"><?php echo $rowSetting['website_name'] ?></strong> <span>All Rights Reserved</span>
        </div>
      </div>
    </div>
  </footer>