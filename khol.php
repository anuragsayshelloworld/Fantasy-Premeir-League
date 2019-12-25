<?php 
$conn = mysqli_connect("localhost","root","","fpl");

extract($_POST);


$sql = "SELECT * FROM players";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)) {
if($id == $row['id']){

$query = "UPDATE `players` SET `availability` = '$availability' WHERE `players`.`id` = $id";
mysqli_query($conn,$query);

}
}



?>