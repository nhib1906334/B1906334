<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbanhang";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


//$sql = "select fullname, email from customers where email = '".$_POST["email"]."' and password = '".md5($_POST["pass"])."'";

$sql = "select id, fullname, email from customers where email = '".$_POST["email"]."' and password = '".md5($_POST["pass"])."'";//code mới

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  /*  
  echo "Dang nhap thanh cong <br>";
  $row = $result->fetch_assoc();
  echo "email:".$row['email']. ' Fullname: '.$row['fullname'];
  */

  $row = $result->fetch_assoc();//code mới

  $cookie_name = "user";//code mới
  $cookie_value = $row['email'] ;//code mới
  setcookie($cookie_name, $cookie_value, time() + (86400 / 24), "/");//code mới
  setcookie("fullname", $row['fullname'], time() + (86400 / 24), "/");//code mới
  setcookie("id", $row['id'], time() + (86400 / 24), "/");//code mới


  header('Location: homepage.php');//code mới

}

else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  header('Refresh: 3;url=login.php');//code mới: Tro ve trang dang nhap sau 3 giay
}

$conn->close();
?>
