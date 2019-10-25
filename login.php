<?php
include "includes/header.php";
?>

<main>
    <!-- Login Form -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
                <div class="mt-5">
                    <div class="m-auto text-center">
                        <img class="mb-2" src="assets/images/logo.png" alt="" height="200" width="200">
                        <h3 class="font-weight-bold"><span class="text-success">EDU</span> BLOG</h3>
                        <form class="mt-3" action="includes/login.inc.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control rounded-pill" id="Email" name="mailuid" aria-describedby="emailHelp" placeholder="Username/E-mail">
                            </div>
                            <div class="form-group text-right">
                                <input type="password" class="form-control rounded-pill" id="password" name="pwd" placeholder="Password">
                                <small><a href="forgotpass.php" class="font-weight-bolder text-decoration-none text-danger">forgot password?</a> </small>
                            </div>
                            <button type="submit" class="btn btn-primary px-5 rounded-pill font-weight-bold" name="login-submit">LOGIN</button>
                        </form>
                        <p class="mt-3 font-weight-bold text-primary">New User ? <a href="signup.php" class="text-decoration-none text-success">Sign up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include "includes/footer.php";
?>