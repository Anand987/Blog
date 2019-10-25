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

  <?php
  include "dbh.inc.php"
  ?>

  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm mb-4 bg-primary">
    <div class="container">
      <a class="navbar-brand text-uppercase" href="index.php">Blog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <?php 
            if (isset($_SESSION['user_id'])) {
              echo '
                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons align-top">add</i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="includes/create.blog.php">Create Blog</a>
                    <a class="dropdown-item" href="#">Add Image</a>
                    <!-- <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> -->
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" class="img-fluid rounded-pill" style="width: 25px !important;">
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="profile.php">view profile</a>
                    <form action="includes/logout.inc.php" method="post">
                      <button class="btn btn-link text-decoration-none dropdown-item" type="submit" name="logout-submit">Logout</button>
                    </form>
                    <!-- <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> -->
                  </div>
                </li>
              ';
            } else {
              echo '
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