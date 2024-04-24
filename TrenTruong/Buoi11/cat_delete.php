<?php
include './config.php';

function loadClass($c)
{
    include "class/$c.php";
}
spl_autoload_register('loadClass');

$cat = new Category();
$id = $_GET['cat_id']??'';
$n = $cat->destroy($id);

if($n == -1)
{
    ?>
        <script>
            alert('loi rang buoc book');
            window.location='cat_index.php';
            </script>
    <?php
    exit;
}

if($n == 0)
{
    ?>
        <script>
            alert('Khong xoa duoc');
            window.location='cat_index.php';
        </script>
    <?php
    exit;
}

if($n == 1)
{
    ?>
        <script>
            alert('DA XOA');
            window.location='cat_index.php';
            </script>
    <?php
    exit;
}