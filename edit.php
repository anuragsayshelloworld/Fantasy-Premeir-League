<?php
$connection =mysqli_connect("localhost","root","","fpl");
extract($_POST);
$query = "SELECT * FROM `players` WHERE id = $rowid";
$result = mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="some.php" method="post" class="form-group">
	<label>Player name</label><input type="text" name="playername" class="form-control" value="<?php echo $row['name']?>" disabled>
	<label>Price</label><input type="text" name="price" class="form-control" value="<?php echo $row['price']?>" disabled>
	<label>Position</label><input type="text" name="position" class="form-control" value="<?php echo $row['position']?>" disabled>
	<label>Points</label><input type="text" name="position" class="form-control" value="<?php echo $row['points']?>" disabled>
	<label>Availability</label><input type="text" name="position" class="form-control" value="<?php echo $row['availability']?>" disabled>
	
	

</form>
</body>
</html>