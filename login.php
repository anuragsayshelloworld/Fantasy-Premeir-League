<?php
$servername="localhost";
$username="root";
$password="";
$dbname="fpl";

$conn = new mysqli($servername,$username,$password,$dbname);
if (isset($_SESSION['user'])) {
	header("Location: index.php");
}
if(isset($_POST['submit'])){
$uname = $_POST['username'];
$pword = $_POST['password'];

$sql = "SELECT * from users";
$result = mysqli_query($conn,$sql);
$count = 0;
 while($row = mysqli_fetch_assoc($result)) {
   if ($uname == $row['username'] && $pword == $row['password'] && $row['recog'] == 0) {
    session_start();
    $_SESSION['user']= $uname;
    header("Location: index.php");
    break;
   }
   elseif ($uname == $row['username'] && $pword == $row['password'] && $row['recog'] == 1) {
       session_start();
       $_SESSION['admin']= $uname;
       header("Location: admin.php");
   }
   else{
    $count ++;
    continue;
   } 
 }
 if (mysqli_num_rows($result) == $count) {
 echo "Login Failed";
 }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | Fantasy</title>
	<style type="text/css">
body{
    background: url("image/back2.jpg") no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
             background-size: cover;
           }

           .logindiv{
            margin-left: 350px;
            margin-top: 50px;
            width: 540px;
            height:400px;
            float: left;
           }
           input[type=text] {
            
            width: 60%;
            padding: 12px 20px;
            margin-top: 135px;
            margin-left: 100px;
            box-sizing: border-box;
            border: 3px solid #ccc;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
            border-radius: 8px;
            font-size: 24px;

        }
       input[type=text]:focus {
            border: 3px solid #555;
        }
        input[type=password] {
            margin-left: 100px;
            width: 60%;
            padding: 12px 20px;
            margin-top: 15px;
            box-sizing: border-box;
            border: 3px solid #ccc;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
            border-radius: 8px;
            font-size: 24px;
            }
       input[type=password]:focus {
            border: 3px solid #555;
        }
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            margin-top: 15px;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-left: 200px;
            cursor: pointer;
            border-radius: 8px;
        }
        p{
            margin-left:240px; 
        }

	</style>
</head>
<body>
	<div class="logindiv">
<form action="" method="post">
<input type="text" name="username" placeholder="username">	<br>
<input type="password" name="password" placeholder="password"><br>
<button class="button" name="submit"> Login </button> 
</form>
<form action="redirect.php">

<p>or </p><button class="button">Signup</button>
</form>
</div>

</body>
</html>