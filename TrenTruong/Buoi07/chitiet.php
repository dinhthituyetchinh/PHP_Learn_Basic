<?php
include "./connect.php";

$id = $_GET['id']??'';
$sql = "select * from sinhvien where masv='$id' ";
$stm = $conn->query($sql);
// $data = $stm->fetchAll(PDO::FETCH_OBJ);
// print_r($data);
$n = $stm->rowCount();
$data= $stm->fetch(PDO::FETCH_OBJ);
//print_r($data);
if($n > 0)
{
?>
<h1>Thông tin sinh viên</h1>
<h2>
    MSSV: <?php echo $data->masv?>
</h2>
<?php
}
else{
    echo 'Not found';
}
?>