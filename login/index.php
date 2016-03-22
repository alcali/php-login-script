<?php
  session_start();
  if(isset($_SESSION['username']))
  {
  ?>
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Welcome!</title>
    </head>
    <body>
      <h1>Welcome <?php echo $_SESSION['username']; ?></h1><br />
      <a href="logout.php">Logout</a>
    </body>
  </html>
  <?php
  }
  else {
    header ('Location:login.php');
  }
 ?>
