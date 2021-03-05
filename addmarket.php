<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Saksit | Addmarket</title>
<!--FONT MALI-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="dist/css/font.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  
<style>
  body{
    font-family: 'Prompt', sans-serif;
  }
  </style>
</head>
<body class="hold-transition register-page bg-dark">
<div class="register-box">
  <div class="card card-outline card-danger bg-light">
    <div class="card-header text-center">
      <a href="index.php" class="h1"><b>Saksit</b>Site</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg"> เพิ่มรายการสินค้า  </p>

      <form action="insertaddmarket.php" method="post">
        
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="ชื่อ" name="namee" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-card"></span>
            </div>
          </div>
        </div>


        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="ราคา" name="price" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-money-bill-alt"></span>
            </div>
          </div>
        </div>



        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="จำนวน" name="amount"  required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-sort-numeric-up-alt"></span>
            </div>
          </div>
        </div>

          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">ยืนยัน</button>
          </div>
          <!-- /.col -->
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