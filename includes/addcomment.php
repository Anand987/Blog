<?php
session_start();
require "dbh.inc.php";
if (isset($_POST['submit-comment'])) {
    $comment = $_POST['commentBrief'];
    $blog_id = $_GET['blogid'];
    $blog_name = $_GET['title'];
    $author_name = $_GET['authorname'];
    $c_username = $_SESSION["u_fll_name"];


    $sql = "INSERT INTO `comments`(`c_detail`, `u_name`, `b_id`) VALUES ('$comment','$c_username','$blog_id')";
    $result = $conn->query($sql);

    header("Location: ../viewblog.php?title=". $blog_name ."&author=".$author_name.'&commentinsertion=success');

}
