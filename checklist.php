<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listmember</title>
      <!--SWEET ALERT-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!--FONT MALI-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
<style>
  body{
    font-family: 'Prompt', sans-serif;
  }
</style>
</head>
<body>
<?php
session_start();
if($_SESSION['position'] == "admin" ){
    header("location:listmember.php");
}
else{
  header("location:memberlist.php");
    /* echo "<script>
    swal.fire({
      title: 'คุณไม่มีสิทธิ์เข้าถึงหน้านี้',
      text: 'กด OK เพื่อกลับหน้าหลัก',
      icon: 'error',
    }).then(function (result) {
      if (result.value) {
        window.location = 'index.php';
        
      }
    })
    </script>"; */
}
?>
</body>
</html>