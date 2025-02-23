<?php include "inc/header.php"; ?>


<div class="container">
    <h1 class="text-center my-5">Add Your Post</h1>

    <form action="insertpost.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input name="description" type="text" class="form-control" id="description" aria-describedby="description">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Upload Image</label>
            <input name="image" type="file" class="form-control" id="image">
        </div>

        <button type="submit" class="btn btn-success w-100">Submit
        </button>
    </form>

</div>

<?php include "inc/footer.php"; ?>