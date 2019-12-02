<?php 

$username = 'root';
$password = '';
$database = 'shopping';
$host = '127.0.0.1';

$con = mysqli_connect($host,$username,$password,$database);

$name = $_POST['name'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "insert into user(name,age,dob,phone,email,password) values('$name','$age','$dob','$phone','$email','$password')";
if ($con->query($query) === TRUE) {
    header("Location: http://127.0.0.1/abc/index.html");
} else {
    header("Location: http://127.0.0.1/abc/views/user.html");
}

$con->close();

?> 