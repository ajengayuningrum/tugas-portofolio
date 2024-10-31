<?php
session_start();
include 'koneksi.php';

// jika button simpan ditekan 
if (isset($_POST['simpan'])) {
    $deskripsi_foto = mysqli_real_escape_string($koneksi,$_POST['deskripsi_foto']);
    //$_POST: form input name=''
    //$_GET : url ?param='nilai'
    //$_FILES : ngambil nilai dari input type file
    if (!empty($_FILES['foto']['name'])) {
        $nama_foto =  $_FILES['foto']['name'];
        $ukuran =  $_FILES['foto']['size'];

        $ext = array('png', 'jpg', 'jpeg', 'jfif');
        $extFoto  = pathinfo($nama_foto, PATHINFO_EXTENSION);

        //jika extension foto tidak ada ext yang terdaftar di array ext maka foto tidak boleh diupload
        if (!in_array($extFoto, $ext)) {
            echo "Ext tidak ditemukan";
            die;
        } else {
            //pindahkan gambar dari tmp folder ke folder yang sudah kita buat
            move_uploaded_file($_FILES['foto']['tmp_name'], 'upload/' . $nama_foto);

            $insert =  mysqli_query($koneksi, "INSERT INTO portofolio (deskripsi_foto, foto) VALUES ('$deskripsi_foto', '$nama_foto')");
        }
    } else {
        $insert =  mysqli_query($koneksi, "INSERT INTO portofolio (deskripsi_foto) VALUES ('$deskripsi_foto')");
    }
    header("location:portofolio.php?tambah=berhasil");
}

$id  = isset($_GET['edit']) ?  $_GET['edit'] : '';
$editUser = mysqli_query($koneksi, "SELECT * FROM portofolio WHERE id = '$id'");
$rowEdit = mysqli_fetch_assoc($editUser);

if (isset($_POST['edit'])) {
    $deskripsi_foto = mysqli_real_escape_string($koneksi,$_POST['deskripsi_foto']);

    //jika user ingin memasukkan gambar
    if (!empty($_FILES['foto']['name'])) {
        $nama_foto =  $_FILES['foto']['name'];
        $ukuran =  $_FILES['foto']['size'];

        $ext = array('png', 'jpg', 'jpeg', 'jfif');
        $extFoto  = pathinfo($nama_foto, PATHINFO_EXTENSION);

        if (!in_array($extFoto, $ext)) {
            echo "Extensi gambar tidak ditemukan";
            die;
        }else {
            unlink('upload/' . $rowEdit['foto']);
            move_uploaded_file($_FILES['foto']['tmp_name'], 'upload/' . $nama_foto);
            //coding untuk update atau merubah ada di sini
            $update =  mysqli_query($koneksi, "UPDATE portofolio SET deskripsi_foto='$deskripsi_foto', foto='$nama_foto' WHERE id = '$id'");
            header("location:portofolio.php?ubah=berhasil");
        }
    }else{
        //ini kondisi kalo user tidak ingin memasukkan gambar
        $update =  mysqli_query($koneksi, "UPDATE portofolio SET deskripsi_foto='$deskripsi_foto' WHERE id = '$id'");
        header("location:portofolio.php?ubah=berhasil");
    }

    //jika button edit di klik

    $update = mysqli_query($koneksi, "UPDATE about SET deskripsi_foto='$deskripsi_foto' WHERE id = '$id'");
    header("location:portofolio.php?ubah=berhasil");
}
?>


<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <?php include 'inc/head.php'; ?>

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php include 'inc/sidebar.php'; ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <?php include 'inc/nav.php'; ?>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header"><?php echo isset($_GET['edit']) ? 'Edit' : 'Tambah' ?> Portofolio</div>
                                    <div class="card-body">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="mb-3 row">
                                                <div class="col-sm-6">
                                                    <label for="" class="form-label">Deskripsi</label>
                                                    <input type="text" class="form-control" id="" name="deskripsi_foto" placeholder="Masukkan deskripsi" required
                                                        value="<?php echo isset($_GET['edit']) ? $rowEdit['deskripsi_foto'] : '' ?>">
                                                </div>
                                            </div>
                                            <!-- <div class=" mb-3 row">
                                                <div class="col-sm-12">
                                                    <label for="" class="form-label">Password</label>
                                                    <input type="password" name="password" required class="form-control" id="">
                                                </div>
                                            </div> -->
                                            <div class=" mb-3 row">
                                                <div class="col-sm-12">
                                                    <label for="" class="form-label">Foto</label>
                                                    <input type="file" name="foto">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-primary" name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>" type="submit">Simpan</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️ by
                                <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                            </div>
                            <div>
                                <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                                <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                                <a
                                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                                    target="_blank"
                                    class="footer-link me-4">Documentation</a>

                                <a
                                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                                    target="_blank"
                                    class="footer-link me-4">Support</a>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>

                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- / Layout wrapper -->

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="../assets/admin/assets/admin/assets/vendor/libs/jquery/jquery.js"></script>
        <script src="../assets/admin/assets/vendor/libs/popper/popper.js"></script>
        <script src="../assets/admin/assets/vendor/js/bootstrap.js"></script>
        <script src="../assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

        <script src="../assets/admin/assets/vendor/js/menu.js"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="../assets/admin/assets/vendor/libs/apex-charts/apexcharts.js"></script>

        <!-- Main JS -->
        <script src="../assets/admin/assets/js/main.js"></script>

        <!-- Page JS -->
        <script src="../assets/admin/assets/js/dashboards-analytics.js"></script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>