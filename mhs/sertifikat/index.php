<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Management Data Of Internship Student</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

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
    include "../header.php";
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
        <li>
          <a href="../index.php">
            <i class="fa fa-home"></i> <span>HOME</span>
          </a>
        </li>
        <li>
          <a href="index.php">
            <i class="fa fa-certificate"></i> <span>Certificate</span>
          </a>
        </li>
        <li>
          <a href="../input.php">
            <i class="fa fa-file-o"></i><span>Input New Data</span>
          </a>
        </li>
        <li>
          <a href="../penilaian.php">
            <i class="fa fa-line-chart"></i><span>Nilai</span>
          </a>
        </li>
        <li>
          <a href="../about.php">
            <i class="fa fa-child"></i><span>About Us</span>
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
      <div class="box box-warning">
            <div class="box-header with-border">
              <h5 class="box-title">Certificate Of Internship</h5>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="index.php" method="post">
                <strong>Please enter your name</strong><br>
                <input type="text" class="form-control" name="id" placeholder="first name or last name" ></input>
                <div class="box-footer">
                  <input type="submit" class="btn btn-primary" value="Check" name="certificate"></input><br><br><br>
                </div>
              </form>
              <?php
                    $id = (isset($_POST['id']) ? $_POST['id'] : '');
                    // $getid = $_POST["id"];
                    $host = "localhost";
                    $user = "root";
                    $pass = "";
                    $db   = "malasngoding";
                    //buat koneksi dan ambil database   
                    $koneksi = mysqli_connect($host, $user, $pass, $db) or die("Koneksi error");

                    //ambil POST dan sesuaikan dengan database
                    $ambildb = mysqli_query($koneksi, "SELECT nama FROM user WHERE id LIKE '%$id%' OR nama LIKE '%$id%'");
                    
                    while ($row = mysqli_fetch_assoc($ambildb)){
                      $hasil = $row['nama'];
                      
                    }

                    ?>
                <form action="certificate.php" method="post">
                      <strong>It's your name?</strong><br>
                      <input type="text" class="form-control" name="namadisable" disabled="yes" value="<?php
                      if (!empty($id)) { //berfungsi verifikasi, menampilkan nama hasil input saja tapi tidak dikirim ke untuk dicetak (certificate.php) karena status input tersebut disable
                        echo "$hasil";
                        }
                        else {
                        echo "your name will shown automatic";  
                        } 
                         ?>" ></input>
                      <input type="hidden" name="namacetak" value="<?php
                      if (!empty($id)) { //berfungsi mengirim nama yang telah diinput dan sesuai untuk di cetak ke (certificate.php)
                        echo "$hasil";
                        }
                        else {
                        echo "";  
                        } 
                         ?>"></input>
                         <div class="box-footer">
                      <input id="get" type="submit" class="btn btn-primary" value="Get Certificate Now" name="certificate"></input></div>
                  </form>
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
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../../bower_components/raphael/raphael.min.js"></script>
<script src="../../bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../bower_components/moment/min/moment.min.js"></script>
<script src="../../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
