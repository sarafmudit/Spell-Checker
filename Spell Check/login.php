<?php
  session_start();
  $un = $_POST['uname'];
  $p = $_POST['pass'];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "test";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM iwp WHERE userName = '$un' AND pass = '$p'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $_SESSION['user']=$row["userName"];
        header("location: profile.php");
      }
    }
    else{
      ?>
      <!DOCTYPE html>
      <html>
      <head>
        <meta charset="utf-8">
        <title>Spell Checker</title>
        <style>
          .login{
            height: 350px;
            width: 500px;
            float:right;
            margin: 150px 320px 100px 320px;
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
            <input type="text" name="uname" placeholder="Username"><br><br>
            <input type="password" name="pass" placeholder="Password"><br><br>
            <input id="sub" type="submit" name="submit" value="Login">
          </form>
          <p style="color:white">Don't have an account?</p> <a href="signup.html">Signup</a>
          <p style="color:white;text-align:center">Invalid Username or Password</p>
        </div>
      </div>
      </body>
    </html>
    <?php
    }
   $conn->close();
?>
