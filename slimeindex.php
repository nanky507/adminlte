<?php
session_start();
if(!isset($_SESSION['usename'])   ) //ถ้ายังไม่ถูกล็อคอิน จะเด้งไป หน้า login  if(!isset($_SESSION[' ตัวแปร session']))
{
  header("location:login.php");
}
else{

}
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

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<script src="https://cdn.jwplayer.com/players/UVQWMA4o-kGWxh33Q.js"></script>
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

      <!--  SLIME START -->
<div class="container-fluid" style="text-align: center;">
<a href="slime/slimeindex.php"><b style="font-size: 28px;">EP.1</b></a>
</div>
<div class="container">
	<div class="card border-primary mb-3">
		<div class="card-header" id="headingOne">
			<h2 class="mb-0">
				<button class="btn btn-success btn-smbtn-danger " data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
				Spoiler
			</button>
			</h2>
		</div>

		<div id="collapseOne" class="collapse" aria-labelledby="headingOne">
    <div itemscope itemtype="https://schema.org/VideoObject"><meta itemprop="uploadDate" content="Sun Feb 07 2021 19:46:19 GMT+0700 (เวลาอินโดจีน)"/><meta itemprop="name" content="1"/><meta itemprop="duration" content="PT23M42.11S" /><meta itemprop="thumbnailUrl" content="https://content.jwplatform.com/thumbs/oQcFhEyC-640.jpg"/><meta itemprop="contentUrl" content="https://content.jwplatform.com/videos/oQcFhEyC-gVFphD5c.mp4"/><div style="position:relative; overflow:hidden; padding-bottom:56.25%"> <iframe src="https://cdn.jwplayer.com/players/oQcFhEyC-CpjdGSDS.html" width="100%" height="100%" frameborder="0" scrolling="auto" title="1" style="position:absolute;" allowfullscreen></iframe> </div></div>
		</div>
	</div>
</div>

<!-- SLIME END -->
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

</html>