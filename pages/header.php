<?php
$page_roles = array('admin', 'user');
require_once 'checksession.php';
require_once 'config.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Fish R Us</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <!-- Custom Styles -->
  <link href="../styles/theme.css" rel="stylesheet">
</head>

<body>
  <!-- Header -->
  <header>
    <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="../images/fish-logo.png" style="height:30px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">Shop</a>
            </li>
        <?php
        if (in_array('admin', $user_roles)) {
            echo '
            <li class="nav-item">
              <a class="nav-link" href="admin.php">Admin</a>
            </li>';
            } else {
              echo '';
            }
        ?>
          </ul>
          <form class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <?php
                    echo 'Welcome, '.$username;
                  ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Account Details</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="login.php">Logout</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cart.php">Shopping Cart (2)</a>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </nav>
  </header>