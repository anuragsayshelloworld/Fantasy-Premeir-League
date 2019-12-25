<?php
$conn = mysqli_connect("localhost","root","","fpl");
session_start();

$name = $_POST['player'];
$position = $_POST['position'];
$price =$_POST['price'];
$points = 0;
$avail = "A/V";

mysqli_query($conn,"INSERT INTO `players` (`id`, `name`, `position`, `price`, `points`, `availability`) VALUES (NULL, '$name', '$position', '$price', '$points', '$avail')
");

header("Location: addplayer.php");
?>
