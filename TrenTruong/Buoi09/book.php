<?php
include './connect.php';

$ten = $_GET['ten']??'';

$sql = "select * from book where book_name like ?";
$arr=["%$ten%"];
$stm = $conn->prepare($sql);
$stm->execute($arr);

$data = $stm->fetchAll(PDO::FETCH_OBJ);

?>

<style>
#book img{width: 50px;}

</style>
<a href="book_frm.php">Them moi</a>

<form method="get" action="./book.php">
    Ten <input type="text" name="ten" value="<?php echo $ten?>">
    <input type="submit" value="Tim">
</form>

<table id="book">
    <?php
    foreach($data as $item)
    {
        ?>
            <tr>
                <td><?php echo $item->book_id ?></td>  
                <td><?php echo $item->book_name ?></td>
                <td><?php echo $item->price ?></td>
                <td><img src="./img/<?php echo $item->img ?>"/></td>
            </tr>
        <?php
    }
    ?>
</table>