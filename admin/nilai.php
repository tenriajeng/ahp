<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Management Data Of Internship Student</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php
    include "header.php";
    ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-reorder"></i> <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="kp.php"><i class="fa fa-circle-o"></i> KP</a></li>
            <li><a href="magang.php"><i class="fa fa-circle-o"></i> KKLP</a></li>
            <li><a href="penelitian"><i class="fa fa-circle-o"></i> PKL</a></li>
          </ul>
        </li>
        <li>
          <a href="sertifikat/index.php">
            <i class="fa fa-certificate"></i> <span>Certificate</span>
          </a>
        </li>
        <li>
          <a href="input.php">
            <i class="fa fa-file-o"></i><span>Input New Data</span>
          </a>
        </li>
        <li>
          <a href="penilaian.php">
            <i class="fa fa-line-chart"></i><span>Nilai</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-cube"></i><span>Unit Requirements</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-child"></i><span>About Us</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-arrow-circle-down"></i><span>LOGIN</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Of Internship Student</h3>
            </div>
            <!-- /.box-header -->
            <?php 
              if(isset($_GET['pesan'])){
                $pesan = $_GET['pesan'];
                if($pesan == "input"){
                  echo "Data berhasil di input.";
                }else if($pesan == "update"){
                  echo "Data berhasil di update.";
                }else if($pesan == "hapus"){
                  echo "Data berhasil di hapus.";
                }
              }
              ?>
              <?php 
            include "koneksi.php";
            $id = $_GET['id'];
            $query_mysql = mysqli_query($connection,"SELECT * FROM mhs WHERE id='$id'")or die(mysqli_error($connection));
            while($data = mysqli_fetch_array($query_mysql)){
            ?>

            <div class="box-body">
              <div class="col-xs-5">
                <label for="forasal">Nama Mahasiswa</label>
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <input type="text" class="form-control" disabled="" name="nama" value="<?php echo $data['nama'] ?>">
              </div>
              <div class="col-xs-5">
                <label for="forasal">Nama Sekolah</label>
                <input type="text" class="form-control" disabled="" name="asal" value="<?php echo $data['asal'] ?>">
              </div>
              </div>
            <?php } ?>
            <div class="box-body no-padding" class="col-md-6">
              <table class="table table-striped">
                <tr>
                  <th>Komponen Penilaian</th>
                  <th>Nilai Angka</th>
                </tr>
                <tr>
                  <?php 
                  include "koneksi.php";
                   $id = $_GET['id'];
                   $query_mysql = mysqli_query($connection,"SELECT * FROM nilai WHERE id_nilai='$id'")or die(mysqli_error());
                   $dataa= mysqli_fetch_array($query_mysql)
                  ?>
                 <tr>
                    <th>Kedisiplinan</th>
                    <td><?php echo $dataa['kd']; ?></td>
                  </tr>
                  <tr>
                    <th>Kerajinan</th>
                    <td><?php echo $dataa['kr']; ?></td>
                  </tr>
                  <tr>
                    <th>Kerjasama</th>
                    <td><?php echo $dataa['krj']; ?></td>
                  </tr>
                  <tr>
                    <th>Sikap/Perilaku</th>
                    <td><?php echo $dataa['sk']; ?></td>
                  </tr>
                  <tr>
                    <th>Inisiatif & Motifasi</th>
                    <td><?php echo $dataa['im']; ?></td>
                  </tr>
                  <tr>
                    <th>Tanggung Jawab</th>
                    <td><?php echo $dataa['tj']; ?></td>
                  </tr>
                  <tr>
                    <th>Kebersihan</th>
                    <td><?php echo $dataa['kb']; ?></td>
                  </tr>
                  <tr>
                    <th>Kejujuran</th>
                    <td><?php echo $dataa['kju']; ?></td>
                  </tr>
                  
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 </strong>
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../bower_components/raphael/raphael.min.js"></script>
<script src="../bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

</body>
</html>
