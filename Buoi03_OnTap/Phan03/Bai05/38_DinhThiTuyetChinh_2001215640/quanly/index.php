<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Đây là trang index</h1> <br />
    <?php  
        if(isset($_SESSION["username"]))
        {
            ?>
                <h3>Tên đăng nhập là: </h3>
                <h4>
            <?php
            echo $_SESSION["username"];
            
        }
        else
        {
            ?>
            </h4>
            <h3>Tên đăng nhập chưa có thông tin </h3> <br />
            <a href="../login.php">Nhấn vào đây để đăng nhập</a> <r />
            <?php
        }
    ?>
    <br /> <br />
    <h2>
        Để check trường hợp chưa đăng nhập thì trở lại trang login: Đầu tiên chạy trang index => nhấn đường link chuyển sang trang QLSP <br />
        (Tức lúc này tên đăng nhập chưa được hiển thị trên trang index, còn khi tên đăng nhập có trê trang index. tức là bạn đã tiến hàng đăng nhập thành công.)
</h2>
    <a href="./quanlysp.php">Nhấn vào đây để chuyển sang trang QLSP</a> <br />

    <a href="./logout.php">Nhấn vào đây để đăng xuất</a>
</body>
</html>