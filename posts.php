<?php
include "includes/header.php";
include "includes/dbh.inc.php";
?>

<!-- HEADER -->
<header class="my-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pb-2">
                <h4> <i class="fas fa-blog text-success"></i> Blog Posts</h4>
            </div>
            <div class="col-lg-3 mb-2">
                <a href="create.blog.php" class="btn btn-primary btn-block">
                   <i class="fas fa-edit"></i> Add New Post</a>
            </div>
            <div class="col-lg-3 mb-2">
                <a href="category.php" class="btn btn-info btn-block">
                   <i class="fas fa-folder-plus"></i> Add New Category</a>
            </div>
            <div class="col-lg-3 mb-2">
                <a href="create.blog.php" class="btn btn-warning btn-block">
                   <i class="fas fa-plus"></i> Add New Admin</a>
            </div>
        </div>
    </div>
</header>
<!-- HEADER END -->\

<!-- MAIN AREA -->

<section class="container py-2 mb-4">
    <div class="row">
        <div class="col-lg-12">
            <table>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Date & Time</th>
                    <th>Author</th>
                    <th>Comments</th>
                    <th>Action</th>
                    <th>Live Preview</th>
                </tr>
                <?php

                ?>
            </table>
        </div>
    </div>
</section>

<?php
include "includes/footer.php"
?>