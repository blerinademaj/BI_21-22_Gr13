<?php 
require_once('connection.php');
$email=$password=$pwd='';
$email=$_POST['email'];
$pwd=$_POST['password'];
$password=MD5($pwd);
$sql="SELECT * FROM form WHERE email='$email' AND password='$password'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result)){
		$name=$row['name'];
		$email=$row["email"];
		session_start();
		$_SESSION['name']=$name;
		$_SESSION['email']=$email;
	}
	header("Location:ballinaa.php");
}
else{
echo "Invalid email or password";
}
?>
