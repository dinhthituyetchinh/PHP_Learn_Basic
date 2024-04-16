<?php
include './connect.php';
$id = $_POST['cat_id']??'';
$name = $_POST['cat_name']??'';
if($id == '')
{
    header('location:category.php');
    exit;
}
$sql = "insert into category(cat_name, cat_id) values(?, ?)";
$stm = $conn->prepare($sql);
$arrParam= [$name, $id];

$stm->execute($arrParam);
$n = $stm->rowCount();

?>

<script>
    alert('Đã thêm +<?php echo $n ?> dòng mới');
    window.location = 'category.php';
</script>