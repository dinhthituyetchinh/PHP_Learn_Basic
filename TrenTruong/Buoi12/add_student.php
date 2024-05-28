<?php
include './config.php';

function loadClass($c)
{
    include "class/$c.php";
}
spl_autoload_register('loadClass');

$model = new SinhVienController();

$n = $model->store();

if($n == -1)
{
    ?>
        <script>
            alert('loi rang buoc: trung khoa chinh');
            window.history.go(-1);
            </script>
    <?php
    exit;
}

if($n == 0)
{
    ?>
        <script>
            alert('Khong them duoc');
            window.history.go(-1);
        </script>
    <?php
    exit;
}

if($n == 1)
{
    ?>
        <script>
            alert('Da them...');
            window.location='index.php';
            </script>
    <?php
    exit;
}