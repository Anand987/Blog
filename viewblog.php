<?php
require "includes/dbh.inc.php";
include "includes/header.php";
$title = $_GET['title'];
$author = $_GET['author'];

$sql = "SELECT * FROM usersblogs INNER JOIN users ON usersblogs.u_id LIKE users.u_id;";

$sql = "SELECT * FROM usersblogs WHERE b_title=?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../viewblog.php?error=sqlerror");
    exit();
} else {
    mysqli_stmt_bind_param($stmt, "s", $title);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
        $startdate = strtotime(str_replace('-', '/', $row['b_date']));
        ?>

        <div class="container mt-3" style="min-height: 500px;">
            <div class="card">
                <div class="card-header bg-primary text-light">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-9">
                                <?php
                                        echo '
                            <h5 class="mb-0">' . $row['b_title'] . '</h5>
                            <h6 class="mb-0">' . $row['b_subtitle'] . '</h6>
                            ';
                                        ?>
                            </div>
                            <div class="col-3">
                                <?php
                                        if (isset($_SESSION['user_id'])) {
                                            ?>

                                    <div class="text-right">
                                        <form class="d-inline" action="includes/update.inc.php" method="post">
                                            <button class="btn btn-sm btn-warning text-uppercase" type="submit" name="update-blog">update</button>
                                        </form>
                                        <form class="d-inline" action="includes/delete.inc.php" method="post">
                                            <button class="btn btn-sm btn-danger text-uppercase" type="submit" name="delete-blog">delete</button>
                                        </form>
                                    </div>

                                <?php
                                        } else { }
                                        ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?php
                            echo '
                            <p>' . $row['b_content'] . '</p>
                            <div class="blockquote-footer">' . $author . ' <cite title="Source Title">' . date("M d", $startdate) . '</cite></div>
                            ';
                            ?>
                </div>

                <div class="card-footer bg-light text-dark">
                    <!-- show comments from database-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-1 py-3">
                                <img class="img-fluid" src="assets/images/logo.png" alt="profile image">
                            </div>
                            <div class="col-sm-9 py-3">
                                <span class="font-weight-bold">Username</span> <span class="text-muted small">Time Uploaded</span>
                                <div>
                                    content
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-1 py-3">
                                <img class="img-fluid" src="assets/images/logo.png" alt="profile image">
                            </div>
                            <div class="col-10 py-3">
                                <!-- form to post comments -->
                                <form action="" method="post">
                                    <input class="form-control" type="text" name="commentBrief" id="Comment">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

<?php
    }
}
include "includes/footer.php"
?>