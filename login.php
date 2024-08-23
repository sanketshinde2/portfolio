<?php
require "./server/config.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Login From</title>
    <link
      rel="stylesheet"
      href="login.css"
    />

    <link rel="stylesheet" href="navbar.css" />
  </head>
  <body>


    <section>
      <div id="header1">
          <div class="container1">
              <nav>
                  
                  <ul>
                      <li><a href="index.html">Home</a></li>
                      <li><a href="about.html">About</a></li>
                      <li><a href="achievement.html">Achievement</a></li>
                      <li><a href="contact.php">Contact</a></li>
                      <li><a href="login.php">Login</a></li>
                  </ul>
              </nav>           
          </div>
      </div>
    
  </section>
  <center>
    <form action="./admin/auth.php" method="get">
    <div class="login_form_container">
      <div class="login_form">
        <h2>Login</h2>
        <div class="input_group">
          <i class="fa fa-user"></i>
          <input
            type="text"
            placeholder="Username"
            class="input_text"
            name="Username"
            autocomplete="off"
            required
          />
        </div>
        <div class="input_group">
          <i class="fa fa-unlock-alt"></i>
          <input
            type="password"
            name="password"
            placeholder="Password"
            class="input_text"
            autocomplete="off"
            required
          />
        </div>
        <div class="button_group" id="login_button">
          <input type="submit"  name="submit"></input>
        </div>
        
      </div>
    </div>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="script.js"></script>
  </center>
  </body>
</html>