<?php
if(isset($_GET['gioBD']) == true &&  isset($_GET['gioKT']) == true)
{
    $gioBatDau = $_GET['gioBD'];
    $gioKetThuc = $_GET['gioKT'];


    $gioHat = $gioKetThuc - $gioBatDau;

    if($gioBatDau >= 10 && $gioKetThuc < 17 && $gioKetThuc > 10)
    {
        $tienThanhToan = $gioHat * 20000;
    }
    else if($gioBatDau >= 17 && $gioKetThuc <= 24)
    {
        $tienThanhToan = $gioHat * 45000;
    }
    else if($gioBatDau >= 10 && $gioKetThuc <= 24 && $gioKetThuc >= $gioBatDau)
    {
        $tienThanhToan = (17 - 10) * 20000 - ($gioBatDau - 10) * 20000 + ($gioKetThuc - 17) * 45000;
    }
    else
    {
        $tienThanhToan = 0; // giờ nghỉ
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
<div class="content">
        <h1>Tính tiền karaoke</h1>
        <form action="#" method="get" name = "main-form">
            <div class="dong">
                <span>Giờ bắt đầu:</span>
                <input type ="text" name = "gioBD" value="<?php 
                if(isset($_GET['gioBD']) == true &&  isset($_GET['gioKT']) == true)
                {
                    echo $_GET['gioBD'];
                }
                ?>"/><span>(h)</span>
            </div>
            <div class="dong">
                <span>Giờ kết thúc:</span>
                <input type ="text" name = "gioKT" value="<?php 
                if(isset($_GET['gioBD']) == true &&  isset($_GET['gioKT']) == true)
                {
                    echo $_GET['gioKT'];
                }
                ?>"/><span>(h)</span>
            </div>
            <div class="dong">
                <span>Tiền thanh toán:</span>
                <input type ="text" value="<?php 
                if(isset($_GET['gioBD']) == true &&  isset($_GET['gioKT']) == true)
                {
                    echo $tienThanhToan;

                }
                ?>"/><span>(VNĐ)</span>
            </div>
            <div >
                <input type="submit" value="Tính tiền" />
            </div>
        </form>
    </div>
</body>
</html>