<?php
$servername="localhost";
$username="root";
$password="";
$dbname="fpl";

$conn = new mysqli($servername,$username,$password,$dbname);

$filename = $_FILES['file']['name'];
$tempname = $_FILES['file']['tmp_name'];
$folder = "image/" . $filename;
move_uploaded_file($tempname, $folder);

$uname = $_POST['username'];
$fname = $_POST['fullname'];
$pword = $_POST['password'];
$recog = 0 ; 



$sql = "INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `photo`, `recog`) VALUES (NULL, '$fname', '$uname', '$pword', '$folder', '$recog')";

$hello = mysqli_query($conn,$sql);


$query = "CREATE TABLE `fpl`.`$uname` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `position` VARCHAR(255) NOT NULL , `price` INT(11) NOT NULL , `points` INT(11) NOT NULL , `availability` VARCHAR(255) NOT NULL , `reg` INT(11) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

";
$result = mysqli_query($conn,$query);

if($query && $hello){
session_start();
$_SESSION['user'] = $uname;
header("Location: index.php");
}
?>