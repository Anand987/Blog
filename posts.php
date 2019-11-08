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

            <?php
                if (!isset($_SESSION['user_id'])) {
                    
                }
                else {
            ?>
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

                <?php } ?>
        </div>
    </div>
</header>
<!-- HEADER END -->\

<!-- MAIN AREA -->

<section class="container pb-2 mb-4">
    <div class="row" style="min-height: 380px;">
        <div class="col-lg-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th class="col">#</th>
                        <th class="col">Title</th>
                        <th class="col">Category</th>
                        <th class="col">Timestamp</th>
                        <th class="col">Author</th>
                        <th class="col">Comments</th>
                        <th class="col">Action</th>
                        <th class="col">Live</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for ($i=1; $i <= 5; $i++) { 
                            echo '
                            <tr>
                                <th scope="row">'.$i.'</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            ';
                        }
                    ?>
                </tbody>
                <?php

                ?>
            </table>
        </div>
    </div>
</section>

<?php
include "includes/footer.php"
?>