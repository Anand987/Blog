<?php
include_once "includes/header.php";
$author_name = $_GET['profile'];
require 'includes/dbh.inc.php';

$sql = "SELECT u_id FROM users WHERE u_fll_name=?;";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../login.php?error=sqlerror");
    exit();
} else {
    mysqli_stmt_bind_param($stmt, "s", $author_name);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $queryResults = mysqli_num_rows($result);
    if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $author_id = $row['u_id'];
        }
    }
}
?>

<style>
    body {
        background-color: #e3e3e3;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-sm-12 p-4 bg-white">
            <h4 class="ml-3"><?php
                                echo $author_name
                                ?></h4>
            <div class="mt-5 ml-3 d-flex justify-content-between">
                    <h5>BLOGS</h5>
                    <p>No. of blogs: <?php echo $queryResults ?> </p>
                <?php
                $sql = "SELECT * FROM usersblogs WHERE u_id=?;";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../login.php?error=sqlerror");
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "s", $author_id);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    $queryResults = mysqli_num_rows($result);
                    if ($queryResults > 0) {
                        while ($row = mysqli_fetch_assoc($result)) { }
                    
                ?>
                
            </div>

        </div>
    </div>
</div>


<?php
}
}
include_once "includes/footer.php";
?>