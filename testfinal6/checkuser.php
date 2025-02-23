<?php include 
session_start();
require 'inc/connection.php';

$email=$_POST['email'];
$password=$_POST['password'];

$hashpassword= md5($password);

$q="SELECT * FROM users WHERE email='$email' AND password='$hashpassword'";
$result= $conn->query($q);
$rows=$result->num_rows;

if($rows==1){
    $user=$result->fetch_assoc();
    $_SESSION['user']=$user['name'];
    $_SESSION['userid']=$user['id'];
    header("Location: index.php");

}
else{
    $_SESSION['error'] = "Invalid email or password.";  

    header("Location: login.php");
}
