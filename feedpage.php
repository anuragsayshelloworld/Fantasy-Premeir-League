<?php
$conn = mysqli_connect("localhost","root","","fpl");
session_start();
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Post News</title>
</head>
<style type="text/css">
	.middle{
		width:55%;
		height:auto;
		float: left;
		margin-left: 300px;
		margin-top: 100px;
	}
	.middlenews{
		width:45%;
		height:auto;
		float: left;
		margin-left: 300px;
		margin-top: 100px;
		background-color: #f4f4f4;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);


	}
	.insidenews{
		width:85%;
		height:auto;
		float: left;
		margin:8px 12px;
		background-color: white;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	}
	.heyy{
		margin-bottom: 80px;
	}
</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

 <script type="text/javascript">
      function like(postid){

      $.ajax({
        url: "asdf.php",
        type: 'post',
        data: { postid:postid },

      success:function(data,status){ 
        console.log('helloworld');
      } 

      });
    }
  </script>
 

<body>
<div class="heyy">
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">


  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Create my team</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="myteam.php">My Team</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="leaderboard.php">Leaderboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="newsfeed.php">Newsfeed</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">logout</a>
    </li>
  </ul>
</nav>  
</div>

<div class="middle">
<form action="feedbackend.php" method="post" class="form-group">
	<textarea name="news" class="form-control" style="width:80%"></textarea><br>
	<input type="submit" value="Post News" class="btn btn-primary">
</form>	
</div>
<div class="middlenews">
<?php
$sqlquery = "select * from news order by id desc";
$result = mysqli_query($conn,$sqlquery);
while ($row = mysqli_fetch_assoc($result)) {
    $name = $row['postedby'];
	$var = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `users` WHERE `username` LIKE '%{$name}%'"));
	echo "
	<img src='".$var['photo']."' class='img-thumbnail' style='width:50px;height:50px;clear:none;float:left'>
	<h5 style='float:right;margin-right:375px;margin-top:15px;color:#35477d;'>".$var['username']."</h5>
	";
	echo "<div class='insidenews'>
	<p style='margin-left:10px;margin-top:10px;'><i>".$row['news']."</i></p>
	</div> ";
	echo "<i style='font-size:12px;margin-left:65px;margin-bottom:10px'>This post has been liked ".$row['likecount']." times so far</i>";
	echo " <form> 
	
	<button class='btn btn-info' style='margin-left:65px;margin-bottom:50px;' onclick='like(".$row['id'].")'> Like this news</button>
	</form>" ;

	echo "<br><br><br>";
}
?>
</div>
</body>
</html>