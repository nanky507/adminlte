<?php
session_start();
if($_SESSION['position'] == "admin" ){

}
else{
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Saksit site 2020 | listmember</title>
  <!--FONT MALI-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Itim', cursive;
    }
  </style>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!--SWEET ALERT-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" onload="startTime()">
  <div class="wrapper">

    <?php
    include("layout/header.php");
    include("layout/sidebar.php")
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
                <li class="breadcrumb-item"><a href="register.php">เพิ่มข้อมูล</a></li>
                <li class="breadcrumb-item active">หน้าแรก</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->


      <!-- Main content -->
      <section class="content">

        <div class="container-fluid">
          <div class="row-col-12">
            <div class="card">

              <!-- CARD HEADER-->
              <div class="card-header">
                <h3 class="card-title card-danger"> <b> รายการสมาชิก </b> </h3>
              </div>
              <!-- END CARD HEADER-->

              <!-- CARD BODY-->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover table-warning">
                  <thead>
                    <tr class="text-center">
                      <th>รหัสสมาชิก</th>
                      <th>ชื่อ</th>
                      <th>นามสกุล</th>
                      <th>สถานะ</th>
                      <th>แก้ไข</th>
                      <th>ลบ</th>
                    </tr>
                  </thead>
                  <?php
                  include("include/config.inc.php");
                  $sql = "SELECT * FROM tbl_member_63309010063 ";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_array()) {
                      $first = $row["firstname"];
                      $last = $row["lastname"];
                      $id = $row["id"];
                      $stat = $row["position"];

                      /*
                                        echo"$id";
                                        echo"$first $last";
                                        echo"$stat<br>";
                                        */




                  ?>


                      <tr class="text-center">
                        <td class=""> <?php echo "$id";  ?> </td>
                        <td> <?php echo "$first";  ?> </td>
                        <td> <?php echo "$last";  ?> </td>
                        <td> <?php echo "$stat";  ?> </td>
                        <td class="text-center"> <a class="btn btn-warning btn-sm " href="edit.php?id=<?php echo "$id";  ?>"><span class="fas fa-user-edit"></span> &nbsp; แก้ไข</a> </td>

                        <td class="text-center"> <a class="btn btn-danger btn-sm" href="#" onclick="Swal.fire({
                          title: 'คุณต้องการลบข้อมูลหรือไม่?',
                          icon:'question',
                          showDenyButton: true,
                          confirmButtonText: `ลบ`,
                          denyButtonText: `ยกเลิก`,
                          }).then((result) => {
                          /* Read more about isConfirmed, isDenied below */
                          if (result.isConfirmed) {
                          window.location = 'delete.php?id=<?php echo $id ?>';
                        } else if (result.isDenied) {
                          Swal.fire('ข้อมูลไม่เปลี่ยนแปลง', '', 'info')
                        }
                        })"><span class="fas fa-trash-alt"></span> &nbsp; ลบ</a> </td>


                      </tr>



                  <?php
                    }
                  }
                  ?>

                </table>
              </div>
              <!-- END CARD BODY-->

            </div>
          </div>
        </div>


      </section>



      <?php
      /* include("layout/sidebar.php"); */
      ?>

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
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
      $(function() {
        $("#example1").DataTable({
          "responsive": true,
          "lengthChange": false,
          "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
</body>

</html>