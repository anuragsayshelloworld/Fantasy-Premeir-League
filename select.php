<?php
$conn = mysqli_connect("localhost","root","","fpl");
session_start();
$user = $_SESSION['user'];
extract($_POST);
$number = 1;
$query = "SELECT * FROM $rowid";
$result = mysqli_query($conn,$query);
echo "<table class ='table table-hover table-striped table-light' style='margin-top:50px'>
<tr>
<th>No.</th>
<th>Name</th>
<th>Price</th>
<th>Position</th>
<th>Points</th>
<th>Availability</th>";
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>
<td>".$number."</td>
<td>".$row['name']."</td>
<td>".$row['price']."</td>
<td>".$row['position']."</td>
<td>".$row['points']."</td>
<td>".$row['availability']."</td></tr>";
$number++;
}
echo "</table>";
?>