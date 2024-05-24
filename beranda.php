<!DOCTYPE html>

<?php
include "connection/koneksi.php";
session_start();
ob_start();

$id = $_SESSION['id_user'];

if(isset ($_SESSION['username'])){
  
  $query = "select * from tb_user natural join tb_level where id_user = $id";

  mysqli_query($conn, $query);
  $sql = mysqli_query($conn, $query);

  //Jumlah Administrator
  $query_jml_adm = "select count(*) AS jumlah_adm from tb_user natural join tb_level where id_level = 1 and status = 'aktif'";
  $sql_jml_adm = mysqli_query($conn, $query_jml_adm);
  $result_adm = mysqli_fetch_array($sql_jml_adm);

  //Jumlah Waiter
  $query_jml_wtr = "select count(*) AS jumlah_wtr from tb_user natural join tb_level where id_level = 2 and status = 'aktif'";
  $sql_jml_wtr = mysqli_query($conn, $query_jml_wtr);
  $result_wtr = mysqli_fetch_array($sql_jml_wtr);

  //Jumlah Kasir
  $query_jml_ksr = "select count(*) AS jumlah_ksr from tb_user natural join tb_level where id_level = 3 and status = 'aktif'";
  $sql_jml_ksr = mysqli_query($conn, $query_jml_ksr);
  $result_ksr = mysqli_fetch_array($sql_jml_ksr);

  //Jumlah Owner
  $query_jml_own = "select count(*) AS jumlah_own from tb_user natural join tb_level where id_level = 4 and status = 'aktif'";
  $sql_jml_own = mysqli_query($conn, $query_jml_own);
  $result_own = mysqli_fetch_array($sql_jml_own);

  //Jumlah Pelanggan
  $query_jml_plg = "select count(*) AS jumlah_plg from tb_user natural join tb_level where id_level = 5 and status = 'aktif'";
  $sql_jml_plg = mysqli_query($conn, $query_jml_plg);
  $result_plg = mysqli_fetch_array($sql_jml_plg);

  while($r = mysqli_fetch_array($sql)){
    
    $nama_user = $r['nama_user'];
    //$id_level = $r['id_level'];

?>

<html lang="en">
<head>
<title>Beranda</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="template/dashboard/css/bootstrap.min.css" />
<link rel="stylesheet" href="template/dashboard/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="template/dashboard/css/fullcalendar.css" />
<link rel="stylesheet" href="template/dashboard/css/matrix-style.css" />
<link rel="stylesheet" href="template/dashboard/css/matrix-media.css" />
<link href="template/dashboard/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="template/dashboard/css/jquery.gritter.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
    <!-- font awesome cdn link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
</head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.php">Beranda</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome <?php echo $r['nama_user'];?></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i><?php echo "&nbsp;&nbsp;".$r['nama_level'];?></a></li>
        <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="logout.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->

<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="beranda.php" class="visible-phone"><i class="icon icon-home"></i> Beranda</a>
  <ul>
  <?php
    if($r['id_level'] == 1){
  ?>
    <li class="active"><a href="beranda.php"><i class="icon icon-home"></i> <span>Beranda</span></a> </li>
    <li> <a href="entri_referensi.php"><i class="icon icon-tasks"></i> <span>Entri Referensi</span></a> </li>
    <li> <a href="entri_order.php"><i class="icon icon-shopping-cart"></i> <span>Entri Order</span></a> </li>
    <li> <a href="entri_transaksi.php"><i class="icon icon-inbox"></i> <span>Entri Transaksi</span></a> </li>
    <li> <a href="generate_laporan.php"><i class="icon icon-print"></i> <span>Generate Laporan</span></a> </li>
    <li> <a href="logout.php"><i class="icon icon-share-alt"></i></i> <span>Logout</span></a> </li>
  <?php
    } else if($r['id_level'] == 2){
  ?>
    <li class="active"><a href="beranda.php"><i class="icon icon-home"></i> <span>Beranda</span></a> </li>
    <li> <a href="entri_order.php"><i class="icon icon-shopping-cart"></i> <span>Entri Order</span></a> </li>
    <li> <a href="generate_laporan.php"><i class="icon icon-print"></i> <span>Generate Laporan</span></a> </li>
    <li> <a href="logout.php"><i class="icon icon-share-alt"></i> <span>Logout</span></a> </li>
  <?php
    } else if($r['id_level'] == 3){
  ?>
    <li class="active"><a href="beranda.php"><i class="icon icon-home"></i> <span>Beranda</span></a> </li>
    <li> <a href="entri_transaksi.php"><i class="icon icon-inbox"></i> <span>Entri Transaksi</span></a> </li>
    <li> <a href="generate_laporan.php"><i class="icon icon-print"></i> <span>Generate Laporan</span></a> </li>
    <li> <a href="logout.php"> <i class="icon icon-share-alt"></i> <span>Logout</span></a> </li>
  <?php
    } else if($r['id_level'] == 4){
  ?>
    <li class="active"><a href="beranda.php"><i class="icon icon-home"></i> <span>Beranda</span></a> </li>
    <li> <a href="generate_laporan.php"><i class="icon icon-print"></i> <span>Generate Laporan</span></a> </li>
    <li> <a href="logout.php"><i class="icon icon-share-alt"></i> <span>Logout</span></a> </li>
  <?php
    } else if($r['id_level'] == 5){
  ?>
    <li class="active"><a href="beranda.php"><i class="icon icon-home"></i> <span>Beranda</span></a> </li>
    <li> <a href="entri_order.php"><i class="icon icon-shopping-cart"></i> <span>Entri Order</span></a> </li>
    <li> <a href="logout.php"><i class="icon icon-share-alt"></i> <span>Logout</span></a> </li>
  <?php
    }
  ?>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="beranda.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Beranda</a></div>
  </div>
<!--End-breadcrumbs-->
  
<!--Action boxes-->
  <div class="container-fluid">
    <div class="row-fluid">
    <?php
      if($r['id_level'] == 1 || $r['id_level'] == 2 || $r['id_level'] == 3){
    ?>
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Data Pengguna</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span3">
              <div class="widget-box">
                <div class="widget-content nopadding">
                  <ul class="site-stats quick-actions">
                    <li class="bg_lb"><i class="icon-user"></i> <strong><?php echo $result_adm['jumlah_adm']; ?></strong> <small>Administrator</small></li>
                    <li class="bg_ly"><i class="icon-user"></i> <strong><?php echo $result_wtr['jumlah_wtr']; ?></strong> <small>Total Waiter</small></li>
                    <li class="bg_lg"><i class="icon-user"></i> <strong><?php echo $result_ksr['jumlah_ksr']; ?></strong> <small>Total Kasir</small></li>
                    <li class="bg_ls"><i class="icon-user"></i> <strong><?php echo $result_own['jumlah_own']; ?></strong> <small>Total Owner</small></li>
                    <li class="bg_lo"><i class="icon-user"></i> <strong><?php echo $result_plg['jumlah_plg']; ?></strong> <small>Total Pelanggan</small></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="span9">
              <!--DATA WAITER-->
              <div class="widget-box">
                <?php
                  $query_data_wtr = "select * from tb_user where id_level = 2";
                  $sql_data_wtr = mysqli_query($conn, $query_data_wtr);
                  $no = 1;
                ?>

                <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                  <h5>Data Waiter</h5>
                </div>
                <div class="widget-content nopadding">
                  <table class="table table-bordered" style="width: 100%">
                    <thead>
                      <tr>
                        <th style="width:5%">No.</th>
                        <th style="width:25%">Nama</th>
                        <th style="width:30%">Username</th>
                        <th style="width:20%">Status</th>
                        <th style="width:20%">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        while($r_dt_wtr = mysqli_fetch_array($sql_data_wtr)){
                      ?>
                        <tr class="odd gradeX">
                          <td><center><?php echo $no++; ?>.</center></td>
                          <td><?php echo $r_dt_wtr['nama_user']; ?></td>
                          <td><?php echo $r_dt_wtr['username']; ?></td>
                          <td><?php echo $r_dt_wtr['status']; ?></td>
                          <td>
                            <form action="" method="post">
                            <?php 
                              if($r_dt_wtr['status'] == 'aktif'){
                            ?>
                                <button name="unvalidasi" value="<?php echo $r_dt_wtr['id_user']; ?>" class="btn btn-warning btn-mini">
                                  <i class='icon icon-remove'></i>
                                </button>
                            <?php 
                              }
                            ?>

                            <?php 
                              if($r_dt_wtr['status'] == 'nonaktif'){
                            ?>
                                <button name="validasi" value="<?php echo $r_dt_wtr['id_user']; ?>" class="btn btn-info btn-mini"><i class='icon icon-ok'></i></button>
                                <button name="hapus_user" value="<?php echo $r_dt_wtr['id_user']; ?>" class="btn btn-danger btn-mini"><i class='icon icon-trash'></i></button>
                            <?php 
                              }
                            ?>
                            </form>
                          </td>
                        </tr>
                      <?php
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--DATA KASIR-->
              <div class="widget-box">
                <?php
                  $query_data_ksr = "select * from tb_user where id_level = 3";
                  $sql_data_ksr = mysqli_query($conn, $query_data_ksr);
                  $no_ksr = 1;
                ?>

                <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                  <h5>Data Kasir</h5>
                </div>
                <div class="widget-content nopadding">
                  <table class="table table-bordered table-striped " style="width: 100%">
                    <thead>
                      <tr>
                        <th style="width:5%">No.</th>
                        <th style="width:25%">Nama</th>
                        <th style="width:30%">Username</th>
                        <th style="width:20%">Status</th>
                        <th style="width:20%">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        while($r_dt_ksr = mysqli_fetch_array($sql_data_ksr)){
                      ?>
                        <tr class="odd gradeX">
                          <td><center><?php echo $no_ksr++; ?>.</center></td>
                          <td><?php echo $r_dt_ksr['nama_user']; ?></td>
                          <td><?php echo $r_dt_ksr['username']; ?></td>
                          <td><?php echo $r_dt_ksr['status']; ?></td>
                          <td>
                            <form action="" method="post">
                            <?php 
                              if($r_dt_ksr['status'] == 'aktif'){
                            ?>
                                <button name="unvalidasi" value="<?php echo $r_dt_ksr['id_user']; ?>" class="btn btn-warning btn-mini">
                                  <i class='icon icon-remove'></i>
                                </button>
                            <?php 
                              }
                            ?>

                            <?php 
                              if($r_dt_ksr['status'] == 'nonaktif'){
                            ?>
                                <button name="validasi" value="<?php echo $r_dt_ksr['id_user']; ?>" class="btn btn-info btn-mini"><i class='icon icon-ok'></i></button>
                                <button name="hapus_user" value="<?php echo $r_dt_ksr['id_user']; ?>" class="btn btn-danger btn-mini"><i class='icon icon-trash'></i></button>
                            <?php 
                              }
                            ?>
                            </form>
                          </td>
                        </tr>
                      <?php
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>

              <!--DATA OWNER-->
              <div class="widget-box">
                <?php
                  $query_data_own = "select * from tb_user where id_level = 4";
                  $sql_data_own = mysqli_query($conn, $query_data_own);
                  $no_own = 1;
                ?>

                <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                  <h5>Data Owner</h5>
                </div>
                <div class="widget-content nopadding">
                  <table class="table table-bordered table-striped" style="width: 100%">
                    <thead>
                      <tr>
                        <th style="width:5%">No.</th>
                        <th style="width:25%">Nama</th>
                        <th style="width:30%">Username</th>
                        <th style="width:20%">Status</th>
                        <th style="width:20%">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        while($r_dt_own = mysqli_fetch_array($sql_data_own)){
                      ?>
                        <tr class="odd gradeX">
                          <td><center><?php echo $no_own++; ?>.</center></td>
                          <td><?php echo $r_dt_own['nama_user']; ?></td>
                          <td><?php echo $r_dt_own['username']; ?></td>
                          <td><?php echo $r_dt_own['status']; ?></td>
                          <td>
                            <form action="" method="post">
                            <?php 
                              if($r_dt_own['status'] == 'aktif'){
                            ?>
                                <button name="unvalidasi" value="<?php echo $r_dt_own['id_user']; ?>" class="btn btn-warning btn-mini">
                                  <i class='icon icon-remove'></i>
                                </button>
                            <?php 
                              }
                            ?>

                            <?php 
                              if($r_dt_own['status'] == 'nonaktif'){
                            ?>
                                <button name="validasi" value="<?php echo $r_dt_own['id_user']; ?>" class="btn btn-info btn-mini"><i class='icon icon-ok'></i></button>
                                <button name="hapus_user" value="<?php echo $r_dt_own['id_user']; ?>" class="btn btn-danger btn-mini"><i class='icon icon-trash'></i></button>
                            <?php 
                              }
                            ?>
                            </form>
                          </td>
                        </tr>
                      <?php
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>

              <!--DATA PELANGGAN-->
              <div class="widget-box">
                <?php
                  $query_data_plg = "select * from tb_user where id_level = 5";
                  $sql_data_plg = mysqli_query($conn, $query_data_plg);
                  $no_plg = 1;
                ?>

                <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                  <h5>Data Pelanggan</h5>
                </div>
                <div class="widget-content nopadding">
                  <table class="table table-bordered table-striped" style="width: 100%">
                    <thead>
                      <tr>
                        <th style="width:5%">No.</th>
                        <th style="width:25%">Nama</th>
                        <th style="width:30%">Username</th>
                        <th style="width:20%">Status</th>
                        <th style="width:20%">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        while($r_dt_plg = mysqli_fetch_array($sql_data_plg)){
                      ?>
                        <tr class="odd gradeX">
                          <td><center><?php echo $no_plg++; ?>.</center></td>
                          <td><?php echo $r_dt_plg['nama_user']; ?></td>
                          <td><?php echo $r_dt_plg['username']; ?></td>
                          <td><?php echo $r_dt_plg['status']; ?></td>
                          <td>
                            <form action="" method="post">
                            <?php 
                              if($r_dt_plg['status'] == 'aktif'){
                            ?>
                                <button name="unvalidasi" value="<?php echo $r_dt_plg['id_user']; ?>" class="btn btn-warning btn-mini">
                                  <i class='icon icon-remove'></i>
                                </button>
                            <?php 
                              }
                            ?>

                            <?php 
                              if($r_dt_plg['status'] == 'nonaktif'){
                            ?>
                                <button name="validasi" value="<?php echo $r_dt_plg['id_user']; ?>" class="btn btn-info btn-mini"><i class='icon icon-ok'></i></button>
                                <button name="hapus_user" value="<?php echo $r_dt_plg['id_user']; ?>" class="btn btn-danger btn-mini"><i class='icon icon-trash'></i></button>
                            <?php 
                              }
                            ?>
                            </form>
                          </td>
                        </tr>
                      <?php
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
                <?php
                  if(isset($_POST['hapus_user'])){
                    $id_user = $_POST['hapus_user'];
                    //echo $id_user;
                    $query_hapus_user = "delete from tb_user where id_user = $id_user";
                    $sql_hapus_user = mysqli_query($conn, $query_hapus_user);
                    if($sql_hapus_user){
                      header('location: beranda.php');
                      //$_SESSION['daftar'] = 'sukses';
                    }
                  }

                  if(isset($_POST['validasi'])){
                    $id_user = $_POST['validasi'];
                    //echo $id_user;
                    $query_validasi = "update tb_user set status = 'aktif' where id_user = $id_user";
                    $sql_validasi = mysqli_query($conn, $query_validasi);
                    if($sql_validasi){
                      header('location: beranda.php');
                      //$_SESSION['daftar'] = 'sukses';
                    }
                  }

                  if(isset($_POST['unvalidasi'])){
                    $id_user = $_POST['unvalidasi'];
                    //echo $id_user;
                    $query_unvalidasi = "update tb_user set status = 'nonaktif' where id_user = $id_user";
                    $sql_unvalidasi = mysqli_query($conn, $query_unvalidasi);
                    if($sql_unvalidasi){
                      header('location: beranda.php');
                      //$_SESSION['daftar'] = 'sukses';
                    }
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
        } else {
      ?>
      <div class="alert alert-orange alert-block">
      <div class="content">
        <h3>SEKARANG ANDA BISA MERASAKAN ENERGI</h3>
        <h1>awali hari Anda dengan<br />kopi hitam</h1>
        <button class="btn">Beli Sekarang</button>
      </div>
    </div>

    <!-- header section ends -->

    <!-- about section start -->
    <section class="about" id="about">
      <div class="container">
        <div class="image">
          <img src="img/play.webp" />
        </div>

        <div class="about-content">
          <h4>PROSES PEMBUATAN KOPI LANGSUNG.</h4>
          <h1>
            kami menyiarkan langsung pembuatan kopi <br />
            kami
          </h1>
          <h3>
            kami di sini untuk mendengarkan dari Anda memberikan keunggulan
          </h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do<br />
            eiusmod tempor incididunt ut labore et dolore magna aliqua.<br />
            Ut enim ad minim .
          </p>
          <img src="img/sign.webp" />
        </div>
      </div>
    </section>
    <!-- about section end -->

    <!-- blog section start -->

    <section class="blog" id="blog">
      <h1 class="heading">kita <span>Blog</span></h1>
      <p class="heading-description">
        baca blog kami dan ketahui lebih banyak tentang artikel pembaruan
        terbaru kami..
      </p>

      <div class="container">
        <div class="post">
          <div class="blog-img">
            <img src="img/post1.jpg" />
            <span>24<br />JUN</span>
          </div>

          <div class="blog-content">
            <h3>BY ADMIN | <span> Kopi Puncak </span></h3>
            <h1>semua jenis kue, puff, kue kering</h1>
          </div>
        </div>

        <div class="post">
          <div class="blog-img">
            <img src="img/post2.jpg" />
            <span>24<br />JUN</span>
          </div>

          <div class="blog-content">
            <h3>BY ADMIN | <span> COPI </span></h3>
            <h1>semua jenis kue, puff, kue kering</h1>
          </div>
        </div>

        <div class="post">
          <div class="blog-img">
            <img src="img/post3.jpg" />
            <span>24<br />JUN</span>
          </div>

          <div class="blog-content">
            <h3>BY ADMIN | <span> CAKE </span></h3>
            <h1>semua jenis kue, puff, kue kering</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="blog" id="blog">
      <h1 class="heading">Produk <span>Kami</span></h1>
      <p class="heading-description">
        Kami Memberikan dan membuat kopi sesuai keinginan anda.
      </p>

      <div class="container">
        <div class="post">
          <div class="blog-img">
            <img src="img/1.jpg" />
          </div>
          <div class="blog-content">
            <h1>semua jenis kue, puff, kue kering</h1>
            <i class="bi bi-cart-check-fill"></i>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-cart-check-fill"
              viewBox="0 0 16 16">
              <path
                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z" />
            </svg>
          </div>
        </div>

        <div class="post">
          <div class="blog-img">
            <img src="img/2.jpg" />
          </div>

          <div class="blog-content">
            <h3>Kopi <span> Bemotif</span></h3>
            <h1>semua jenis kue, puff, kue kering</h1>
            <i class="bi bi-cart-check-fill"></i>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-cart-check-fill"
              viewBox="0 0 16 16">
              <path
                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z" />
            </svg>
          </div>
        </div>

        <div class="post">
          <div class="blog-img">
            <img src="img/4.jpg" />
          </div>

          <div class="blog-content">
            <h1>Es kopi sangat segar</h1>
            <i class="bi bi-cart-check-fill"></i>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-cart-check-fill"
              viewBox="0 0 16 16">
              <path
                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z" />
            </svg>
          </div>
        </div>
      </div>
    </section>

    <!-- blog section end -->

    <!-- service section start -->

    <section class="service" id="service">
      <h1 class="heading">kita <span>Layanan</span></h1>
      <p class="heading-description">
        kami mengirimkan produk kami gratis dari pintu ke pintu 24x7=360.
      </p>

      <div class="container">
        <div class="service-box">
          <div class="service-img">
            <img src="img/ser1.jpg" />
          </div>
          <div class="service-content">
            <h3>bermacam-macam luas</h3>
            <p>
              bermacam-macam luas adalah kesamaan kita, pengalaman universal
            </p>
          </div>
        </div>

        <div class="service-box">
          <div class="service-img">
            <img src="img/ser2.jpg" />
          </div>
          <div class="service-content">
            <h3>bermacam-macam luas</h3>
            <p>
              bermacam-macam luas adalah kesamaan kita, pengalaman universal
            </p>
          </div>
        </div>

        <div class="service-box">
          <div class="service-img">
            <img src="img/ser3.jpg" />
          </div>
          <div class="service-content">
            <h3>bermacam-macam luas</h3>
            <p>
              bermacam-macam luas adalah kesamaan kita, pengalaman universal
            </p>
          </div>
        </div>

        <div class="service-box">
          <div class="service-img">
            <img src="img/ser4.jpg" />
          </div>
          <div class="service-content">
            <h3>bermacam-macam luas</h3>
            <p>
              bermacam-macam luas adalah kesamaan kita, pengalaman universal
            </p>
          </div>
        </div>

        <div class="service-box">
          <div class="service-img">
            <img src="img/ser5.jpg" />
          </div>
          <div class="service-content">
            <h3>bermacam-macam luas</h3>
            <p>
              bermacam-macam luas adalah kesamaan kita, pengalaman universal
            </p>
          </div>
        </div>

        <div class="service-box">
          <div class="service-img">
            <img src="img/ser6.jpg" />
          </div>
          <div class="service-content">
            <h3>bermacam-macam luas</h3>
            <p>
              bermacam-macam luas adalah kesamaan kita, pengalaman universal
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- service section end -->

    <!-- team section start -->

    <section class="team" id="team">
      <h1 class="heading">kita <span>team</span></h1>
      <p class="heading-description">
        tradisi tahan lama & cinta sejati untuk kopi..
      </p>

      <div class="container">
        <div class="team-box">
          <div class="team-img">
            <img src="img/team1.jpg" />
          </div>
          <div class="team-content">
            <h3>Meri</h3>
            <p>cook</p>

            <div class="social">
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
          </div>
        </div>

        <div class="team-box">
          <div class="team-img">
            <img src="img/team2.jpg" />
          </div>
          <div class="team-content">
            <h3>Jhon</h3>
            <p>waiter</p>

            <div class="social">
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
          </div>
        </div>

        <div class="team-box">
          <div class="team-img">
            <img src="img/team3.jpg" />
          </div>
          <div class="team-content">
            <h3>Yuriy</h3>
            <p>waitress</p>

            <div class="social">
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
          </div>
        </div>

        <div class="team-box">
          <div class="team-img">
            <img src="img/team4.jpg" />
          </div>
          <div class="team-content">
            <h3>Budid</h3>
            <p>brista</p>

            <div class="social">
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- team section ends -->

    <!-- contact section start -->

    <section class="contact" id="contact">
      <h1 class="heading">contact <span>us</span></h1>
      <p class="heading-description">kami selalu di sini untuk Anda. .</p>

      <div class="container">
        <div class="contact-box">
          <div>
            <i class="fa-solid fa-envelope"></i>
            <h2>
              Alamat Email <br />
              <span>skirim email secepatnya kapan saja</span>
            </h2>
          </div>

          <div>
            <p>
              kopipuncaks@gmail.com <br />
              info@example.com
            </p>
            <i class="fa-solid fa-right-long"></i>
          </div>
        </div>

        <div class="contact-box">
          <div>
            <i class="fa-solid fa-location-dot"></i>
            <h2>
              Alamat <br />
              <span>Puncak Indoensia</span>
            </h2>
          </div>

          <div>
            <p>jaringan reatif <br /></p>
            <i class="fa-solid fa-right-long"></i>
          </div>
        </div>

        <div class="contact-box">
          <div>
            <i class="fa-solid fa-phone"></i>
            <h2>
              call us <br />
              <span>call us asap anytime</span>
            </h2>
          </div>

          <div>
            <p>
              0812378383 <br />
              021834939
            </p>

            <i class="fa-solid fa-right-long"></i>
          </div>
        </div>
      </div>
    </section>

    <!-- contact section ends -->

    <!-- footer section start -->

    <section class="footer" id="footer">
      <div class="container">
        <div class="footer-box">
          <h3>Tentang Kmai</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <p>copyright &copy;2023 all rights reserved by | <a href=""> </a></p>
        </div>

        <div class="footer-box">
          <h3>buletin</h3>
          <p>tetap update dengan terbaru kami</p>

          <form>
            <input type="email" name="email" placeholder="enter email" />
            <button type="submit">
              <i class="fa-solid fa-right-long"></i>
            </button>
          </form>
        </div>

        <div class="footer-box">
          <h3>follow us</h3>
          <p>marilah kita bersosialisasi</p>

          <div>
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- footer section ends -->

    <!-- javascript code -->

    <script type="text/javascript"></script>
      </div>
      <?php
        }
      ?>
    </div>
<!--End-Action boxes-->    
  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> <?php echo date('Y'); ?> &copy; Restaurant <a href="#">by henscorp</a> </div>
</div>

<!--end-Footer-part-->

<script src="template/dashboard/js/excanvas.min.js"></script> 
<script src="template/dashboard/js/jquery.min.js"></script> 
<script src="template/dashboard/js/jquery.ui.custom.js"></script> 
<script src="template/dashboard/js/bootstrap.min.js"></script> 
<script src="template/dashboard/js/jquery.flot.min.js"></script> 
<script src="template/dashboard/js/jquery.flot.resize.min.js"></script> 
<script src="template/dashboard/js/jquery.peity.min.js"></script> 
<script src="template/dashboard/js/fullcalendar.min.js"></script> 
<script src="template/dashboard/js/matrix.js"></script> 
<script src="template/dashboard/js/matrix.dashboard.js"></script> 
<script src="template/dashboard/js/jquery.gritter.min.js"></script> 
<script src="template/dashboard/js/matrix.interface.js"></script> 
<script src="template/dashboard/js/matrix.chat.js"></script> 
<script src="template/dashboard/js/jquery.validate.js"></script> 
<script src="template/dashboard/js/matrix.form_validation.js"></script> 
<script src="template/dashboard/js/jquery.wizard.js"></script> 
<script src="template/dashboard/js/jquery.uniform.js"></script> 
<script src="template/dashboard/js/select2.min.js"></script> 
<script src="template/dashboard/js/matrix.popover.js"></script> 
<script src="template/dashboard/js/jquery.dataTables.min.js"></script> 
<script src="template/dashboard/js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
  }
} else {
  header('location: logout.php');
}
ob_flush();
?>