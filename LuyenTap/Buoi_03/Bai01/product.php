<?php
include "./inc/products.php";
$data = getAllProduct("./inc/data_B2.csv");

function getIdProduct($id) {
 if(!isset($id))
 {
    echo 'Mã sp không tồn tại';
 }
    
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
    include "./inc/footer.php";
    ?>

</body>
</html>