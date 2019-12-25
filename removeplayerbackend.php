<?php
$conn = mysqli_connect("localhost","root","","fpl");
session_start();

$userid = $_POST['deleteid'];

$delete = "DELETE FROM players WHERE id = '$userid' ";
mysqli_query($conn,$delete);

?>