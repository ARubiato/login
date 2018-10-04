<?php
require 'bootstrap.php';
require 'php/session.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> >:-( </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create-post.php">Create a Post</a>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
      <ul class = "navbar-nav ml-2">
          <li class = "nav-item"></li>
          <li class = "nav-item"></li>
          <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Settings</a>
              <div class="dropdown-menu dropdown-menu-right">
                 <a class="dropdown-item"><?php echo "Signed in as ". $FullN; ?></a>
                 <div class = "dropdown-divider"></div>
                 <a class = "dropdown-item btn btn-outline-danger" href = "php/logout.php">Sign out</a>
              </div>
          </li>
        </ul>
  </div>

</nav>

<script src = "js/jquery.slim.min.js"></script>
<script src = "js/bootstrap.min.js"></script>
</body>
</html>