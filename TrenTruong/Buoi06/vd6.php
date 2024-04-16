<?php
function loadClass($className){
     include "$className.php";      // class A.php & B.php
}
spl_autoload_register('loadClass');

$obj=new DB();
$id=$_GET['id']??'';
if($id==''){
        header('location:vd4.php');exit;
}

$data=$obj->query("select book.*,category. from book where book_id='$id");
//echo '<pre>';print_r($data);
?>
<table>
    <tr>
        <td>Ma sach</td>
        <td>Ten sach</td>
        <td>Gia</td>
    </tr>
    <?php
    foreach ($data as $item) {
        ?>
        <tr>
            <td><?php echo $item['book_id']?></td>
            <td><?php echo $item['book_name']?></td>
            <td><?php echo number_format($item['price'])?>VND</td>
        </tr>
        <?php
    }
    ?>
</table>