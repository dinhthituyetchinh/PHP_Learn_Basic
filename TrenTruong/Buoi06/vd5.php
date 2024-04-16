<?php
function loadClass($classname){
    include "$classname.php";
  
}
spl_autoload_register('loadClass');
$obj= new DB();

$data = $obj->query('select * from book');

?>
<table>   
<tr>
    <th>Mã sách</th>
    <th>Tên sách</th>
    <th>Giá</th>
    </tr>

<?php
foreach($data as $item)
{
    ?>
  <tr>
  <td>
        <?php
        echo $item['book_id']
        ?>
</td>
<td>
        <?php
        echo $item['book_name']
        ?>
</td>
<td>
        <?php
        echo number_format($item['price'])
        ?>
        VND
</td>
</tr>
    <?php
}
?>
</table>