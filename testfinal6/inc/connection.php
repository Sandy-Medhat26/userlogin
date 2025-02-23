<?php
$conn=new mysqli("localhost","root","","testfinal6userlogin");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>