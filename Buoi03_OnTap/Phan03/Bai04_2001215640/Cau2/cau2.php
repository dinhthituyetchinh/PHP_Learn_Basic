<?php
$giohang = array();
$sp = array("stt" => 1, "tenSP" => "Iphone 15", "Hinh" => "1.jpg", "soLuong" => 1, "donGia" => 28000000);
$giohang[] = $sp;
$sp = array("stt" => 2, "tenSP" => "Samsung", "Hinh" => "2.jpg", "soLuong" => 2, "donGia" => 30990000);
$giohang[] = $sp;
$sp = array("stt" => 3, "tenSP" => "Man Hinh", "Hinh" => "3.jpg", "soLuong" => 2, "donGia" => 2100000);
$giohang[] = $sp;
$sp = array("stt" => 4, "tenSP" => "Mouse", "Hinh" => "4.jpg", "soLuong" => 3, "donGia" => 1900000);
$giohang[] = $sp;

echo '<pre>';
print_r($giohang);

function tongTien($giohang)
{
    $sum = 0;
    foreach($giohang as $item)
    {
        $sl = $item["soLuong"];
        $dg = $item["donGia"];
        $tt =  $sl * $dg;
        $sum += $tt;
        
    }  
    return $sum;  
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
    <table border="1">
    <tr>
        <th>STT</th>
        <th>TenSP</th>
        <th>Hinh</th>
        <th>So Luong</th>
        <th>Don Gia</th>
        <th>Thanh Tien</th>
    </tr>
    <?php
    foreach($giohang as $item)
    {
    ?>
        <tr>
            <td style="width: 10px;"><?php echo $item['stt'];?></td>
            <td><?php echo $item['tenSP'];?></td>
            <td><?php echo $item['Hinh'];?></td>
            <td><?php echo $item['soLuong'];?></td>
            <td><?php echo $item['donGia'];?>VND</td>
            <td><?php echo $item['soLuong'] * $item['donGia'];?>VND</td>
        </tr>
    <?php
    }
    ?>
    <tr><td colspan="6">Tong tien: <?php echo tongTien($giohang); ?>VND</td>
</tr>
    </table>
</body>
</html>