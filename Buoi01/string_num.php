<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Define string</h1>
    <?php
        $name = "Tuyết Chinh";
        $mess = "xin chào";
        echo $name . " : " . $mess; // Toán tử chấm để nối chuỗi
        echo "<br />";
        echo "$name: $mess";
        
    ?>
    <h1>Define number</h1>
    <?php
        $age = 20;
        echo "Age: $age";
        echo "<br />";
        $a = 3.6;
        echo "Num: $a";
    ?>
    <h1>Str + Num</h1>
    <?php
        $fullName = "Đinh Thị Tuyết Chinh";

        echo $fullName . " đang ở tuổi " . $age;
        echo "<br />";
        echo "$fullName tuổi $age";
    ?>
    <h1>Sum two num</h1>
    <?php
    $x = 30;
    $y = 20;
    $total = $x + $y;
    echo "$x + $y = $total";
    ?>
</body>
</html>