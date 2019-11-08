<?php

require "dbh.inc.php";
session_start();

if (isset($_POST['create-blog'])) {
    $blog_title = $_POST['b_title'];
    $blog_subtitle = $_POST['b_subtitle'];
    $blog_content = $_POST['b_content'];
    $blog_category = $_POST['b_category'];
    $author_id = $_SESSION['user_id'];

    if (empty($blog_title) || empty($blog_content)) {
        header("Location: ../create.blog.php?error=emptyfileds&b_subtitle=" . $blog_subtitle . "&category=" . $blog_category);
        exit();
    } else {
        $sql = "SELECT * FROM blog_category WHERE b_c_name=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../create.blog.php?error=categorysqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $blog_category);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $blog_category_id = $row['b_c_id'];
            }
        }

        $sql = "INSERT INTO `usersblogs`(`b_title`, `b_subtitle`, `b_content`, `u_id` , `category`) VALUES (?,?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location../signup.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "sssss", $blog_title, $blog_subtitle, $blog_content, $author_id ,$blog_category);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            header("Location:../create.blog.php?createblog=success");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header('Location: ../create.blog.php');
    exit();
}