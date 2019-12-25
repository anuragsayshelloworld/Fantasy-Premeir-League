<?php
$connect = mysqli_connect("localhost", "root", "", "fpl");
session_start();
$user = $_SESSION['user'];

$output = '';


if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM players 
	WHERE name LIKE '%".$search."%'
	OR position LIKE '%".$search."%' 
	OR price LIKE '%".$search."%' 
	OR availability LIKE '%".$search."%' 
	OR points LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM players ORDER BY id DESC";
}

$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	echo '<div class="table-responsive">
					<table class="table table-dark table-hover table-striped">
						<tr>
						    <th>SN</td>
							<th>Player Name</th>
							<th>Price</th>
							<th>Position</th>
							<th>Availability</th>
							<th>Add</th>
						</tr>';
						$number = 1;
	while($row = mysqli_fetch_array($result))
	{
		echo'
			<tr>
			    <td>'.$number.'</td>
				<td>'.$row["name"].'</td>
				<td>'.$row["price"].'</td>
				<td>'.$row["position"].'</td>
				<td>'.$row["availability"].'</td><td>';


$k = $row['name'];
  $p = "SELECT * FROM $user WHERE name='$k' ";
  $q = mysqli_query($connect,$p);
  if (mysqli_num_rows($q) == 0) {

  $a = "SELECT * FROM $user";
  $b = mysqli_query($connect,$a);
  $price = 0;
  while ($c = mysqli_fetch_array($b)) {
    $price = $price + $c['price'];
  }
  if ($price>100) {
  echo "No more money";
  }
  else{
  if(mysqli_num_rows($b)<15){
   $varg = 0;
   $vard =0;
   $varm = 0;
   $varf = 0;
   $f = "SELECT * FROM $user";
   $g = mysqli_query($connect,$f);
   while($h = mysqli_fetch_assoc($g)){

   
  
   if ($h['position'] == 'FWD') {
    $varf++;
   } 
   if ($h['position'] == 'GK') {
    $varg++;
   }
  if ($h['position'] == 'DEF') {
    $vard++;
   }
   if ($h['position'] == 'MID') {
    $varm++;
   }
   }
   if ($varf > 4) {
    echo "Forward limit";
   }else{
   if ($varm > 5) {
    echo "Midfielder limit";
   }
   else{
   if ($vard >5) {
   echo "Defender limit";
   } else{
  if ($varg>1) {
  echo "Goalkeeper limit";
  }
  else{
  echo "<button id='add' class='btn btn-primary' onclick='addplayer(".$row['id'].")''>Add</button></td></tr>
  ";}}}} }
  else{
    echo "Squad Full";
  }
}
}
else{
  echo "Added";
}
  $number++;
 }

     }
else
{
	echo 'Data Not Found';
}
?>
