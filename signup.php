<?php
$servername="localhost";
$username="root";
$password="";
$dbname="fpl";

$conn = new mysqli($servername,$username,$password,$dbname);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<style type="text/css">
		body{
    background: url("image/back2.jpg") no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
             background-size: cover;
           }

           .logindiv{
            margin-left:350px;
            margin-top: 150px;
            width: 540px;
            height:400px;
            float: left;
           }
           input[type=text] {
            
            width: 60%;
            padding: 12px 20px;
            margin-top: 15px;
            margin-left: 100px;
            box-sizing: border-box;
            border: 3px solid #ccc;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
            border-radius: 8px;
            font-size: 18px;
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
            font-size: 18px;
        }
       input[type=password]:focus {
            border: 3px solid #555;
        }
        input[type=email] {
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
            font-size: 18px;
        }
       input[type=email]:focus {
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

	</style>
</head>
<body>
	<div class="logindiv">
<form action="signupbackend.php" method="post" enctype="multipart/form-data">
	<input type="text" name="fullname" placeholder="fullname" required>
	<input type="text" name="username" placeholder="username" required>
	<input type="password" name="password" placeholder="password" required>
    <input type="file" name="file" class="form-control" style="margin-left: 200px;margin-top: 20px;" required>
	<button class = "button" name="submit">Sign up</button>
</form>
</div>
</body>
</html>