<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=chrome">
    <title>Blog</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <?php
    include "includes/nav.php"
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 offset-sm-1">
                <div class="container">
                    <h5 class="mb-4 font-weight-bolder">Recommended Blogs</h5>
                    <?php
                    for ($i = 0; $i < 5; $i++) {
                        include "includes/blog.inc.php";
                    }
                    ?>
                </div>
            </div>
            <div class="col-sm-2">
                <div>
                    <h5 class="font-weight-bolder">Popular Blogs</h5>
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
                    <h5 class="font-weight-bolder">Trending Blogs</h5>
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
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</html>