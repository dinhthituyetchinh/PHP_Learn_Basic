<?php
include './config.php';

function loadClass($c)
{
    include "class/$c.php";
}
spl_autoload_register('loadClass');

$cat = new Category();
$data = $cat->all();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./cat_create.php">Them moi</a>
    <table>
        <?php
        foreach($data as $item)
        {
            ?>
               <tr>
                <td><?php echo $item->cat_id ?></td>
                <td><?php echo $item->cat_name ?></td>
                <td><a href="./cat_delete.php?cat_id=<?php echo $item->cat_id ?>">Xoa</a></td>
                <td></td>
               </tr>

            <?php
        }
        ?>
    </table>
</body>
</html>