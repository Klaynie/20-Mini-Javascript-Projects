<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to start page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Jekyll v4.1.1" />
    <title>Welcome</title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/4.5/examples/cover/"
    />

    <!-- Bootstrap core CSS -->
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
      rel="stylesheet"
    />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      body {
    background-image: url('chalk-4829602_1920.jpg');
    }

    </style>
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet" />
    
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">My Employees</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="logout.php">Logout</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
      <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="index.php" class="btn btn-primary">Access Employees</a><br><br>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>
            Cover template for
            <a href="https://getbootstrap.com/">Bootstrap</a>, by
            <a href="https://twitter.com/mdo">@mdo</a>.
          </p>
        </div>
      </footer>
    </div>
  </body>
</html>