<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=chrome">
  <title>Blog</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
<!-- FONT AWESOME SCRIPT -->
<script src="https://kit.fontawesome.com/a1f2174f04.js" crossorigin="anonymous"></script>
  <?php
  include "dbh.inc.php"
  ?>
<div style="height: 10px; background-color: #0d47a1;"></div>
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm bg-primary">
    <div class="container">
      <a href="index.php" class="navbar-brand"><span class="text-success font-weight-bold">EDU</span>BLOG</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a href="posts.php" class="nav-link">Posts</a></li>
        
          <?php 
            if (isset($_SESSION['user_id'])) {
              echo '
              
              <li class="nav-item"><a href="create.blog.php" class="nav-link">Add Posts</a></li>
              <li class="nav-item"><a href="category.php" class="nav-link">Categories</a></li>
              <li class="nav-item"><a href="about.php" class="nav-link">About us</a></li>
              </ul>
              <ul class="navbar-nav ml-auto">
              <li class="nav-item">
              <a href="profile.php?profile='. $_SESSION['u_fll_name'].'" class="nav-link"> <i class="fas fa-user text-white"></i> My Profile</a>
              </li>
                <li class="nav-item">                    
                    <form action="includes/logout.inc.php" method="post">
                      <button class="btn btn-link text-danger text-decoration-none font-weight-bold" type="submit" name="logout-submit"> <i class="fas fa-sign-out-alt"></i> Logout</button>
                    </form>
                </li
               
              ';
            } else {
              echo '
              <li class="nav-item"><a href="about.php" class="nav-link">About us</a></li>
              </ul>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link mx-2" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-outline-warning" href="signup.php">Get started</a>
                </li>';
            }
            
          ?>  
        </ul>
      </div>
    </div>
  </nav>