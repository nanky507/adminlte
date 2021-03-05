<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <!--SWEET ALERT-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
<?php
    
    //VARIABLES AND FONT
        include("include/config.inc.php");
/*
        echo'<pre>';
        print_r($_GET);
        echo'</pre>';
        echo'<hr>';
        echo'<pre>';
        var_dump($_GET);
        echo'</pre>';
        exit;
        */


        //ประกาศตัวแปร รับค่าจาก url $_GET
    $id=$_GET['id'];


//DELETE data
$sql ="DELETE FROM tbl_member_63309010063 WHERE id = '$id'  ";

$result = mysqli_query($conn, $sql) or die("Error in sql : $sql".
mysqli_error($sql));


mysqli_close($conn);

/*
echo $sql;
echo'<hr>';
*/

if($result){
echo"<script>
swal.fire({
  title: 'ลบข้อมูลสำเร็จ',

  icon: 'success',
}).then(function (result) {
  if (result.value) {
    window.location = 'listmember.php';
  }
})
</script>";
}
else{
echo"<script>
swal.fire({
  title: 'ลบข้อมูลไม่สำเร็จ',

  icon: 'error',
}).then(function (result) {
  if (result.value) {
    window.location = 'index.php';
  }
})
</script>";
}
?>
</body>
</html>