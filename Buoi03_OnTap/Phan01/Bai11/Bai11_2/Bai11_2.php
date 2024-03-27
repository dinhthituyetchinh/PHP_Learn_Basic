<?php
if(isset($_GET['canh1']) && isset($_GET['canh2']) && isset($_GET['canh3']))
{
    $canhThuNhat = $_GET['canh1'];
    $canhThuHai = $_GET['canh2'];
    $canhThuBa = $_GET['canh3'];

    if($canhThuNhat + $canhThuHai > $canhThuBa && $canhThuNhat + $canhThuBa > $canhThuHai && $canhThuBa + $canhThuHai > $canhThuNhat)
    {
        if(pow($canhThuNhat, 2) == pow($canhThuHai, 2) + pow($canhThuBa, 2) || pow($canhThuHai, 2) == pow($canhThuNhat, 2) + pow($canhThuBa, 2) || pow($canhThuBa, 2) == pow($canhThuHai, 2) + pow($canhThuNhat, 2))
        {
            $loaiTG = "Tam giác vuông";
        }
        else if($canhThuNhat == $canhThuHai && $canhThuHai == $canhThuBa)
        {
            $loaiTG = "Tam giác đều";
        }
        else if($canhThuNhat == $canhThuHai || $canhThuNhat == $canhThuBa || $canhThuHai == $canhThuBa)
        {
            $loaiTG = "Tam giác cân";
        }
        else if(pow($canhThuNhat, 2) > pow($canhThuHai, 2) + pow($canhThuBa, 2) || pow($canhThuHai, 2) > pow($canhThuNhat, 2) + pow($canhThuBa, 2) || pow($canhThuBa, 2) > pow($canhThuHai, 2) + pow($canhThuNhat, 2))
        {
            $loaiTG = "Tam giác tù";
        }
        else
        {
            $loaiTG = "Tam giác nhọn";
        }
    }
    else
    {
        $loaiTG = "Các cạnh bạn nhập vào không phải 3 cạnh của tam giác";
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
        <h1>NHẬN DẠNG TAM GIÁC</h1>
        <form action="#" method="get">
            <div class="dong">
                <span>Cạnh 1:</span>
                <input type ="text" name = "canh1" value="<?php 
                if(isset($_GET['canh1']))
                {
                    echo $_GET['canh1'];
                }
                ?>"/><span>(cm)</span>
            </div>
            <div class="dong">
                <span>Cạnh 2:</span>
                <input type ="text" name = "canh2" value="<?php 
                if(isset($_GET['canh2']))
                {
                    echo $_GET['canh2'];
                }
                ?>"/><span>(cm)</span>
            </div>
            <div class="dong">
                <span>Cạnh 3:</span>
                <input type ="text" name = "canh3" value="<?php 
                if(isset($_GET['canh3']))
                {
                    echo $_GET['canh3'];
                }
                ?>"/><span>(cm)</span>
            </div>
            <div class="dong">
                <span>Loại tam giác:</span>
                <input type ="text" value="<?php 
                if(isset($_GET['canh1']) && isset($_GET['canh2']) && isset($_GET['canh3']))
                {
                    echo $loaiTG;
                }
                ?>"/>
            </div>
            <div class="btn_sub">
                <input type="submit" value="Nhận dạng" />
            </div>
        </form>
    </div>
</body>
</html>