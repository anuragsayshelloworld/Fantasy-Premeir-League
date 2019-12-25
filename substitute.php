<?
$connection = mysqli_connect("localhost","root","","fpl");
session_start();
$user = $_SESSION['user'];

extract($_POST);
$reg = 0;
echo $user;
echo $sub;

$query = "UPDATE `$user` SET `reg` = '$reg' WHERE `$user`.`id` = $sub";
mysqli_query($connection,$query);

header("Location: myteam.php");


?>