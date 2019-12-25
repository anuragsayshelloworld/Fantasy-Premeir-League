<?php

$conn = mysqli_connect("localhost","root","","fpl");
error_reporting(0);
session_start();
$user = $_SESSION['user'];

if (empty($_SESSION['user'])) {
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>FPL | Home</title>
</head>
<style type="text/css">
  body{
    background: url("image/back2.jpg") no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
             background-size: cover;
           }


  .ab{
    margin-top: 82px;
    margin-left: 20px;
    float:left;
    clear: none;
    width: 26%;
    height: 700px;
    margin-right: 20px;

  }
  .abc{
    margin:auto;
    float:left;
    clear: none;
    width: 35%;
    height: 700px;
  }  
  .abcd{
    margin-right: 0px;
    float:left;
    clear: none;
    width: 30%;
    height: 700px;
  }
  .someclass{
    overflow-y:scroll;
   height:700px;
   display:block;
  }
  .header{
    color: white;
    font-size: 20px;
    margin-left: 160px;
    letter-spacing: 1.3px;
  }
  p{
    text-align: center;
    color: white;
  }
</style>



<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

<script>
  var search;
$(document).ready(function(){
  load_data();
 $('#response').load('newbackend.php');
  function load_data(query)
  {
    $.ajax({
      url:"fetch.php",
      method:"post",
      data:{query:query},
      success:function(data)
      {
        $('#result').html(data);
      }
    });
  }
  
  $('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
      load_data(search);
    }
    else
    {
      load_data();      
    }
  });

});
  function addplayer(id){
      $.ajax({
        url: "backend.php",
        type: 'post',
        data: { id:id },

      success:function(query){ 
       $('#response').load('newbackend.php');
       $('#result').load('fetch.php');
      } 

      });
    }


</script>



<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">


  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Create my team</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="myteam.php">My Team</a>
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



<div class="ab bg-dark"> 
<?php
$e = "SELECT * FROM users where username = '$user' ";
$f = mysqli_query($conn,$e);
while ($g = mysqli_fetch_assoc($f)) {
  echo "<img src='".$g['photo']."' class='img-thumbnail' style='height:180px;width:200px;margin-top:80px;margin-left:70px;margin-bottom:50px;'>";
  echo "<p>Username: " .$g['username']. "</p>";
  echo "<p>Fullname: " .$g['fullname']. "</p>";
}
?>

  <?php
  $l = "SELECT * FROM $user ";
  $m = mysqli_query($conn,$l);
  while ($n = mysqli_fetch_assoc($m)) {
    $dam = $dam + $n['price'];
  }
  $baki = 100 -$dam;
  echo "<p>Remaining Budget: " .$baki. "m</p>";

  ?>

</div>



<div class="abc someclass" style="margin-top:12px;">
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon">Search players</span>
          <input type="text" name="search_text" id="search_text" placeholder="Search players by name, position or price" class="form-control" />
        </div>
      </div>
      <br />
      <div id="result"></div>
    </div>
    <div></div>
    <br />
    
    <br />
    <br />
    <br />
  </body>
</html>



<div class="abcd" style="margin-right: 0px;">
<table class="table someclass table-hover table-dark table-striped" style="margin-left: 20px; border: none;" id="response">
    

</div>
</body>
</html>