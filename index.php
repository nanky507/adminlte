<?php
  session_start();
  if(!isset($_SESSION['txtpassword'])){ //ถ้ายังไม่ถูกล็อคอิน จะเด้งไป หน้า login  if(!isset($_SESSION[' ตัวแปร session']))
    header("location:login.php");
  }else{ 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Saksit site 2020</title>
  <!--FONT MALI-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
<style>
  body{
    font-family: 'Prompt', sans-serif;
  }
  </style>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" onload="startTime()">
  <div class="wrapper">

    <?php
    include("layout/header.php");
    ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">หน้าแรก</h1>
              <img src="hello.gif">
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                <li class="breadcrumb-item active">หน้าแรก</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

<div class="container-fluid d-flex justify-content-center">
<!-- <a href="slimeindex.php"><b style="font-size: 28px;">Slime season1</b></a> -->

<!-- แสดง ชื่อผู้ใช้ รหัสผ่าน หน้า index -->
<?php 

/* $username=$_SESSION['txtpassword'];
$txtpassword=$_SESSION['password'];
$first=$_SESSION['firstname'];
$last=$_SESSION['lastname'];
$position=$_SESSION['position'];

if($position=='admin'){
  echo "USERNAME : $username";
  echo "<br>";
  echo "PASSWORD : $txtpassword" ;
  echo "<br>";
  echo "FIRSTNAME : $first" ;
  echo "<br>";
  echo "LASTNAME : $last" ;
  echo "<br>";
  echo "POSITION : $position" ;
  
} */


?>
</div>
<!-- ================================================================================================================================== -->
<?php
    include("layout/sidebar.php");
    ?>

<!-- ================================================================================================================================== -->
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">

        </div>
        <!--/. container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <?php
    include("layout/footer.php");
    ?>

  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="plugins/raphael/raphael.min.js"></script>
  <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard2.js"></script>
</body>
<?php }?>
</html>