<?php include "inc/header.php"; ?>


<div class="container">
    <h1 class="text-center my-5">Register Page</h1>

    <form action="./insertuser.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input name="name" type="text" class="form-control" id="username" aria-describedby="username">
            <div id="username" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-success w-100">Submit</button>
    </form>

    <div class="text-center mt-5">
        <p>Have Account ? <a href="login.php">Login</a></p>
    </div>
</div>

<?php include "inc/footer.php"; ?>