<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "customer_info";

$conn = mysqli_connect($server, $username, $password, $dbname);

$dname      =   $_POST['fname'];
$daddress   =   $_POST['faddress'];
$dphnum     =   $_POST['phnum'];
$demail     =   $_POST['femail'];
$dtype      =   $_POST['ftype'];
$dservice   =   $_POST['fservice'];
$ddate      =   $_POST['fdate'];
$dtime      =   $_POST['ftime'];

$query = "INSERT INTO info(Name,Address,phone_no,Email,Type,Services,Date,Time) VALUE ('$dname' , '$daddress' , '$dphnum' , '$demail' , '$dtype' , '$dservice' , '$ddate' , '$dtime')";

$run = mysqli_query($conn, $query) or die("connection error");
$countsql = "SELECT COUNT(*) FROM info;";
$run2 = mysqli_query($conn, $countsql) or die("connection error");
$ct = mysqli_fetch_all($run2);
$count = $ct[0][0];

if($count >= 50){
    echo "<script>
            alert('Order Full');
            window.location.href = 'order.php';
        </script>";
}
else{
    echo "<script>
            alert('Submitted Successfully');
            window.location.href = 'order.php';
        </script>";
}
?>