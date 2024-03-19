<?php

$data = [
    [
        "id" => 1,
        "name" => "Keyboard",
        "price" => 6000
    ],
    [
        "id" => 2,
        "name" => "Mouse",
        "price" => 5000
    ],
    [
        "id" => 3,
        "name" => "Laptop",
        "price" => 100000
    ]
    ];

?>
<table>
    <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Giá bán</th>
    </tr>

        <?php
        foreach ($data as $item)
        {
            ?>
             <tr>
                <td><?php echo $item['id'] ?></td>
                <td><?php echo $item['name'] ?></td>
                <td><?php echo number_format($item['price']) ?></td>
            </tr>

            <?php
        }
        ?>
</table>




