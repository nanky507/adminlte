<!DOCTYPE html>
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


  //VARIABLES AND FONT
  print "<font size='16'>";
  include("include/config.inc.php");

  /* echo'<pre>';
            print_r($_POST);
            echo'</pre>';
            echo'<hr>';
            echo'<pre>';
            var_dump($_POST);
            echo'</pre>';
            exit;
            */


  //ประกาศตัวแปร รับค่าจากฟอร์ม
  $id = $_POST['id'];
  $first = $_POST['txtname'];
  $last = $_POST['txtlastname'];
  $uid = $_POST['txtusername'];
  $pass = $_POST['txtpassword'];
  $pass2 = $_POST['txtpassword2'];
  $txtusername = $_POST['txtusername'];
  $position = $_POST['position'];



if($pass != $pass2){

  echo "<script>
  swal.fire({
    title: 'รหัสผ่านไม่ตรงกัน',
  
    icon: 'error',
  }).then(function (result) {
    if (result.value) {
      window.location = 'edit.php?id=$id';
    }
  })
  </script>";

}
else{
  //update data
  $sql = "UPDATE tbl_member_63309010063 SET 
firstname='$first',
lastname='$last',
uids='$txtusername',
pass='$pass',
position='$position'

WHERE id = '$id'  ";

  $result = mysqli_query($conn, $sql) or die("Error in sql : $sql" .
    mysqli_error($sql));


  mysqli_close($conn);


  if ($result) {
    echo "<script>
swal.fire({
  title: 'แก้ไขข้อมูลสำเร็จ',

  icon: 'success',
}).then(function (result) {
  if (result.value) {
    window.location = 'listmember.php';
    
  }
})
</script>";
  } else {
    echo "<script>
swal.fire({
  title: 'แก้ไขข้อมูลไม่สำเร็จ',

  icon: 'error',
}).then(function (result) {
  if (result.value) {
    window.location = 'listmember.php';
  }
})
</script>";
  }

  exit;
}

  /* //update data
  $sql = "UPDATE member SET 
firstname='$first',
lastname='$last',
uids='$txtusername',
pass='$pass',
position='$position'

WHERE id = '$id'  ";

  $result = mysqli_query($conn, $sql) or die("Error in sql : $sql" .
    mysqli_error($sql));


  mysqli_close($conn);


  if ($result) {
    echo "<script>
swal.fire({
  title: 'แก้ไขข้อมูลสำเร็จ',

  icon: 'success',
}).then(function (result) {
  if (result.value) {
    window.location = 'index.php';
    
  }
})
</script>";
  } else {
    echo "<script>
swal.fire({
  title: 'แก้ไขข้อมูลไม่สำเร็จ',

  icon: 'error',
}).then(function (result) {
  if (result.value) {
    window.location = 'index.php';
  }
})
</script>";
  }

  exit;
 */
  ?>

</body>

</html>