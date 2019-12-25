<?php
if (isset($_POST['save'])) {
	$name = $_POST['name'];
	$price = $_POST['price'];
	$position = $_POST['position'];
	$sqlquery = "UPDATE `players` SET `name` = '$name', `position` = '$position', `price` = '$price' WHERE `players`.`id` = $rowid ";
	$hello = mysqli_query($connection,$query);
	if ($hello) {
		echo "success";
	}
	else{
		echo "failed";
	}
}
?>