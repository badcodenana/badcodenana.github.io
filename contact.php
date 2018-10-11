<?php session_start() ?>
<!doctype html>
<html lang="en">
<head>
  <title>myApp</title>
  <link rel="stylesheet" href="./assets/main.css" />
  <?php include "./inc/head.php"; ?>
</head>
    
<body>
  <div class="main" style="margin: 0 auto;width:320px;">
    <center>
        <ul align="left">
            <li>
                <a href="index.php">Home</a>
            </li> 
            <li>
                <a href="contact.php">Contact us</a>
            </li>
        </ul>
        
        
        <hr>
        <?php
        echo $_SESSION['username'];
        ?>
              
    </center>
  </div>
</body>
</html>