<?php
require "./server/config.php";
if($_GET['submit']=="contact"){
    $name = $_GET['name'];
    $email = $_GET['email'];
    $mobile = $_GET['mobile'];
    $message = $_GET['message'];

    $query = "INSERT INTO `contact_us` (`name`, `email`, `mobile`, `message`) VALUES ( '$name', '$email', '$mobile', '$message');";

    mysqli_query($conn,$query);
    header("location: contact.php?1=true");

}
?>
