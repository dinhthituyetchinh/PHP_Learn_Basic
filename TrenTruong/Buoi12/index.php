<?php
include './config.php';

function loadClass($c)
{
    include "class/$c.php";
}
spl_autoload_register('loadClass');

$model = new SinhVienController();

$data = $model->Show(); 





?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<form method="get" action="./index.php">
    <h3>Tìm kiếm sinh viên</h3>
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="Lê Thị A" name="ten" value="<?php echo $ten ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<h1 class="text-center">Danh sách sinh viên</h1>

<table class="table table-success table-striped">
    <thead>
        <tr>
            <td>Mã sinh viên</td>
            <td>Họ tên sinh viên</td>
            <td>Email</td>
            <td>Mã lớp</td>
            <td>Action</td>
        </tr>
    </thead>

    <tbody>     
    <?php
    foreach($data as $model)
    {
        ?>
        <tr>
            <td><?php echo $model->masv ?></td>
            <td><?php echo $model->hoten ?></td>
            <td><?php echo $model->email ?></td>
            <td><?php echo $model->malop ?></td>
            
            <td><a href="./deleted_student.php?masv=<?php echo $model->masv ?>" type="button" class="btn btn-danger mb-3 text-uppercase">deleted</a></td>
        </tr>

        <?php
    }
    ?>
    </tbody>
</table>

<div class="d-grid gap-2 col-6 mx-auto">
        <a href="./add_student_frm.php" type="button" class="btn btn-danger text-uppercase"> Add Student</a>
    </div>
