<?php
    include './config.php';

    function loadClass($c)
    {
        include "class/$c.php";
    }
    spl_autoload_register('loadClass');
    $conn = new DB();
    $data2 = $conn->selectQueyry("select * from lop");
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
    <h1 class="text-uppercase text-center">Add student</h1>
    <form action="./add_student.php" method="post">
        <div class="mb-3">
        <label for="id" class="form-label">Mã sinh viên</label>
        <input type="text" class="form-control" id="id" name="masv" placeholder="SV001">
        </div>
        <div class="mb-3">
        <label for="fullName" class="form-label">Họ tên</label>
        <input type="text" class="form-control" id="fullName" name="hoten" placeholder="Nguyễn Thị A">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name = "email" placeholder="name@example.com">
        </div>
    <div class="mb-3">
    <label class="form-label">Chọn lớp</label>
        <select class="form-select" aria-label="Default select example" name="malop">
        <?php
        foreach($data2 as $item)
        {
            ?>
            <option value="<?php echo $item->malop ?>"><?php echo $item->tenlop ?></option>
            <?php
        }
    ?>
            </select>

            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" value="Add Student" class="btn btn-danger text-uppercase">
            </div>
    </form>
    
   </div>
    
    
</body>
</html>