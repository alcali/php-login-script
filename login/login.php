<?php
session_start();
require 'connection.php';
require 'functions.php';

if(!empty($_POST['username']) && !empty($_POST['password'])){
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $getUserCredentials = mysqli_query($con, "SELECT COUNT(userID) AS userCount, username, userpassword FROM users WHERE username = '".$username."' AND userpassword = '".$password."' ");
  $getUserCredentialsResult = mysqli_fetch_object($getUserCredentials);
  if($getUserCredentialsResult->userCount == 1)
  {
    $_SESSION['username'] = $getUserCredentialsResult->username;
    header ('Location:index.php');
  }
}
else {
  echo 'login';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <form class="" action="login.php" method="post">
      <input type="text" name="username" placeholder="username" /><br />
      <input type="password" name="password" placeholder="password" /><br />
      <input type="submit" name="submitlogin" value="Login" />
    </form>
  </body>
</html>
