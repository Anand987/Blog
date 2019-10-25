<?php
include "includes/header.php"
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8 offset-sm-1">
            <div class="container">
                <h5 class="mb-4 font-weight-bolder text-primary">Recommended Blogs</h5>
                <?php
                for ($i = 0; $i < 5; $i++) {
                    include "includes/blog.inc.php";
                }
                ?>
            </div>
        </div>
        <div class="col-sm-3 border-left pl-4">
            <div class="border-bottom pb-3 d-md-block">
                <h5 class="font-weight-bolder text-primary">Popular Blogs</h5>
                <ol class="mt-3">
                    <li>
                        <h6 class="mb-0">C++ Language guide</h6>
                        <p class="f-12">Author Name</p>
                    </li>
                    <li>
                        <h6 class="mb-0">Python Snippets</h6>
                        <p class="f-12">Author Name</p>
                    </li>
                    <li>
                        <h6 class="mb-0">AutoCad Cheats</h6>
                        <p class="f-12">Author Name</p>
                    </li>
                    <li>
                        <h6 class="mb-0">Wiring Guide</h6>
                        <p class="f-12">Author Name</p>
                    </li>
                </ol>
            </div>
            <div class="mt-4">
                <h5 class="font-weight-bolder text-primary">Trending Blogs</h5>
                <ol class="mt-3">
                    <li>
                        <h6 class="mb-0">C++ Language guide</h6>
                        <p class="f-12">Author Name</p>
                    </li>
                    <li>
                        <h6 class="mb-0">Python Snippets</h6>
                        <p class="f-12">Author Name</p>
                    </li>
                    <li>
                        <h6 class="mb-0">AutoCad Cheats</h6>
                        <p class="f-12">Author Name</p>
                    </li>
                    <li>
                        <h6 class="mb-0">Wiring Guide</h6>
                        <p class="f-12">Author Name</p>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<?php
include "includes/footer.php"
?>