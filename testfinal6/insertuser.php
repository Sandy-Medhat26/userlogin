<?php include 'inc/connection.php'?>
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$post=$_POST['post'];
$hashpassword= md5($password);

$q="INSERT INTO users(name, email, password) VALUES ('$name','$email','$hashpassword')";
$result= $conn->query($q);

if($result){
    header("Location: login.php");
}

