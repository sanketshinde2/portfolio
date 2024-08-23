<?php
session_start();
require "../server/config.php";
if(isset($_GET['submit'])=="Submit"){
     echo "Hello";
    $username = $_GET['Username'];
    $password = $_GET['password'];

    $query = "select * from admin";
    $result = mysqli_query($conn,$query);

    while($row = mysqli_fetch_assoc($result)){
        if($username ==$row['username'] && $password == $row['password']){
            $_SESSION["username"] = $username;
            header("location: ../admin.php");
        }
        else{
            echo "enter valid credentials";
            header("location: ../login.php?error=true");
        }
    }
}
?>