
<?php
require 'inc/connection.php';
require 'inc/function.php';
session_start();

$userid=$_SESSION['userid'];
if (!isset($_SESSION['userid'])) {
    die("Error: User is not logged in.");
}

$title=$_POST['title'];
$description=$_POST['description'];
if ( $_FILES['image']['error']==0){
    $imagepath=uploadImage ('image');
}
else{
    $imagepath="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNfBmwcyyOtswqNJZfptxXmHevMr4MwPHftA&s";
}
$q="INSERT INTO posts(title, description, image,userid) VALUES('$title','$description','$imagepath','$userid')";
$result=$conn->query($q);
if($result){
    header("Location: index.php");
}

