
<?php

$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['action'])){
  if($_GET["action"] == "setup"){

  //Create database
  $sql = "CREATE DATABASE `ssllp`";
  $conn->query($sql);
  $conn = mysqli_connect("localhost","root","","ssllp");

  $sql= "CREATE TABLE `feedback` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `email` varchar(50) NOT NULL,
    `msg` varchar(50) NOT NULL,
    PRIMARY KEY(id)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
  $conn->query($sql);

  $sql= "CREATE TABLE `news` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `head` varchar(50) NOT NULL,
    `info` varchar(100) NOT NULL,
    PRIMARY KEY(id)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
  $conn->query($sql);

  $sql= "INSERT INTO `news` (`id`, `head`, `info`) VALUES
  (1, 'SSLLP', 'Planning to conduct a meeting in Chiladzuro.'),
  (2, 'Oliver Noah', 'To offer a free session in Lilongwe to combat poverty among farmers.')";
  $conn->query($sql);


  $sql= "CREATE TABLE `users` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `fname` varchar(70) NOT NULL,
    `lname` varchar(70) NOT NULL,
    `tof` varchar(70) NOT NULL COMMENT 'type of farming',
    `location` varchar(70) NOT NULL,
    `contact` varchar(70) NOT NULL,
    `email` varchar(70) NOT NULL,
    `password` varchar(70) NOT NULL,
    PRIMARY KEY(id),
    `user_type` int(10) NOT NULL COMMENT 'customer:1;admin:0;guest:2;'
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

if ($conn->query($sql)) {
    header("location:../index.php");
} else {

  echo 'Database is Already Created';
}
}
}

?>

<a type="button" href="setup.php?action=setup" class="btn btn-primary btn-lg px-4 me-sm-3">CREATE DATABASE</a>