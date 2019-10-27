<?php
include_once "includes/header.php";
?>
<style>
body{
    background-color: #e3e3e3;
}
</style>

<div class="container pt-3 bg-white">
    <div class="row">
        <div class="col-12 text-center">
            <img class="mb-2" src="assets/images/logo.png" alt="" height="200" width="200">
            <h3 class="font-weight-bold"><span class="text-success">EDU</span> BLOG</h3>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-12">
            <form action="includes/create.blog.inc.php" method="POST">

                <div class="form-group row">
                    <label for="Title" class="col-sm-2 col-form-label pl-5 font-weight-bold">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Title" name="b_title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Subtitle" class="col-sm-2 col-form-label pl-5 font-weight-bold">Subtitle</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Subtitle" name="b_subtitle">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Content" class="col-sm-2 col-form-label pl-5 font-weight-bold">Content</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="Content" rows="10" name="b_content"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Type" class="col-sm-2 col-form-label pl-5 font-weight-bold">Category</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="Type" name="b_category">
                            <!-- <option>Technology</option>
                            
                            <option>Testing</option>
                            <option>Programming</option>
                            <option>Other</option> -->
                            <?php
                            require "includes/dbh.inc.php";
                            $sql = "SELECT b_c_name FROM blog_category";
                            $result = mysqli_query($conn, $sql);
                            $queryResults = mysqli_num_rows($result);
                            if ($queryResults > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<option>'. $row['b_c_name'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary rounded-pill px-5" type="submit" name="create-blog">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
include_once "includes/footer.php";
?>