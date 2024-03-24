<?php
    $m = "";
    $pt = "";
    $n = "";
    if(isset($_POST["somot"]) == true && isset($_POST["sohai"]) == true && isset($_POST["pheptoan"]) == true)
    {
        $m = $_POST["somot"];
        $n = $_POST["sohai"];
        $pt = $_POST["pheptoan"];
        if(is_numeric($m) && is_numeric($n))
        {
            switch($pt)
            {
                case"+":
                    $kq = $m + $n;
                    break;
                case"-":
                    $kq = $m - $n;
                    break;
                case "*":
                case "x": // Trường hợp người dùng nhập vào "x" cũng có thể hiểu là phép nhân
                    $kq = $m * $n;
                    break;
                case "/":
                case ":": // Trường hợp người dùng nhập vào ":" cũng có thể hiểu là phép chia
                    $kq = $m / $n;
                case "%":
                    $kq = $m % $n;
                    break;
                default:
                    $kq = $m + $n;
                    $pt = "+";
                break;
            }
        }
        else
        {
            $kq = "Không thực hiện được";
        }
    } 
    else
        {
            $kq = "Nhập phép toán cần tính vào";
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
        <h1>Máy tính điện tử</h1>
        <form action="#" method="post" name = "main-form">
            <div class="dong">
                <span>Số thứ nhất:</span>
                <input type ="text" name = "somot" value="<?php echo $m;?>"/>
            </div>
            <div class="dong">
                <span>Phép toán:</span>
                <input type ="text" name = "pheptoan" value="<?php echo $pt;?>"/>
            </div>
            <div class="dong">
                <span>Số thứ hai:</span>
                <input type ="text" name = "sohai" value="<?php echo $n;?>"/>
            </div>
            <div class="dong">
                <input type="submit" value="Xem kết quả" name= "kq" />
            </div>
            <div class="dong">
                <p>Kết quả: <?php echo $m." ".$pt." ".$n."=".$kq; ?></p>
            </div>
        </form>
    </div>
</body>
</html>