<!DOCTYPE html>
<html>
<head>
<title>Admin Register</title>
<style>
  
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
</style>
</head>
<body>
  <form method="POST" action="">
  <label>User Name</label>
  <input type="text" name="username" id="username" placeholder="Enter Name"><br><br>
  <label>Password</label>
  <input type="password" name="password1" id="password1" placeholder="*********"><br><br>
  <label>Confirm Password</label>
  <input type="password" name="password2" id="username" placeholder="********"><br><br><br><br>
  <input type="submit" name="submit" value="submit">

  </form>
</body>
</html>
<?php
require 'conn.php';

if (isset($_POST['submit'])) {
$username=addslashes($_POST['username']);
$password1=addslashes($_POST['password1']);
$password2=addslashes($_POST['password2']);

if ($password1==$password2) 
{
$pass=md5($password1);

$insert=mysqli_query($conn,"INSERT INTO nanu(username,password)VALUES ('$username','$pass')");
if ($insert) {
echo "<script language='javascript'>";
   echo "document.location.replace('./login.php')";
   echo "</script>";
}
else{
echo $conn->error;
}
}
}

?>
