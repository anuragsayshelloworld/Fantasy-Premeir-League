<?php
   $conn = mysqli_connect("localhost","root","","fpl");
   session_start();
   $user = $_SESSION['user'];
   $id=$_POST['delete'];

   $sql = "DELETE FROM $user WHERE id='$id' ";
   $result = mysqli_query($conn,$sql);

   header("Location: index.php");
   
?>