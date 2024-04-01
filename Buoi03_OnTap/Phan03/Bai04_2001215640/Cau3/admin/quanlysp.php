<?php
    if(isset($_SESSION["username"]))
    {
        ?>
            <h3><?php echo $_SESSION["username"]?></h3>
        <?php
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
    <h1>Đây là trang quản lý sản phẩm</h1>
</body>
</html>