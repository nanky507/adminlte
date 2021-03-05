<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Saksit | Edit</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="dist/css/font.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <script src="dist/sweet.js"></script>
  
<style>
  body{
    font-family: 'Prompt', sans-serif;
  }
  </style>
</head>

<body class="hold-transition register-page bg-dark">

  <?php
  include("include/config.inc.php");
  // ID ที่ส่งมาแก้ไข
  $id = $_GET['id'];
  //echo "$id";
  $query = "SELECT * FROM tbl_market_63309010063 WHERE id=$id";
  $result = mysqli_query($conn, $query) or die("Error in sql : $query" .
    mysqli_error($query));
  $row = mysqli_fetch_array($result);
  $id = $row['id'];
  $namee = $row['namee'];
  $price = $row['price'];
  $amount = $row['amount'];
  //print_r($row);
  mysqli_close($conn);

  ?>

  <div class="register-box">
    <div class="card card-outline card-danger bg-light">
      <div class="card-header text-center">
        <a href="index.php" class="h1"><b>Saksit</b>Site</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg"> แก้ไขข้อมูลสินค้า </p>
       
        <form action="edit_db3.php" method="post">



        <div class="input-group mb-3">
            <input type="text" readonly class="form-control text-center" placeholder="ID : <?php echo $row['id']; ?>" name="id" required value="">
            <div class="input-group-append"> <!-- readonly คือ ปิดไม่ให้แก้ไขได้ -->
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="ชื่อสินค้า : <?php echo $row['namee']; ?>" name="namee" required value="">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>


          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="ราคา : <?php echo $row['price']; ?>" name="price" required value="">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>



          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="จำนวน : <?php echo $row['amount']; ?>" name="amount" required value="">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>

<script>
  function sweetAlertConfirm() {
        event.preventDefault();
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
//      }).then(function() {
//          CONFIRM WAS CHOSEN
//      }, {function() {
//          CANCEL WAS CHOSEN
        });
    }
</script>

          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          <!-- /.col -->
          <div class="col-6">
            <button type="submit" class="btn btn-success btn-block ">แก้ไขสำเร็จ</button>
          </div>
          <!-- /.col -->
      </div>
      </form>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>

</body>
</html>