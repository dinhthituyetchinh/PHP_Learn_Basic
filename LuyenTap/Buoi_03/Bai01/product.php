<?php
function getProductID($id)
{
    include "./inc/products.php";
    $productList = getAllProd("./inc/data_B2.csv");
    return $productList[$id];
}
if(!isset($_GET['id']))
{
    header('Location: index.php');
}
else
{
    $item = getProductID($_GET['id']);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    include "./inc/header.php";
    ?>
    <div>
    <table class="table">
        <th>Mã SP</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Ảnh</th>
        <tr>
            <td><?php echo $item[0]?></td>
            <td><?php echo $item[1]?></td>
            <td><?php echo $item[2]?></td>
            <td><img src = "./img/<?php echo $item[3]?>" style="width: 50px; height: 50px;"/></td>

        </tr>
    </table>
    </div>

    <?php
    include "./inc/footer.php";
    ?>


</body>
</html>