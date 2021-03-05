<!DOCTYPE html> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--SWEET ALERT-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <?php
    
        //VARIABLES AND FONT
            print "<font size='16'>";
            include("include/config.inc.php");
            $txtname=$_POST['txtname'];
            $txtlastname=$_POST['txtlastname'];
            $txtusername=$_POST['txtusername'];
            $txtpassword=$_POST['txtpassword'];
            $cpassword=$_POST['cpassword'];


            if($txtpassword == $cpassword){

                $sql ="SELECT * FROM tbl_member_63309010063 WHERE firstname = '$txtname' or lastname = '$txtlastname' or uids = '$txtusername'";
                $result = mysqli_query($conn, $sql) or die("Error in sql : $sql".
                mysqli_error($sql));
                //echo'จำนวนข้อมูลที่พบ'.mysqli_num_rows($result);
                if(mysqli_num_rows($result) > 0){
                    echo"<script>
                    swal.fire({
                    title: 'ข้อมูลซ้ำ โปรดลองอีกครั้ง',
    
                    icon: 'error',
                    }).then(function (result) {
                    if (result.value) {
                    window.location = 'register.php';
                    }
                    })
                    </script>";
                }
                else{
                    //CREATE NEW RECORD
            $sql = "INSERT INTO tbl_member_63309010063 (firstname,lastname,uids,pass,position) 
            VALUES                     ('$txtname','$txtlastname','$txtusername','$txtpassword','member')";
    
    
            //CHECK CREATE NEW RECORD
                if ($conn->query($sql) === TRUE) {
                    echo"<script>
                    swal.fire({
                    title: 'ลงทะเบียนเรียบร้อยแล้ว',
    
                    icon: 'success',
                    }).then(function (result) {
                    if (result.value) {
                    window.location = 'login.php';
                    }
                    })
                    </script>";
              
                    
                } else {
                    echo"<script>
                    swal.fire({
                    title: 'ลงทะเบียนไม่สำเร็จ',
    
                    icon: 'error',
                    }).then(function (result) {
                    if (result.value) {
                    window.location = 'register.php';
                    }
                    })
                    </script>";
                }
      
                $conn->close();
                }

            }

//=================================================================================================
            else{
                echo"<script>
                    swal.fire({
                    title: 'passwordไม่ตรงกัน',
    
                    icon: 'error',
                    }).then(function (result) {
                    if (result.value) {
                    window.location = 'register.php';
                    }
                    })
                    </script>";
            }


            exit;
    ?>

</body>
</html>