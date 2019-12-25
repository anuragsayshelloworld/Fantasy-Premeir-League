<!DOCTYPE html>
<html>
<head>
	<title>Leaderboard</title>
</head>


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
      body{
    background: url("image/back2.jpg") no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
             background-size: cover;
           }

  </style>
  

<body class="bg-secondary">


 

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Create my team</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="myteam.php">My team</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="leaderboard.php">Leaderboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="feedpage.php">Newsfeed</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">logout</a>
    </li>
  </ul>
</nav>  
<div style="margin:100px">
<?php

$conn = mysqli_connect("localhost","root","","fpl");
session_start();
$user = $_SESSION['user'];

$number = 1;
$query = "SELECT * FROM $user";
$result = mysqli_query($conn,$query);
echo "<table class ='table table-hover table-striped table-light' style='margin-top:50px'>
<tr>
<th>No.</th>
<th>Name</th>
<th>Price</th>
<th>Position</th>
<th>Points</th>
<th>Availability</th>
<th>Regular<th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>
<td>".$number."</td>
<td>".$row['name']."</td>
<td>".$row['price']."</td>
<td>".$row['position']."</td>
<td>".$row['points']."</td>
<td>".$row['availability']."</td>";

$somequery = "SELECT `reg` FROM `$user` where `reg` = 1";
$someresult = mysqli_query($conn,$somequery);
$regnum = mysqli_num_rows($someresult);

if ($regnum <= 11) {
if ($row['reg'] == 1) {
echo "<td><form action='substitute.php' method='post'>
<button name='sub' class='btn btn-danger' value='".$row['id']."'>Substitute</button></form></td>";
}
else{
echo "<td><form action='regular.php' method='post'>
<button name='sub' class='btn btn-success' value='".$row['id']."'>Make Regular</button></form></td>
</tr>";
}
}
else{
  echo "<td><form action='substitute.php' method='post'>
  <p style='color:red'>Regular player more than 11</p>
<button name='sub' class='btn btn-success' value='".$row['id']."'>Substitute</button></form></td>
</tr>";
}
$number++;
} 
echo "</table>";




?>


</div>
</body>
</html>