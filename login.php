<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Saksit | Log in</title>
  <!--FONT MALI-->
  <link rel="stylesheet" href="dist/css/font.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!--FONT MALI-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
<style>
  body{
    font-family: 'Prompt', sans-serif;
  }
  </style>
<script src="dist/js/time.js"></script>
</head>
<body class="hold-transition login-page bg-dark" ><!--  oncontextmenu="return false;" -->

<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-danger bg-light">
    <div class="card-header text-center">
      <a href="index.php" class="h1"><b>Saksit</b>Site</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">ลงชื่อเข้าใช้</p>

      <form action="login_db.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="ชื่อผู้ใช้" name="txtusername">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="รหัสผ่าน" name="txtpassword">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-danger">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember">
                จดจำฉันไว้
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">เข้าสู่ระบบ</button>
          </div>
          <!-- /.col -->
        </div>
      </form>



<hr>
      <p class="mb-0 text-center">
        <a href="register.php" class="text-center text-red">สมัครสมาชิก</a> | ลืมรหัสผ่าน
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
