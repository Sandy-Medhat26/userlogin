<?php
// checks if this user exists or not
session_start();
if(!isset($_SESSION['userid'])){
    header('location:login.php');
}

?>
<?php include "inc/header.php"; ?>
<?php include "inc/navbar.php" ?>
<?php require "./inc/connection.php";
$userid=$_SESSION['userid'];
$q="SELECT * FROM posts WHERE userid=$userid";
$posts=$conn->query($q);
if (!$posts) {
    die("Error fetching posts: " . $conn->error);
}
?>
<div class="container">
    <h1 class="text-center my-5">Welcome <?=$_SESSION['user']?></h1>

  <div class="row">
    <?php foreach($posts as $post){ ?>
     <div class="card" style="width: 18rem;">
       <img src="<?=$post['image']?>" class="card-img-top" >
        <div class="card-body">
          <h5 class="card-title"><?=$post['title']?></h5>
          <p class="card-text"> <?=$post['description']?></p>   
         </div>
      </div>
    <?php } ?>
    
   </div>

</div>
<?php include "inc/footer.php"; ?>
