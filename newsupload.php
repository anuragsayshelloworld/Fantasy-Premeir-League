<?php
$conn = mysqli_connect("localhost","root","","fpl");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>News upload</title>
</head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
	.leftside{
		width:20%;
		height:1000px;
		background-color: black;
		float: left;
	}
		.middleside{
		width:35%;
		height:1000px;
		background-color: white;
		float: left;
	}
		.rightside{
		width:20%;
		height:1000px;
		background-color: black;
		float: right;
	}
</style>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
</nav>
<div class="leftside"></div>

<div class="middleside">
	<div class="embed-responsive embed-responsive-1by1">
  <iframe class="embed-responsive-item" src="..."></iframe>
</div>
</div>

<div class="rightside"></div>



</body>
</html>