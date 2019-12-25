<?php
   $conn = mysqli_connect("localhost","root","","fpl");
   session_start();
   $user = $_SESSION['user'];
   $id=$_POST['id'];
   
   $sql = "SELECT * FROM players WHERE id='$id' ";
   $result = mysqli_query($conn,$sql);
   while($row =mysqli_fetch_assoc($result)){
   $name = $row['name'];
   $position = $row['position'];
   $price = $row['price'];
   $points = $row['points'];
   $reg = 0;

   $query = "INSERT INTO `$user` (`id`, `name`, `position`, `price`, `points`, `availability`, `reg`) VALUES (NULL, '$name', '$position', '$price', '$points', 'A/V','$reg')";
   mysqli_query($conn,$query);
   }
   
?>