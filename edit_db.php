<!DOCTYPE html> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--SWEET ALERT-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
        $id=$_POST['id'];
        $first = $_POST['txtname'];
        $last = $_POST['txtlastname'];
        $uid = $_POST['txtusername'];
        $pass = $_POST['txtpassword'];
        $txtusername = $_POST['txtusername'];



        $sql ="SELECT * FROM tbl_member_63309010063 WHERE firstname = '$first' or lastname = '$last' or uids = '$txtusername'";
        $result = mysqli_query($conn, $sql) or die("Error in sql : $sql".
        mysqli_error($sql));
        if(mysqli_num_rows($result) > 0){
          echo"<script>
          swal.fire({
          title: 'ข้อมูลซ้ำ โปรดลองอีกครั้ง',

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
$sql ="UPDATE tbl_member_63309010063 SET 
firstname='$first',
lastname='$last',
uids='$txtusername',
pass='$pass'
WHERE id = '$id'  ";

$result = mysqli_query($conn, $sql) or die("Error in sql : $sql".
mysqli_error($sql));


mysqli_close($conn);


if($result){
echo"<script>
swal.fire({
  title: 'แก้ไขข้อมูลสำเร็จ',

  icon: 'success',
}).then(function (result) {
  if (result.value) {
    window.location = 'index.php';
  }
})
</script>";
}
else{
echo"<script>
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
      }
exit;


//update data
$sql ="UPDATE member SET 
    firstname='$first',
    lastname='$last',
    uids='$txtusername',
    pass='$pass'
    WHERE id = '$id'  ";

$result = mysqli_query($conn, $sql) or die("Error in sql : $sql".
mysqli_error($sql));

mysqli_close($conn);

if($result){
    echo"<script>
    swal.fire({
      title: 'แก้ไขข้อมูลสำเร็จ',

      icon: 'success',
    }).then(function (result) {
      if (result.value) {
        window.location = 'index.php';
      }
    })
    </script>";
}
else{
    echo"<script>
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
    ?>
    <!--        <a href="register.php">back to register</a>     -->
</body>
</html>