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
      height: 350px;
      width: 500px;
      float:right;
      margin: 150px 320px 200px 320px;
      padding-top: 80px;
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
      margin-bottom: 10px;
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
    $word=$_POST['sent'];
    file_put_contents("words.txt",', '.$word,FILE_APPEND);

     ?>
     <div class="container">
     <div class="login">
       <p><?php echo "Word added successfully "?></p><br><br><br>
        <p><a style="color:white; border:1px solid white;padding:10px" href="profile.php">Back</a></p><br>
        <p><a style="color:white; border:1px solid white;padding:10px" href="logout.php">Logout</a><p>
     </div>
   </div>
  </body>
</html>
