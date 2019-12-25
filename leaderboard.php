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
<script>
$(document).ready(function(){
    $('#myModal').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'select.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
     });
});
 
</script>

<body class="bg-secondary">


 

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Create my team</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="myteam.php">My team</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="leaderboard.php">Leaderboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="feedpage.php">Newsfeed</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">logout</a>
    </li>
  </ul>
</nav> 
<div style="margin:100px;">

<?php

$conn = mysqli_connect("localhost","root","","fpl");
session_start();
$user = $_SESSION['user'];


$query = "SELECT * FROM $user where `reg` = 1";
$res = mysqli_query($conn,$query);
$vfp = 0;
while ($row = mysqli_fetch_assoc($res)) {
$vfp = $row['points'] + $vfp;
} 



$sqliii = "SELECT * FROM `leaderboard` WHERE `name` LIKE '%{$user}%'";
$result = mysqli_query($conn,$sqliii);
$a = mysqli_num_rows($result);
$roooow = mysqli_fetch_assoc($result);
$asdfgh = $roooow['id'];

if ($a == 0) {
$insert = "INSERT INTO `leaderboard` (`id`, `name`, `points`) VALUES (NULL, '$user', '$vfp')";
mysqli_query($conn,$insert);
}
$arkosql = "UPDATE `leaderboard` SET `points` = '$vfp' WHERE `leaderboard`.`id` = $asdfgh";
mysqli_query($conn,$arkosql);


$number = 1;
$query1 = "SELECT * FROM leaderboard ORDER BY points DESC";
$res1 = mysqli_query($conn,$query1);
echo "<table class='table someclass table-hover table-light table-striped' style='margin-top:50px;'>
  <tr>
  <th>No.</th>
  <th>Name</th>
  <th>points</th>
  <th>View team</th>
 </tr>";
while ($row1 = mysqli_fetch_assoc($res1)) {
  $data = "
  <tr>
  <th>".$number."</th>
  <th>".$row1['name']."</th>
  <th>".$row1['points']."</th>
  <th><a href='#myModal' class='btn btn-primary' id='custId' data-toggle='modal' data-id='".$row1['name']."'>View Team</a></th>
 </tr>";
  echo $data;
  $number++;
} 
echo "</table>";

?>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                
                <h4 class="modal-title" style="float: left;">The team</h4>
            </div>
            <div class="modal-body">
                <div class="fetched-data"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="mymodal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                
                <h4 class="modal-title" style="float: left;">The team</h4>
            </div>
            <div class="modal-body">
                <div class="fetched-data"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>