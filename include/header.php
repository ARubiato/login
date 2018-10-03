<?php
require 'bootstrap.php';

if(!isset($_SESSION)) {

  session_start();

  if(isset($_SESSION['uname'])) {
    $uname = $_SESSION['uname'];
  }
} else {

  if(isset($_SESSION['uname'])) {
    $uname = $_SESSION['uname'];
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Muh Logo >:-(</a>
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
          <li class = "nav-item"><?php echo "Welcome " . $uname . "!"; ?></li>
          <li class = "nav-item"><a class = "btn btn-outline-danger" href = "php/logout.php">Logout</a></li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      </ul>
  </div>

</nav>


</body>
</html>