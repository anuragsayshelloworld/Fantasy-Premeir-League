<?php 
$conn = mysqli_connect("localhost","root","","fpl");

extract($_POST);


$sql = "SELECT * FROM players";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)) {
if($id == $row['id']){

$name = $row['name'];
$position = $row['position'];
$price = $row['price'];
$pointsformdb = $row['points'];
$newpoints = $pointsformdb + $points;


$query = "UPDATE `players` SET `name` = '$name', `position` = '$position', `price` = '$price', `points` = '$newpoints' WHERE `players`.`id` = $id ";
mysqli_query($conn,$query);

}
}



?>