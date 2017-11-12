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
    $sent=$_POST['sent'];

     ?>
     <div class="container">
     <div class="login">
       <?php
       $check=false;
       $flag=0;
       $wordArr=(explode(" ",$sent));
       $words = file_get_contents("words.txt");
       $DictArr=(explode(", ",$words));
       foreach ($wordArr as $key => $value) {
         $check=false;
         foreach ($DictArr as $skey => $svalue) {

             if($value==$svalue)
             {
               $check=true;
             }
           }
             if($check==false)
             {
               $flag=1;
               ?><p><?php echo "$value is not spelled correctly";?></p><?php
             }

       }
       if($flag==0)
       {
         ?><p><?php echo "All words spelled correctly!";?></p><br><?php
       }
       ?><p><?php echo "Word Count: ".str_word_count($sent);?></p><br><br><br>
        <p><a style="color:white; border:1px solid white;padding:10px" href="profile.php">Again</a></p><br>
        <p><a style="color:white; border:1px solid white;padding:10px" href="logout.php">Logout</a><p>
     </div>
   </div>
  </body>
</html>
