<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
	<style >
		body{
	font-size: 120%;
	background: #F8F8FF;
	background-image: url("sneha.jpeg");
	background-size: cover;
	background-repeat: no-repeat;

}

form{
	width: 30%;
	margin: 0px auto;
	padding: 20px;
	border:1px solid#80C4DE;
	background: white;
	border-radius:0px 0px 10px 10px;
	background: rgba(0,0,0,0.1);
}
input{
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:3px solid gray;
	background: transparent;

}
h1{
	text-align: center;
	margin-bottom: 30px;
	margin-top: 80px;
}
	</style>
	<h1>Login</h1>

<form method="POST" action="" enctype="multipart/form-data">
<label>Username</label>
<input type="text" name="username">
<br><br>
<label>Password</label>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="Login">
</body>
</form>


<?php
	//Make connection
	include 'conn.php';
	

	if(isset ($_POST['submit'])){
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		//select some information inside table
		$select=mysqli_query($conn,"SELECT * FROM nanu WHERE username='$username' AND password='$password'");
		$number=mysqli_num_rows($select);
		

		if($select){
			
			if($number==1){
				session_start();
				$userinfo=$select->fetch_assoc();
				$userid=$userinfo['id'];
				$_SESSION['id']=$userid;
				echo "<script language='Javascript'>";
		 		echo "document.location.replace('./home.php')";
		 		echo "</script>";
			}
			else{
				echo "wrong password";
			}

		}

		else{
		 		echo ("error".mysqli_error($conn));
		 	}


	}




	?>

</body>
</html>
