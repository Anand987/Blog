<?php

require "dbh.inc.php";
session_start();

if (isset($_POST['create-blog'])) {
    $blog_title = $_POST['b_title'];
    $blog_subtitle = $_POST['b_subtitle'];
    $blog_content = $_POST['b_content'];
    $blog_category = $_POST['b_category'];
    $date_posted = date("Y-m-d");
    $author_id = $_SESSION['user_id'];

    $sql = "SELECT * FROM blog_category WHERE b_c_name=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location: ../create.blog.php?error=categorysqlerror");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "s", $blog_category);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            $blog_category_id = $row['b_c_id'];
        }
    }

    $sql = "INSERT INTO `usersblogs`(`b_title`, `b_subtitle`, `b_content`, `b_date`, `u_id`, `b_c_id`) VALUES (?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location../signup.php?error=sqlerror");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "ssssss", $blog_title, $blog_subtitle, $blog_content, $date_posted, $author_id, $blog_category_id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        header("Location:../create.blog.php?createblog=success");
        exit();
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    header('Location: ../create.blog.php');
    exit();
}