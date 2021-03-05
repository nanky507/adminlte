<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Saksit | Registration</title>
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
      <p class="login-box-msg"> ลงทะเบียนสมาชิกใหม่  </p>

      <form action="reg_db.php" method="post">

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="ชื่อ" name="txtname" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>


        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="นามสกุล" name="txtlastname" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>



        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="ชื่อผู้ใช้" name="txtusername"  required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="รหัสผ่าน" name="txtpassword" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>


        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="ยืนยัน รหัสผ่าน"  name="cpassword" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>



        <div class="row">
          <div class="col-8">
            <div class="icheck-danger">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
              <label for="agreeTerms">
               ฉันยอมรับ <a href="#">เงื่อนไข</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">สมัคร</button>
          </div>
          <!-- /.col -->
        </div>
      </form>



      <a href="login.php" class="text-center">เป็นสมาชิกอยู่แล้ว</a>
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
