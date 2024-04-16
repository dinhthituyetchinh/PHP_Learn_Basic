<?php 
$cart=[
    'id1'=>[ 'tenSP'=>'Iphone 15',  'soluong'=>1, 'dongia'=>28000000,   'khuyenmai'=>10],
    'id2'=>[ 'tenSP'=>'Samsung',    'soluong'=>2, 'dongia'=>30990000,   'khuyenmai'=>30],
    'id3'=>[ 'tenSP'=>'Man Hinh ',  'soluong'=>2, 'dongia'=>2100000,    'khuyenmai'=>0],
    'id4'=>[ 'tenSP'=>'Mouse',      'soluong'=>3, 'dongia'=>1900000,    'khuyenmai'=>15],
];

//print_r($cart);
function tongTien($giohang)
{
    $sum = 0;
    foreach($giohang as $item)
    {
        $tt = $item['soluong'] * ($item['dongia'] - ($item['dongia'] *($item['khuyenmai']/ 100)));      
        $sum += $tt;       
    }  
    return $sum;  
}

function tongTietKiem($giohang)
{
    $sum = 0;
    foreach($giohang as $item)
    {
        $tt = ($item['soluong'] * $item['dongia']) *($item['khuyenmai']/ 100);
       
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
    <table border="1" style="border-collapse: collapse;">
    <tr>
        <th>id</th>
        <th>TenSP</th>
        <th>So Luong</th>
        <th>Gia Goc</th>
        <th>Gia khuyen mai</th>
        <th>Thanh Tien</th>
        <th>Tiết kiệm</th>
    </tr>
    <?php
    foreach($cart as $key =>$item)
    {
    ?>
        <tr>
            <td style="width: 10px;"><?php echo $key;?></td>
            <td><?php echo $item['tenSP'];?></td>
            <td><?php echo $item['soluong'];?></td>
            <td><?php echo $item['dongia'];?></td>
            <td><?php echo $item['dongia'] - ($item['dongia'] *($item['khuyenmai']/ 100));?></td>
            <td><?php echo $item['soluong'] * ($item['dongia'] - ($item['dongia'] *($item['khuyenmai']/ 100)));?></td>
            <td><?php echo ($item['soluong'] * $item['dongia']) *($item['khuyenmai']/ 100);?></td>
        </tr>
    <?php
    }
    ?>
    <tr><td colspan="6">Tong tien: <?php echo tongTien($cart) ?></td>
    <td>Tiết kiệm: <?php echo tongTietKiem($cart) ?></td>
</tr>
    </table>
</body>
</html>
