<?php
include './connect.php';
$stm = $conn->query('select * from category');
$data1 = $stm->fetchAll(PDO::FETCH_OBJ);

$stm = $conn->query('select * from publisher');
$data2 = $stm->fetchAll(PDO::FETCH_OBJ);
?>
<form action="book_them.php" method="post" enctype="multipart/form-data">
id <input type="text" name="book_id" > <br/>
name <input type="text" name="book_name"> <br/>
price <input type="text" name="price"><br>
Des<textarea name="description" id = ""  cols="30" rows="10"></textarea><br/>
Hinh <input type="file" name="img" > <br>
Cat_id <select name="cat_id" id= "">
<?php
    foreach($data1 as $item)
    {
        ?>
        <option value="<?php echo $item->cat_id ?>"><?php echo $item->cat_name ?></option>
        <?php
    }
?>
</select> <br />

Pub_id <select name="pub_id" id= "">
<?php
    foreach($data2 as $item)
    {
        ?>
        <option value="<?php echo $item->pub_id ?>"><?php echo $item->pub_name ?></option>
        <?php
    }
?>
</select>
<br/>
<input type="submit" value="Them">
</form>