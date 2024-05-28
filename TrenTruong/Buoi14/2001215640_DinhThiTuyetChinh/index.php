<?php
require './config.php';

$searchResults = [];
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $tinh = isset($_GET['tinhthanh640']) ? $_GET['tinhthanh640'] : '';
    $quanhuyen = isset($_GET['quanhuyen640']) ? $_GET['quanhuyen640'] : '';
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
    $sortby = isset($_GET['sortby']) ? $_GET['sortby'] : '';

    $searchResults = searchDoanhNghiep($tinh, $quanhuyen, $keyword, $sortby);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai kiem tra 2</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>

    </style>
</head>

<body>
    <h1 id="thongtinsinhvien">Ho ten SV: Đinh Thị Tuyết Chinh<br>
        - Ma so sinh vien: 2001215640
    </h1>
    <form action="" method="get">
        <fieldset>
            <legend> Tìm kiếm thông tin </legend>

            Tỉnh thành <select name="tinhthanh640" id="tinhthanh">
                <option value="">-----</option>
                <?php

                $dsTinh = tinhthanh();
                foreach ($dsTinh as $tinhThanh)
                {
                    ?>
                        <option value="<?= $tinhThanh['matinh'] ?>" <?php if (isset($_GET['tinhthanh640']) && $_GET['tinhthanh640'] == $tinhThanh['matinh']) echo 'selected'  ?>><?= $tinhThanh['tentinh'] ?></option>
                    <?php
                }

            ?>
            </select>
            Quận Huyện
            <select name="quanhuyen640" id="quanhuyen">
            <option value="">-----</option>

            <?php
            
                $dsQuanHuyen = fetchQuanHuyen($tinh);
                foreach ($dsQuanHuyen as $quanHuyen)
                {
                    ?>
                        <option value="<?= $quanHuyen['maquanhuyen'] ?>" <?php if (isset($_GET['quanhuyen640']) && $_GET['quanhuyen640'] == $quanHuyen['maquanhuyen']) echo 'selected'  ?>><?= $quanHuyen['tenquanhuyen'] ?></option>
                    <?php
                }

            ?>
            </select>
            Thông tin <input type="text" name="keyword" id="" placeholder="Tên DN và người đại diện" value="<?php echo $_GET['keyword']??'' ?>">
            <input type="submit" value="Tìm kiếm">

        </fieldset>
    </form>
    <fieldset>
        <legend> Kết quả tìm kiếm </legend>


        <table border="1">
            <tr>
                <td><a href="?tinhthanh640=<?php echo $tinh?>&quanhuyen640=<?php echo $quanhuyen?>&keyword=<?php echo $keyword ?>&sortby=madn">Mã DN</a></td>
                <td><a href="?tinhthanh640=<?php echo $tinh?>&quanhuyen640=<?php echo $quanhuyen?>&keyword=<?php echo $keyword ?>&sortby=tendn">Tên DN</a></td>
                <td>Người đại diện</td>
                <td>Tên quận huyện</td>
                <td>Sửa</td>
            </tr>
            <?php foreach ($searchResults as $result) : ?>
                <tr>
                    <td><?= $result['madn'] ?></td>
                    <td><?= $result['tendn'] ?></td>
                    <td><?= $result['nguoidaidien'] ?></td>
                    <td><?= $result['tenquanhuyen'] ?></td>
                    <td><a href="./update.php?id=<?= $result['madn'] ?>">Sửa</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </fieldset>
</body>

<script>
    $(document).ready(function() {
        $('#tinhthanh').change(function(e) {
            const value = e.target.value;
            $.ajax({
                method: 'GET',
                url: `./get-quanhuyen.php?t=${value}`,
                success: function(response) {
                    console.log(response)
                    $('#quanhuyen').html(response);
                }
            })
        })
    })
</script>

</html>

