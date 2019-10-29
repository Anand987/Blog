<?php
include "includes/header.php";
?>

<main>
    <!-- signup Form -->
    <div class="container">
        <div class="row align-items-center" style="margin-top: 5%; min-height: 580px;">
            <div class="col-sm-6 text-center">
                <img src="assets/images/logo.png" alt="" height="250" width="250">
                <h4 class="font-weight-bolder mt-2"><span class="text-success">EDU</span> BLOG</h4>
            </div>
            <div class="col-sm-6 text-center">
                <form class="mt-3" action="includes/signup.inc.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="u_fllname" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="Email" name="u_email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" name="u_name" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="pwd" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="passwordRepeat" name="pwdRpt" placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary px-5 rounded-pill font-weight-bold text-uppercase" name="signup-submit">signup</button>
                </form>
                <p class="mt-3 font-weight-bold text-primary">Already have an account ? <a href="login.php" class="text-decoration-none text-success">Sign in</a></p>
            </div>
        </div>
    </div>
</main>

<?php
include "includes/footer.php";
?>