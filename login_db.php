<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
  // SESSION START 


  session_start();


  //  END SESSION 
  $usename = $_POST['txtusername'];
  $txtpassword = $_POST['txtpassword'];
  //echo"$txtusername $txtpassword"

  include("include/config.inc.php");
  $sql = "SELECT * FROM tbl_member_63309010063 where uids='$usename' and pass='$txtpassword'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row=$result->fetch_array();
    $_SESSION['usename'] = $row['firstname'];
    $_SESSION['txtpassword'] = $row['uids'];
    $_SESSION['firstname'] = $row['firstname'];
    $_SESSION['lastname'] = $row['lastname'];
    $_SESSION['position'] = $row['position'];
    $_SESSION['password']= $row['pass'];
    // $_SESSION=['ชื่อตัวแปร'] = $row['ฟิลด์ใน database'];

    echo "<script>
      swal.fire({
        title: 'เข้าสู่ระบบสำเร็จ',
        text: 'กด OK เพื่อไปต่อ',
        icon: 'success',
      }).then(function (result) {
        if (result.value) {
          window.location = 'index.php';
          
        }
      })
      </script>";
    /* */
  } else {

    echo "<script>
swal.fire({
  title: 'ขออภัย',
  text: 'ข้อมูลไม่ถูกต้อง',
  icon: 'error',
}).then(function (result) {
  if (result.value) {
    window.location = 'login.php';
  }
})
</script>";
  }


  ?>

  <?php
  /*
        while($row = $result->fetch_array()) {
        $first = $row["firstname"];
        $last = $row["lastname"];
        $id = $row["id"];
        $uid = $row["uids"];
        $pass = $row["pass"];
          
          echo "<font size='24'>";
          echo "id $id : 
          <br>firstname : $first 
          <br>lastname : $last 
          <br>ID : $uid
          <br>Password : ";
          echo md5($pass);
          
        }
        */
  ?>

</body>

</html>