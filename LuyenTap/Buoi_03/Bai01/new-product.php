
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Tên sản phẩm <input type="text" name = "pName"/> <br>
        Giá <input type="text" name="pPrice"/> <br>
        <button type="submit" name="sub">Submit</button>
    </form>
</body>
</html>

<?php
    if(isset($_POST['sub']))
    {
        var_dump($_POST);
    }
?>