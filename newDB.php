<?php
require_once('connection.php');
$name=$email=$password=$rpassword=$pwd='';
$name=$_POST['name'];
$email=$_POST['email'];
$pwd=$_POST['password'];
$password=MD5($pwd);
$rpassword=MD5($pwd);
$sql="INSERT INTO form (name,email,password,rpassword) VALUES ('$name','$email','$password','$rpassword')";
$result=mysqli_query($conn,$sql);
if($result){
	header("Location: kycu.php");
}
else{
	echo "Error :".$sql;
}
?>