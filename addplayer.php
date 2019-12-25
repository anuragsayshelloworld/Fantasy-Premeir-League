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
	<title>Admin panel | Add player</title>
</head>


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
<style type="text/css">
  .helloworld{
    width: 500px;
    height: 500px;
    margin-left: 400px;
    margin-top: 200px;
  }
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
      <a class="nav-link" href="admin.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="addplayer.php">Add player</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="removeplayer.php">Remove player</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="fixture.php">Fixture</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">logout</a>
    </li>
  </ul>
</nav>  

<div class="helloworld">
<form action="addplayerbackend.php" method="post">
  <input type="text" name="player" placeholder="playername" class="form-control" required><br>
  <select name="position" class="form-control" required>
    <option>GK</option>
    <option>DEF</option>
    <option>MID</option>
    <option>FWD</option>
  </select><br>
  <input type="text" name="price"  class="form-control" placeholder="price" required> <br>
  <input type="submit" name="submit" value="Add player" class="btn btn-primary" style="width:500px">
</form>
</div>

</body>
</html>