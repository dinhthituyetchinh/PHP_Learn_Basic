<?php
include "./header.php";
if(isset($_POST["username"]) && isset($_POST["password"]))
{
    $user = $_POST["username"];
    
    $pass = $_POST["password"];
    if(($user == "user1"|| $user == "user2") && $pass == "pass1234")
    {
      $_SESSION["username"] = $user;
        header("location: ./index.php");
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
<form acion = "" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name = "username" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name = "password">
  </div>
  <button type="submit" class="btn btn-primary">Đăng nhập</button>
</form>
</body>
</html>