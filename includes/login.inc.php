<?php

if (isset($_POST['login-submit'])) {
    require "dbh.inc.php";

    $mailu_name = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailu_name) || empty($password)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE u_name=? OR u_email=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $mailu_name, $mailu_name);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['u_pwd']);
                if ($pwdCheck == false) {
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                } 
                else if($pwdCheck ==true) {
                    session_start();
                    $_SESSION['user_id'] = $row['u_id'];
                    $_SESSION['u_name'] = $row['u_name'];
                    $_SESSION['u_fll_name'] = $row['u_fll_name'];

                    header("Location: ../index.php?login=success");
                    exit();
                }
                else {
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                }
                
            }
            else{
                header("Location: ../login.php?error=nouser");
                exit();
            }
        }
    }
}
else {
    header("Location: ../login.php");
    exit();
}