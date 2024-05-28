<?php
include './config.php';

function loadClass($c)
{
    include "class/$c.php";
}
spl_autoload_register('loadClass');

$model = new SinhVienController();

$id = $_GET['masv']??'';
$n = $model->destroy($id);

if($n == -1)
{
    ?>
        <script>
            alert('Loi rang buoc ma lop');
            window.location='index.php';
            </script>
    <?php
    exit;
}

if($n == 0)
{
    ?>
        <script>
            alert('Khong xoa duoc');
            window.location='index.php';
        </script>
    <?php
    exit;
}

if($n == 1)
{
    ?>
        <script>
            alert('Da xoa thanh cong');
            window.location='index.php';
            </script>
    <?php
    exit;
}