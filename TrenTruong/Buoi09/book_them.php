<?php
include './connect.php';
$book_id = $_POST['book_id']??'';
$book_name = $_POST['book_name']??'';
if($book_id == '')
{
    header('location:book.php');
    exit;
}
$price = $_POST['price']??0;
$description = $_POST['description']??'';
$img = $_FILES['img']['name'];

$cat_id = $_POST['cat_id'];
$pub_id = $_POST['pub_id'];

$sql = "insert into book(book_id, book_name, price, description, img, cat_id, pub_id) 
values(?, ?, ?, ?, ?, ?, ?)";
$stm = $conn->prepare($sql);
$arrParam= [$book_id, $book_name, $price, $description, $img, $cat_id, $pub_id ];

$stm->execute($arrParam);
$n = $stm->rowCount();
if($n > 0)
{
    move_uploaded_file($_FILES['img']['tmp_name'], "img/$img");
}
?>

<script>
    alert('Đã thêm +<?php echo $n ?> dòng mới');
    window.location = 'book.php';
</script>