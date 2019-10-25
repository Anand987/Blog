<?php

if (isset($_POST['signup-submit'])) {
    //accessing dbh.inc.php file for connection establishment
    require 'dbh.inc.php';

    //storing value of form in variables
    $fullname = $_POST['u_fllname'];
    $username = $_POST['u_name'];
    $email = $_POST['u_email'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwdRpt'];

    //for checking emptyfields error = ERROR HANDLING
    if (empty($username) || empty($fullname) || empty($email) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../signup.php?error=emptyfields&u_name=" . $username . "&email=" . $email . "&fullname=" . $fullname);
        exit(); //exit file if any error occurs and return to page
    } 
    
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username) && !preg_match("/^[a-zA-Z]*$/", $fullname)) {
        header("Location: ../signup.php?error=invalidemailusernamefullname");
        exit();
    } 
    
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidemail&u_name=" . $username);
        exit();
    } 
    
    elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invalidusername&mail=" . $email);
        exit();
    } 
    
    elseif (!preg_match("/^[a-zA-Z]*$/", $fullname)) {
        header("Location:../signup.php?error=invalidname&mail=" . $email . "u_name=" . $username);
        exit();
    }

    //condition for matching password
    elseif ($password !== $passwordRepeat) {
        header("Location: ../signup.php?error=passwordcheck&mail=" . $email . "u_name=" . $username . "&fullname=" . $fullname);
        exit();
    }

    //username already taken error handling
    else {
        $sql = "SELECT u_name FROM users WHERE u_name=?";
        $stmt = mysqli_stmt_init($conn);
        //for sql statement fails
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location../signup.php?error=sqlerror");
            exit();
        } 
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt); //number of rows results in db
            if ($resultCheck > 0) {
                header("Location:../signup.php?error=usertaken&mail=" . $email . "&fullname=" . $fullname);
                exit();
            } 
            else {
                $sql = "INSERT INTO users (`u_fll_name`, `u_name`, `u_email`, `u_pwd`) VALUES ( ? , ? , ? , ?)";
                $stmt = mysqli_stmt_init($conn);
                //for sql statement fails
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location../signup.php?error=sqlerror");
                    exit();
                } 
                else {
                    //hashing password
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    //binding statemnt for uploading to DB
                    mysqli_stmt_bind_param($stmt, "ssss", $fullname, $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    header("Location:../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} 

else {
    header("Location:../signup.php");
    exit();
}
