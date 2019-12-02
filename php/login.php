<?php 

$username = 'root';
$password = '';
$database = 'shopping';
$host = '127.0.0.1';

$con = mysqli_connect($host,$username,$password,$database);

$email = $_POST['email'];
$password = $_POST['password'];

$query = "select * from user where email='$email' AND password='$password'";
$result = mysqli_query($con,$query);
if (mysqli_num_rows($result)===0) {
    header("Location: http://127.0.0.1/abc/index.html");
} else {
    header("Location: http://127.0.0.1/abc/views/login.html");
}

?> 