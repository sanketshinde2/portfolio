

<?php
session_start();
require "./server/config.php";
if(!isset($_SESSION['username'])){
    echo "Hello";
    session_destroy();
    session_unset();
    header("location: login.php");
    // $username = $_GET['Username'];
    // $password = $_GET['password'];

    // $query = "select * from admin";
    // $result = mysqli_query($conn,$query);

    // while($row = mysqli_fetch_assoc($result)){
    //     if($username ==$row['username'] && $password == $row['password']){
    //         echo "Password match";
             
    //     }
    //     else{
    //         echo "enter valid credentials";
    //         // echo $_SESSION['username'];  
    //     }


    // }
}
else{
    
}

?>

<!DOCTYPE html>

<head>
    <title>Student Data</title>
    <link
      rel="stylesheet"
      href="login.css"
    /> 

    <style>
        table{
            background-color: beige;
            border: 1px solid rgb(57, 211, 103);
            margin: 10px;
            border-radius: 10px;
            
            
        }
        th{
            background-color: aqua;
            border: 1px solid rgb(57, 211, 103);
            text-align: center;
            padding: 10px;
            border-radius: 10px;
        
        }
        
        
        td{
            background-color: aqua;
            border: 1px solid rgb(57, 211, 103);
            text-align: center;
            padding: 10px;
            border-radius: 10px;
        }
        body{
            background-color: aquamarine;
        }
        .abc{
            position: absolute;
            left: 80vw;
            top: 0;
            width: 200px !important;
        }

    </style>
    <link rel="stylesheet" href="navbar.css" />
   
</head>

<body>

<div class="button_group abc" id="login_button">
<a href="admin/logout.php"><input type="button"  name="submit" value="Log Out" ></input></a>
        </div>
    <center>
<h1>Contact Requests</h1>

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Massage</th>
            
        </tr>
        <?php
        $query1 = "select * from   contact_us;";
        $result = mysqli_query($conn,$query1);
        while($row = mysqli_fetch_assoc($result)){
            echo "
            <tr>
           
            <td>". $row['name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['mobile']."</td>
            <td>".$row['message']."</td>
        </tr>
         ";
        }
        ?>
        
       
    </table>

    </table>
</center>
</body>

</html>