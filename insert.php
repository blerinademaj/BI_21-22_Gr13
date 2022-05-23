<?php
$server = "localhost:4000";
$username = "root";
$password ="";
$dbname="lifestyle";

$conn = mysql_connect($server,$username,$password,$dbname);
if(isset($_POST['submit'])){
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['passwordConfirm'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $passwordConfirm = $_POST['passwordConfirm'];
  $query = "insert into form(name,email,password,passwordConfirm) values('$name','$email','$password','$passwordConfirm')";
  $run = mysqli_query($conn. $query) or die (mysqli_error());
  if($run){
    echo "Form submitted succesfully";
  }
else {
  echo "Form not submitted";
}
}
else {
  echo "Fill all fields";
}
}
 ?>
