<?php
session_start();
require "dbh.inc.php";
if (isset($_POST['submit-category'])) {
    $title = $_POST['CategoryTitle'];

    $sql = "INSERT INTO `blog_category`(`b_c_name`) VALUES ('$title')";
    $result = $conn->query($sql);

    header("Location: ../category.php?categoryinsertion=success");

}
