<!DOCTYPE html> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document | GG</title>
    <!--SWEET ALERT-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <?php
    
        //VARIABLES AND FONT
            print "<font size='16'>";
            include("include/config.inc.php");
            $id=$_POST['id'];
            $namee=$_POST['namee'];
            $price=$_POST['price'];
            $amount=$_POST['amount'];
            

                    //CREATE NEW RECORD
            $sql = "INSERT INTO tbl_market_63309010063 (id,namee,price,amount) 
            VALUES                     ($id,'$namee','$price','$amount')";
    
    
            //CHECK CREATE NEW RECORD
                if ($conn->query($sql) === TRUE) {
                    echo"<script>
                    swal.fire({
                    title: 'เพิ่มแล้ว',
    
                    icon: 'success',
                    }).then(function (result) {
                    if (result.value) {
                    window.location = 'listmember02.php';
                    }
                    })
                    </script>";
              
                    
                } else {
                    echo"<script>
                    swal.fire({
                    title: 'เพิ่มไม่สำเร็จ',
    
                    icon: 'error',
                    }).then(function (result) {
                    if (result.value) {
                    window.location = 'addmarket.php';
                    }
                    })
                    </script>";
                }
      
                $conn->close();
                

            

//=================================================================================================


            exit;
    ?>

</body>
</html>