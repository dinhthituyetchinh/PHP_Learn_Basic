<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "qlsv";
// try {
//   $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
//   exit();
// }
include "./connect.php";
$ten = $_GET['t']??'';
// $stm = $conn->query("Select * from sinhvien");
$stm = $conn->query("select * from sinhvien where hoten like '%$ten%' ");
$conn->query('set names utf8');
$data = $stm->fetchAll(PDO::FETCH_ASSOC);
// $data = $stm->fetchAll(PDO::FETCH_OBJ);

?>
<h1>Thêm sinh viên</h1>
<form action="themsv.php" method="post" enctype="multipart/form-data">
<table>
  <tr>
    <td>Mã sinh viên</td>
    <td><input type="text" name="masv" id = ""/></td>
  </tr>
  <tr>
    <td>Họ tên</td>
    <td><input type="text" name="hoten" id = ""/></td>
  </tr>
  <tr>
    <td>Ngày sinh</td>
    <td><input type="date" name="ngaysinh" id = ""/></td>
  </tr>
  <tr>
    <td>Lớp</td>
    <td><input type="text" name="lop" id = ""/></td>
  </tr>
  <tr>
    <td>Hình</td>
    <td><input type="file" name="img" id = ""/></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" value="Thêm"/></td>
  </tr>
</table>
</form>



<form action="./sinhvien.php" method="get">
    Ten <input type="text" name="t" id= "" value="<?php echo $ten?>" />
    <input type="submit" value="Tìm kiếm" />

</form>
<table border="1px soid">
    <th>Mã sinh viên</th>
    <th>Họ tên</th>
    <th>Ngày sinh</th>
    <th>Lớp</th>
    <th>Hình</th>
    <?php
    foreach($data as $item)
    {
       ?>
       <tr>
        <td><?php echo $item['masv']?></td>
        <td><?php echo $item['hoten']?></td>
        <td><?php echo $item['ngaysinh']?></td>
        <td><?php echo $item['lop']?></td>
        <td><img src = "./img/<?php echo $item['img']?>" width="100" /></td>
        <td><a href="./chitiet.php?id=<?php echo $item['masv'] ?>">Chi tiết</a></td>
        <td><a href="./xoa.php?id=<?php echo $item['masv'] ?>">Xoá</a></td>

       </tr>
       <?php
    }
    ?>
</table>