<?php
$conn = mysqli_connect("localhost","root","","fpl");
session_start();
$user = $_SESSION['user'];
$news = $_POST['news'];
$like = 0;

$sqlquery = "INSERT INTO `news` (`id`, `news`, `postedby`, `likecount`) VALUES (NULL, '$news', '$user', '$like')";
$result = mysqli_query($conn,$sqlquery);
if ($result) {
header("Location: feedpage.php");
}
?>