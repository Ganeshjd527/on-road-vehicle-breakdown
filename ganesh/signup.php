<?php
session_start();

   include("connection.php");
   include("functions.php"); 

   if($_SERVER['REQUEST_METHOD']=="POST")
   {
    //Something was posted
    $user_name=$_POST['user_name'];
    $password = $_POST['password'];
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
       //save to database
       $user_id=random_num(20);
       $query="insert into user(user_id,user_name,password) values('$user_id','$user_name','$password')";

       mysqli_query($con,$query);

       header("Location:login.php");
       die;
    }else{
        echo"Please enter a valid information";
    }
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register page</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}

		.container {
			width: 400px;
			margin: 50px auto;
			margin:90px;
            padding:10px;
            
			
		}

		input[type="text"], input[type="password"] {
			width: 100%;
			padding: 10px;
			border: none;
			border-radius: 5px;
			margin-bottom: 20px;
			box-sizing: border-box;
			font-size: 16px;
		}

		input[type="submit"] {
			background-color: orange;
			color: #fff;
			border: none;
			padding: 10px;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}

		input[type="submit"]:hover {
			background-color: orange;
            color:white;
		}
    .form{
    width: 250px;
    height: 390px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top: 150px;
    left: 600px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
    justify-content:center;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}

.form h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: #ff7200;
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin: 4px;
    padding: 4px;
}

.form input{
    width: 240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid #ff7200;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}

.form input:focus{
    outline: none;
}

::placeholder{
    color: #fff;
    font-family: Arial;
}

.btnn{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn:hover{
    background: #fff;
    color: #ff7200;
}
.btnn a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
}
.form .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
}
.form .link a{
    text-decoration: none;
    color: #ff7200;
}
.liw{
    padding-top: 15px;
    padding-bottom: 10px;
    text-align: center;
}
.icons a{
    text-decoration: none;
    color: #fff;
}
.icons ion-icon{
    color: #fff;
    font-size: 30px;
    padding-left: 14px;
    padding-top: 5px;
    transition: 0.3s ease;
}
.icons ion-icon:hover{
    color: #ff7200;
}
	</style>
</head>
<body>

	<div class="container">
        <div class="form">
		<h2>Signup</h2>
		<form action="" method="post">
			<label for="username" style="color:white"></label><br>
			<input type="text" id="username" name="user_name" placeholder="Username"><br>
			<label for="password" style="color:white"></label><br>
			<input type="password" id="password" name="password" placeholder="Password"><br><br>

			<a href="login.php"><input type="submit" value="Sign in" style="color:white"></a>
            <b><p style="color:white">You having the account just<a href="login.php" style="text-decoration:none; color:orange">     <br>Log in</a> your page</p><b>
            <!--<b><p style="color:white">Don't have an account </p><b>
            <a href="login.php" style="text-decoration:none; color:orange">Click to login</a>-->
		</form>
	</div>
    </div>
</body>
</html>
