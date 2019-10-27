<?php
include "includes/header.php"
?>

<style>
    .bg-image1 {
        background-image: url(./assets/images/image1.jpg) !important;
        background-color: rgba(0, 0, 0, 0.68);
        background-position: center !important;
        background-size: cover !important;
        background-repeat: no-repeat;
        background-blend-mode: overlay;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="jumbotron p-4 p-md-5 text-white rounded bg-image1 w-100" style="height: 50vh;">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">WELECOME to <span class="font-weight-bold" style="color: #00E676;">EDU</span> BLOG</h1>
                <p class="lead my-3">This is a platform for educational purpose in use of college students via college only</p>
                <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Know more about us!!</a></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 offset-sm-1">
            <div class="container">
                <h5 class="mb-4 font-weight-bolder text-primary">Recommended Blogs</h5>
                <?php
                include "includes/blog.inc.php";
                ?>
            </div>
        </div>
        <div class="col-sm-2 border-left pl-4">
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