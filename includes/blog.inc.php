<?php
require "dbh.inc.php";
$sql = "SELECT * FROM usersblogs INNER JOIN users ON usersblogs.u_id = users.u_id;";
$result = mysqli_query($conn, $sql);
$queryResults = mysqli_num_rows($result);

if ($queryResults > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class="card my-3">
        <div class="card-header bg-white">
            <a class="text-dark text-decoration-none" href="http://">
                <h5 class="mb-0">'. $row['b_title'] .'</h5>
            </a>
        </div>
        <div class="card-body">
            <p class="mb-0">'. $row['b_content'] .'</p>
        </div>
        <div class="card-footer bg-white d-flex">
            <div class="mr-3">
                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" class="img-fluid rounded-pill" style="width: 35px !important;">
            </div>
            <div>
                <h6 class="card-title mb-0">'. $row['u_fll_name'] .'</h6>
                <p class="text-secondary mb-0 f-12">'. $row['b_date'] .'</p>
            </div>
        </div>
    </div>
        ';
    }
}
?>

