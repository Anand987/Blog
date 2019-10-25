<?php
include "includes/header.php";
?>

<main>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <div class="container text-center">
                    <h1 class="text-dark">Reset your password</h1>
                    <p class="text-muted mt-3 mb-1" style="font-size: 18px;">An e-mail will be send to you with instructions on how to reset your password</p>
                    <form action="includes/reset-request.inc.php" method="post">
                    <div class="form-group">
                        <input class="form-control w-75 m-auto" type="text" name="email" placeholder="Enter your email address">
                    </div>
                        <button class="btn btn-secondary px-5" type="submit" name="reset-request-submit">Receive new password by email</button>
                    </form>

                    <?php
                    if (isset($_GET["reset"])) {
                        if ($_GET["reset"] == "success") {
                            echo '<p class="text-success">Check your email! </p>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include "includes/footer.php";
?>