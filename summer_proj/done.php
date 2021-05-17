<?php
include_once 'database.php';
$id = $_GET['ID'];
$email = "SELECT Email from info WHERE ID=$id";
$result = mysqli_query($conn, $email);
$sub = "A One Laundry";
$msg = "Your Laundry has been done";
$row = mysqli_fetch_array($result);
$rec = $row['Email'];
mail($rec,$sub,$msg);
?>