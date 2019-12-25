<?php 
$conn = mysqli_connect("localhost","root","","fpl");
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin panel | Remove player</title>
</head>
<style type="text/css">
  body{
    background: url("image/back2.jpg") no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
             background-size: cover;
           }

</style>


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  <script type="text/javascript">


    function DeleteUser(deleteid){

  var conf = confirm("Are you sure?");
  if(conf == true) {
  $.ajax({
    url:"removeplayerbackend.php",
    type:'POST',
    data: {  deleteid : deleteid},

    success:function(data, status){
       window.location.replace("removeplayer.php");
      window.alert("Player Deleted");
    }
  });
  }
}
$(document).ready(function(){
    $('#myModal').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'edit.php', //Here you will fetch records 
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
      <a class="nav-link" href="admin.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="addplayer.php">Add player</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="removeplayer.php">Remove player</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="fixture.php">Fixture</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">logout</a>
    </li>
  </ul>
</nav>  



<table class="table someclass table-hover table-dark table-striped" style="margin-top:50px;">
  <tr>
  <th>No.</th>
  <th>Name</th>
  <th>Position</th>
  <th>Edit</th>
  <th>Delete</th>
 </tr>
 <tr>

  <?php
  $number = 1;
  $query = "SELECT * FROM players ORDER BY id DESC";
  $result = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($result)) {
 
  $data = "<td>".$number."</td>
  <td>".$row['name']."</td>
  <td>".$row['position']."</td>
  <td><a href='#myModal' class='btn btn-info' id='custId' data-toggle='modal' data-id='".$row['id']."'>View Detail</a></td>
  <td><button class='btn btn-danger' onclick='DeleteUser(".$row['id'].")'>Delete</button></td>
  
  <tr>";
  echo $data;
  $number++;
  } ?>
 </table>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                
                <h4 class="modal-title" style="float: left;">View Player Information</h4>
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