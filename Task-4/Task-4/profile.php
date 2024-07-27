<?php
session_start();
if (! isset($_SESSION["userEmail"])) {
    return header("location: index.php");
  


}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-black">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php"><h1 class="navbar-logo text-capitalize">i<span class="text-light">store</span></h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item links-nav-1">
          <a class="nav-link active text-light " aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item links-nav-1">
          <a class="nav-link active text-light" aria-current="page"  href="./product/product.php">Products</a>
        </li>
      </ul>
    </div>
    <div>
        <a href="./Logout.php"><button class="btn btn-primary">LogOut</button></a>
    </div>
  </div>
</nav>

<div class="container mt-5 m-auto">
    <div >
        <div class="d-flex justify-content-center align-items-center w-50 gap-3">
            <img src="./images/2919906.png" alt="profile photo" class="w-50">
            <h2 class="text-light">Welcome: <?Php echo $_SESSION['userEmail'] ;?></h2>
        </div>
    </div>
</div>
</body>
</html>