<?php
include './connect.php';

$ten = $_GET['ten']??'';
// $sql = "select * from category where cat_name like :abc";
// $arr=[':abc'=>"%$ten%"];
// $stm = $conn->prepare($sql);
// $tm->execute($arr);

$sql = "select * from category where cat_name like ?";
$arr=["%$ten%"];
$stm = $conn->prepare($sql);
$stm->execute($arr);

$data = $stm->fetchAll(PDO::FETCH_OBJ);

?>


<form method="post" action="./catAdd.php">
    id <input type="text" name="cat_id" > <br />
    Ten <input type="text" name="cat_name"><br />
    <input type="submit" value="Them">
</form>


<form method="get" action="./category.php">
    Ten <input type="text" name="ten" value="<?php echo $ten?>">
    <input type="submit" value="Tim">
</form>

<table>
    <?php
    foreach($data as $item)
    {
        ?>
            <tr>
                <td><?php echo $item->cat_id ?></td>  
                <td><?php echo $item->cat_name ?></td>
                <td></td>
            </tr>
        <?php
    }
    ?>
</table>