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
	<title>Admin panel</title>
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
  	function goal(id){
  		var points = 3;

  		$.ajax({
  			url: "goal.php",
  			type: 'post',
  			data: { points: points, id:id },

  		success:function(data,status){ 
  			window.alert("3 points added");
  		}	

  		});
  	}
  	  	function assist(id){
  		var points = 2;

  		$.ajax({
  			url: "goal.php",
  			type: 'post',
  			data: { points: points, id:id },

  		success:function(data,status){ 
  			window.alert("2 points added");
  		}	

  		});
  	}

  	  	  	function cleansheet(id){
  		var points = 1;

  		$.ajax({
  			url: "goal.php",
  			type: 'post',
  			data: { points: points, id:id },

  		success:function(data,status){ 
  			window.alert("1 points added");
  		}	

  		});
  	}
    function yellowcard(id){
      var points = -1;

      $.ajax({
        url: "goal.php",
        type: 'post',
        data: { points: points, id:id },

      success:function(data,status){ 
        window.alert("1 points deducted");
      } 

      });
    }
       function redcard(id){
      var points = -2;

      $.ajax({
        url: "goal.php",
        type: 'post',
        data: { points: points, id:id },

      success:function(data,status){ 
        window.alert("2 points deducted");
      } 

      });
    }
       function gameplayed(id){
      var points = 2;

      $.ajax({
        url: "goal.php",
        type: 'post',
        data: { points: points, id:id },

      success:function(data,status){ 
        window.alert("2 points added");
      } 

      });
    }
      function available(id){
      var availability = "A/V";

      $.ajax({
        url: "khol.php",
        type: 'post',
        data: { availability: availability, id:id },

      success:function(data,status){ 
        window.alert("Made Available");
      } 

      });
    }
          function unavailable(id){
      var availability = "N/A";

      $.ajax({
        url: "khol.php",
        type: 'post',
        data: { availability: availability, id:id },

      success:function(data,status){ 
        window.alert("Made unavailable");
      } 

      });
    }



  </script>



<body class="bg-secondary">


 

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="addplayer.php">Add player</a>
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



<table class="table someclass table-hover table-dark table-striped" style="margin-top:50px;">
  <tr>
  <th>No.</th>
  <th>Name</th>
  <th>Position</th>
  <th>Goal</th>
  <th>Assist</th>
  <th>Clean Sheet</th>
  <th>Yellow Card</th>
  <th>Red Card</th>
  <th>Game played</th>
  <th>Make A/V</th>
  <th>Make N/A</th>
 </tr>
 <tr>

 	<?php
 	$number = 1;
 	$query = "SELECT * FROM players";
 	$result = mysqli_query($conn,$query);
 	while ($row = mysqli_fetch_assoc($result)) {
 
 	$data = "<td>".$number."</td>
 	<td>".$row['name']."</td>
 	<td>".$row['position']."</td>
  <td><button class='btn btn-primary' onclick='goal(".$row['id'].");'>Goal</button></td>
  <td><button class='btn btn-success' onclick='assist(".$row['id'].")'>Assist</button></td>
  <td><button class='btn btn-info' onclick='cleansheet(".$row['id'].")'>Clean Sheet</button></td>
  <td><button class='btn btn-warning' onclick='yellowcard(".$row['id'].")'>Y/C</button></td>
  <td><button class='btn btn-danger' onclick='redcard(".$row['id'].")'>R/C</button></td>
  <td><button class='btn btn-light' onclick='gameplayed(".$row['id'].")'>G/P</button></td>
    <td><button class='btn btn-secondary' onclick='available(".$row['id'].")'>Make A/V</button></td>
  <td><button class='btn btn-danger' onclick='unavailable(".$row['id'].")'>Make N/A</button></td>


  <tr>";
  echo $data;
  $number++;
  } ?>
 </table>
</body>
</html>