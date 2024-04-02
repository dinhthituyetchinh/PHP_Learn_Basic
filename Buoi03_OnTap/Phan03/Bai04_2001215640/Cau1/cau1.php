<?php
// $name = "Đinh Thị Tuyết Chinh";
// echo "Họ tên: ". $name;
// echo "<br />";
// $name1 = "đinh thị tuyết chinh";
// echo "Họ tên 1: ". $name1;
// echo "1: ".ucfirst($name1);
// echo "<br />";
// $name2 = "đinh Thị tuyết chinh";
// echo $name2;
// echo "2(Viết hoa chữ cái đầu mỗi từ):". ucwords($name2); //Viết hoa chữ cái đầu mỗi từ
// echo "<br />";

// echo "3:".strtoupper($name);
// echo "<br />";

// echo "4:".strtolower($name);
if(isset($_POST["masv40"]) && isset($_POST["hoTen40"]))
{
    $maSV = $_POST["masv40"];
    $hoTen = $_POST["hoTen40"];
    $gioiTinh = $_POST["gioiTinh40"];
    $soThich = $_POST["soThich40"];
    $image = $_POST["hinh40"];
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data" >
    Mã sinh viên<input type="text" name = "masv40" /> <br />
    Họ tên <input type="text" name = "hoten40" /> <br />
    Giới tính<input type="radio" name="gioiTinh40" value="" checked/> Nam
    <input type="radio" name="gioiTinh40" value="" /> Nữ<br />
    Sở thích(nếu có) <input type="text" name="soThich40" /> <br />
    Hình <input type="file" name = "hinh40" /> <br /> <br />
    <input type="submit" value="Gửi" /> 
    </form>

    <?php
    if(isset($_POST["masv40"]) && isset($_POST["hoTen40"]))
    {
    ?>
        <h1>Hiển thị thông tin</h1>
        <table>
            <tr>
                <th>Mã sinh viên</th>
                <th>Họ tên </th>
                <th>Giới tính</th>
                <th>Sở thích</th>
                <th>Hình</th>
            </tr>
            <tr>
                <td><?php echo $maSV?></td>
                <td> <?php echo strtolower($hoTen) ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    <?php 
    }
    ?>
</body>
</html>