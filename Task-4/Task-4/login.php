<?php
session_start();

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
        <a href="./login.php"><button class="btn btn-primary">login</button></a>
    </div>
  </div>
</nav>

<div class="container m-auto">
<form action="./handlepage/handle.php" method="POST">
  <div class="mb-3 mt-5">
    <label class="form-label text-light">Email address</label>
    <input type="email" class="form-control"  name="mail">
    <small style="color:red"> <?php echo isset($_SESSION['errors']['email'])? $_SESSION['errors']['email']:''; ?></small>
  </div>
  <div class="mb-3">
    <label class="form-label text-light">Password</label>
    <input type="password" class="form-control"  name="pass">
    <small style="color:red"><?php echo isset($_SESSION['errors']['password']) ? $_SESSION['errors']['password']:'';?></small>
  </div>
  <button type="submit" class="btn btn-primary" value="submit">Submit</button>
</form>
<?php unset($_SESSION['errors']);  ?>
</div>



</body>
</html>