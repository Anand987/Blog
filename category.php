<?php
include "includes/header.php"
?>

<!-- HEADER -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <h4 class="py-2"><i class="fas fa-edit"></i> Manage Categories</h4>
            </div>
        </div>
    </div>
</header>
<!-- HEADER ENDS -->

<!-- MAIN -->
<section class="container py-2 mb-4">
        <div class="row">
            <div class="col-lg-10 offset-lg-1" style="min-height: 530px;">
                <form class="" action="createcategory.php" method="post">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add New Category</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Category Title:</label>
                                <input class="form-control" type="text" name="CategoryTitle" id="title" placeholder="Type title here">
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <a href="Dashboard.php" class="btn btn-warning btn-block"> <i class="fas fa-arrow-left"></i> Back To Dashboard</a>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <button type="submit" name="submit-category" class="btn btn-success btn-block"><i class="fas fa-check"></i> Publish</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


<?php
include "includes/footer.php"
?>