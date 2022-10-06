<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: aqua; 
        }
        .box{
            width: 1515px;
            height: 100px;
            text-align: center;
            background: rgb(100, 20, 300);
        }
    </style>
</head>
<body>
    
<?php
  
    echo '<div class="box"><br><h2 style="color:black"> Nota Pesanan </h2></div>';        
    echo 'Nama produk: ';
    echo $_GET['Nama-produk'];
    echo '<br>';
    echo 'varian : ';
    echo $_GET['varian'];
    echo '<br>';
    echo 'Alamat Pengiriman : ';
    echo $_GET['Alamat'];
    echo 'kirim : ';
    echo $_GET['Request'];
    echo '<br>';

?>
</body>
</html>