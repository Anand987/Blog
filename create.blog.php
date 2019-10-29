<?php
include_once "includes/header.php";
?>
<style>
    body {
        background-color: #e3e3e3;
    }
</style>

<div class="container pt-3 bg-white">
    <div class="row">
        <div class="col-10 offset-1">
            <!-- <img class="mb-2 d-inline" src="assets/images/logo.png" alt="" height="50" width="50"> -->
            <h3 class="font-weight-bold d-inline"><i class="fas fa-edit"></i> <span class="text-success"> ADD</span> BLOG</h3>
            <div class="row py-5">
                <div class="col-12">

                <!-- FORM STARTED -->
                    <form action="includes/create.blog.inc.php" method="POST" enctype="multipart/form-data">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title"><span> Post Title: </span></label>
                                    <input class="form-control" type="text" name="b_title" id="title" placeholder="Type your title here">
                                </div>
                                <div class="form-group">
                                    <label for="Type" class=" col-form-label"> Choose Category</label>
                                    <select class="form-control" id="Type" name="b_category">
                                        <?php
                                        require "includes/dbh.inc.php";
                                        $sql = "SELECT b_c_name FROM blog_category";
                                        $result = mysqli_query($conn, $sql);
                                        $queryResults = mysqli_num_rows($result);
                                        if ($queryResults > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<option>' . $row['b_c_name'] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Subtitle" class="col-form-label">Subtitle:</label>
                                    <input type="text" class="form-control" id="Subtitle" name="b_subtitle">
                                </div>
                                <!-- <div class="form-group">
                                    <div class="custom-file">
                                        <input class="custom-file-input" type="file" name="blogimg" id="imageSelect">
                                        <label for="imageSelect" class="custom-file-label">Select Image</label>
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <label for="Content" class="col-form-label">Post:</label>
                                    <textarea class="form-control" id="Content" rows="10" name="b_content"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 mb-2">
                                        <a href="index.php" class="btn btn-warning btn-block"> <i class="fas fa-arrow-left"></i> Back</a>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <button class="btn btn-success btn-block" type="submit" name="create-blog"> <i class="fas fa-check"></i> Create</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


<?php
include_once "includes/footer.php";
?>