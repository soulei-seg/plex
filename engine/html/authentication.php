<?php
include('db.php');
$username = $_POST['user'];
$password = $_POST['pass'];

//to prevent from mysqli injection  
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$sql = "select * from users where username = '$username' and password = '$password'";
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

session_start();
if ($count == 1) {
    header("Location: http://192.168.193.100:32400/web");
} else {
    echo "<h1> Login failed. Invalid username or password.</h1>";
}
