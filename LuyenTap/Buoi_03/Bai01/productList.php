<?php
include "./inc/products.php";
$data = getAllProduct("./inc/data_B2.csv");

?>

<table class="table">
        <th>Mã SP</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Ảnh</th>
        <th>Action</th>
        <?php
       foreach($data as $item)
       {
        ?>
        <tr>
            <td><?php echo $item[0]?></td>
            <td><?php echo $item[1]?></td>
            <td><?php echo $item[2]?></td>
            <td><img src = "./img/<?php echo $item[3]?>" style="width: 50px; height: 50px;"/></td>
            <td><a href="./product.php?id=<?php echo $item[0] ?>" class="btn btn-primary">Xem chi tiết</a></td>
        </tr>
        <?php
       }
       ?>
    </table>