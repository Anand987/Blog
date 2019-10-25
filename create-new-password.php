<?php
include "includes/header.php";
?>

<main>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <div class="container text-center">

                    <?php
                    $selector = $_GET['selector'];
                    $validator = $_GET['validator'];

                    if (empty($selector) || empty($validator)) {
                        echo "Could not validate your request";
                    } else {
                        if (ctype_xdigit($selector)  !== false && ctype_xdigit($validator) !== false) {
                    ?>

                            <form action="includes/reset-password.inc.php" method="post">
                                <input type="hidden" name="selector" value="<?php echo $selector ?>">
                                <input type="hidden" name="validator" value="<?php echo $validator ?>">
                                <input type="password" name="pwd" placeholder="Enter new password">
                                <input type="password" name="pwd-repeat" placeholder="Repeat new password">
                                <button type="submit" name="reset-password-submit">Reset Password</button>
                            </form>
                    <?php
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