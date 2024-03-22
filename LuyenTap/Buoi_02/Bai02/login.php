<?php

      $err = "";
      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        if($username == "" || $password == "")
        {
          $err = "You must input data";
        }
        else
        {
          header('Location: index.php');
        }
      }    
      ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div><img src ="./1.png" style="width: 100%;"/></div>
    <div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar scroll</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Link</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    </div >
    <div class = "d-flex">
        <div style = "width: 70%;">
        <form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputUsername" class="form-label">UseName</label>
    <input type="text" class="form-control" id="exampleInputUsername" name = "user">   
      <p class="text-danger"><?php echo $err;?></p>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
    <p class="text-danger"><?php echo $err;?></p>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
 
</form>

      </div>

        <div style = "width: 30%;">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
              HOA THEO CHỦ ĐỀ
            </a>
            <a href="#" class="list-group-item list-group-item-action">HOA KHAI TRƯƠNG</a>
            <a href="#" class="list-group-item list-group-item-action"></a>
            <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
            <a class="list-group-item list-group-item-action disabled" aria-disabled="true">A disabled link item</a>
      </div>
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
          The current link item
        </a>
        <a href="#" class="list-group-item list-group-item-action">A second link item</a>
        <a href="#" class="list-group-item list-group-item-action">A third link item</a>
        <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
        <a class="list-group-item list-group-item-action disabled" aria-disabled="true">A disabled link item</a>
      </div>
      </div>
    </div>
    <div style = "background-color: green; height: 50px;"></div>
</body>
</html>