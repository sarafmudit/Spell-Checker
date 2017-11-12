<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Signedup</title>
    <style>
      .login{
        height: 400px;
        width: 500px;
        float:right;
        margin: 150px 320px 200px 320px;
        padding-top: 70px;
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
    <?php
    $un = $_POST["username"];
    $p = $_POST["password"];
    $email = $_POST["email"];
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

    $sql = "INSERT INTO iwp
    VALUES ('$un' , '$p' , '$email')";
    $result = $conn->query($sql);


    $conn->close();
 ?>
 <div class="container">
 <div class="login">
   <h2 style="color:white;text-align:center">Registered Successfully</h2><br><br>
 <form action="index2.php" method="post">
   <input id="sub" type="submit" name="login" value="login">
 </form>
  </body>
</html>
