<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>Home</title>
    <style>
    .login{
      height: 370px;
      width: 500px;
      float:right;
      margin: 150px 320px 200px 320px;
      padding-top: 80px;
      padding-bottom: 70px;
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
      width: 250px;

    }
    p{
      color: white;
      float:right;
      border:1px solid white;
      border-radius: 40px;
      size:200%;
      padding: 10px;
    }
    span{
      color: white;
      float:right;

    }
    #sub{
      border-radius: 15px;
      width: 130px;
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
    <?php
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
    echo '<script language="javascript">';
    echo 'alert("Welcome back ' . $_SESSION['user'] . '")';
    echo '</script>';
    $cookie_name = $_SESSION['user'];

    if (!isset($_COOKIE[$cookie_name])) $_COOKIE[$cookie_name] = 1;
    $cookie_value = $_COOKIE[$cookie_name] + 1;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/");


     ?>
     <div class="container">
     <div class="login">
       <form class="" action="check.php" method="post">
         <input type="text" name="sent" placeholder="Enter sentence to check spellings"><br><br>
         <input id="sub" type="submit" name="check" value="Check Spelling">
       </form><br><br>
       <form class="" action="new.php" method="post">
         <input type="text" name="sent" placeholder="Add a New Word"><br><br>
         <input id="sub" type="submit" name="Add" value="Add">
       </form><br>
       <a style="color:white" href="logout.php">Logout</a><br>
       <span>Times Visited:<p><?php echo $_COOKIE[$cookie_name] ?></p></span>
     </div>
   </div>

  </body>
</html>
