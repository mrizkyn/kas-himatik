<?php 
  require 'connection.php';
  checkLogin();
  $riwayat_pengeluaran = mysqli_query($conn, "SELECT * FROM riwayat_pengeluaran INNER JOIN user ON riwayat_pengeluaran.id_user = user.id_user ORDER BY tanggal DESC");
?>

<!DOCTYPE html>
<html>
<head>
  <?php include 'include/css.php'; ?>
  <title>Helpdesk</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  
  <?php include 'include/navbar.php'; ?>

  <?php include 'include/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm">
            <!-- <h1 class="m-0 text-dark">Helpdesk</h1> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Helpdesk : </h1>
                </div>
                <div class="card-body">
                    <!-- Tambahkan konten halaman helpdesk di sini -->
                    <ul>
                        <li> <h5>Dimana saya Bisa Mengganti Nama Lengkap Akun Saya?</h5>
                        <p>Jika Ingin Mengganti Nama Akun Anda <a href="profile.php">Klik Disini!</a></p></li>
                        <li> <h5>Dimana saya Bisa Mengganti Password Akun Saya?</h5>
                        <p>Jika Ingin Mengganti Password Akun Anda <a href="profile.php">Klik Disini!</a></p></li>
                        <li> <h5>Kritik dan Saran Perbaikan</h5>
                        <p><a href="mailto:m.rizky.n9190@gmail.com">Klik Disini! untuk Menghubungi Admin</a> || Terimakasih atas Kritik dan Saran yang Diberikan </p></li>
                       
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

    </section>

</body>
</html>
