<?php

if (isset($_SESSION['user']))
{
  header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Spell Checker</title>
    <style>
      .login{
        height: 300px;
        width: 500px;
        float:right;
        margin: 150px 320px 200px 320px;
        padding-top: 80px;
        padding-bottom: 50px;
        padding-left: 10px;
        padding-right: 10px;
        text-align: center;
        background-color: black;
        border-radius: 15px;
        opacity: 0.7;
      }
      body{
          background-image: url('../img/spellcheck.jpg');
          background-repeat: no-repeat;
          background-size:cover;
      }
      input{
        border: none;
        border-bottom: 2px solid white;
        background-color: black;
        color:white;
        padding: 5px;
      }
      #sub{
        border-radius: 15px;
        width: 90px;
        background-color: black;
        color: white;
      }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../jquery-1.12.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
    <div class="login">
      <form class="" action="login.php" method="post">
        <p style="color:white"><input type="text" name="uname" required placeholder="Username"></p><br>
        <p style="color:white"><input type="password" name="pass" required placeholder="Password"></p>
        <input id="sub" type="submit" name="submit" value="Login">
      </form>
      <p style="color:white">Don't have an account?</p> <a href="signup.html">Signup</a>
    </div>
  </div>
  </body>
</html>
