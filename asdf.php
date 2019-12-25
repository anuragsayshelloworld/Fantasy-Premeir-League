<?php
$conn = mysqli_connect("localhost","root","","fpl");
session_start();
$user = $_SESSION['user'];

extract($_POST);
$query = "SELECT * FROM news WHERE id = '$postid' ";
$result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);

$likecounts = $row['likecount'] + 1; 

$sqlquery = "UPDATE `news` SET `likecount` = '$likecounts' WHERE `news`.`id` = $postid";
mysqli_query($conn,$sqlquery);
?>


