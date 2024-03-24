<?php 
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        if ($_POST['username'] == 'van' && $_POST['password'] == '123') {
            session_start();

            setcookie("username", $_POST['username']);

            header('location: index.php');
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="username">
        <br>

        <input type="text" name="password">
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>