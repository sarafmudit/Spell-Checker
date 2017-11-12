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

session_start();

$user_check=$_SESSION['user'];

$sql = "SELECT * FROM iwp WHERE userName = '$user_check'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
      $login_session = $row["userName"];
      if (!isset($login_session)) {
        $conn->close();
        header('location: index2.php');
      }
    }
  }
?>
