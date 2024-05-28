<?php
require './config.php';

// Get doanhNghiep data based on the ID from the URL
$id640 = $_GET['id'];
$doanhNghiep = fetchDoanhNghiep($id640);


$pdo = connectDb();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $madn640 = $_POST['madn640'];
    $tendn640 = $_POST['tendn640'];
    $masothue640 = $_POST['masothue640'];
    $nguoidaidien640 = $_POST['nguoidaidien640'];
    $hinh640 = $_FILES['hinh640']['name'];


    if ($hinh640) {
        $target_dir = "img-logo/";
        $target_file = $target_dir . basename($hinh640);
        move_uploaded_file($_FILES["hinh640"]["tmp_name"], $target_file);
    } else {
        $target_file = $doanhNghiep['logo'];
    }

    $sql = "UPDATE doanhnghiep 
            SET madn = :madn, tendn = :tendn, masothue = :masothue, nguoidaidien = :nguoidaidien, logo = :logo 
            WHERE madn = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':madn', $madn640);
    $stmt->bindParam(':tendn', $tendn640);
    $stmt->bindParam(':masothue', $masothue640);
    $stmt->bindParam(':nguoidaidien', $nguoidaidien640);
    $stmt->bindParam(':logo', $target_file);
    $stmt->bindParam(':id', $id640);

    if ($stmt->execute()) {
       header("location: index.php");
    } else {
        echo "Error updating record";
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
    <h1 class="text-uppercase text-center">Cập nhật doanh nghiệp</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="id" class="form-label">Mã doanh nghiệp</label>
            <input type="text" class="form-control" id="id" name="madn640" value="<?php echo $doanhNghiep['madn']?>">
        </div>
        <div class="mb-3"> 
            <label for="fullName" class="form-label">Tên Doanh Nghiệp</label>
            <input type="text" class="form-control" id="fullName" name="tendn640" value="<?php echo $doanhNghiep['tendn']?>">
        </div>
        <div class="mb-3">
            <label for="masothue" class="form-label">Mã số thuế</label>
            <input type="text" class="form-control" id="masothue" name="masothue640" value="<?php echo $doanhNghiep['masothue']?>">
        </div> 
        <div class="mb-3">
            <label for="nguoidaidien" class="form-label">Người đại diện</label>
            <input type="text" class="form-control" id="nguoidaidien" name="nguoidaidien640" value="<?php echo $doanhNghiep['nguoidaidien']?>">
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Hình hiện tại</label> <br />
            <img src="<?php echo $doanhNghiep['logo'] ?>"/>
        </div>
      
        <div class="mb-3">
            <label for="img" class="form-label">Cập nhật hình</label>
            <input type="file" class="form-control" id="img" name="hinh640" value="<?php echo $doanhNghiep['logo']?>">
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <input type="submit" value="Update" class="btn btn-danger text-uppercase">
        </div>
    </form>
</body>
</html>
