<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Contact Form </title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="navbar.css">
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Washimbe </div>
          <div class="text-two">Tal-karamala Dist-solapur</div>
          <div class="text-two">Pin-413206</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">9146393025</div>
          <div class="text-two">9146393025</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">sanketshinde8422@gmail.com</div>
          <div class="text-two">sanketbalasoshinde@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me , you can send me message from here.</p>
      <form action="insert.php" >
        <div class="input-box">
          <input type="text" name="name" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="email" name="email" placeholder="Enter your email">
        </div>
        <div class="input-box">
          <input type="number" name="mobile" placeholder="Enter your Mobile Number">
        </div>
        <div class="input-box message-box">
          <input type="text" name="message" placeholder="Enter your message">
          <div class="msg" style="color:rgba(3, 248, 3, 0.997); font-size: 16px;">
            <?php
            if(isset($_GET['1'])){
              echo "Message send successfully.";
            }
          ?></div>
          
        </div>
        <div class="button">
          <input type="submit" name="submit" value="contact" >
        </div>
      </form>
    </div>
    </div>

    
    
    <footer class="wrapper">
        <div class="icons facebook">
            <div class="tooltip">
                Facebook
            </div>
            <span> <a href="https://www.facebook.com/people/Sanket-Shinde/pfbid0gU4FLLtGYeMxK8S2LNYGUM2HyrYrSSHApQtRhBZ6vQDpbXZJ1Ye3yRasBKdiMWnWl/"><i class="fab fa-facebook"></i></a></span>
        </div>

        <div class="icons instagram">
            <div class="tooltip">
                Instagram
            </div>
            <span><a href="https://www.instagram.com/sanket_._02"> <i class="fab fa-instagram"></i></a></span>
        </div>

        <div class="icons twitter">
            <div class="tooltip">
                Twitter
            </div>
            <span><a href="https://twitter.com/i/flow/login"> <i class="fab fa-twitter"></i></a></span>
        </div>

        <div class="icons youtube">
            <div class="tooltip">
                Youtube
            </div>
            <span> <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></span>
        </div>
    </footer>
  </div>
  
</center>

</body>
</html>