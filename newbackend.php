<?php
$connect = mysqli_connect("localhost","root","","fpl");
session_start();
 $user = $_SESSION['user'];
 $sql = "SELECT * FROM $user";
 $query = mysqli_query($connect,$sql);
 $number = 1;
 $vfpc = 0;
 echo"<tr>
  <th>No.</th>
  <th>Name</th>
  <th>Position</th>
  <th>Price</th>
  <th>Delete</th>
 </tr>";
 while ($row = mysqli_fetch_assoc($query)) {
  $vfpc = $row['points'] + $vfpc;
  echo "
  <tr>
  <td>".$number."</td>
  <td>".$row['name']."</td>
  <td>".$row['position']."</td>
  <td>".$row['price']."</td>


  <td><form action='deletion.php' method='post'><button class='btn btn-danger' name='delete' value='".$row['id']."'>Delete</button></form></td></tr>
  ";
  $number++;
 }
?>