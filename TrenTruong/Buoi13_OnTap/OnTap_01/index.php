<?php
require './config.php';

$itemsPerPage = 3;
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$searchResults = [];
$totalResults = 0;
$totalPages = 0;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $tinh = isset($_GET['tinhthanh05']) ? $_GET['tinhthanh05'] : '';
    $quanhuyen = isset($_GET['quanhuyen05']) ? $_GET['quanhuyen05'] : '';
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

    $searchResults = searchDoanhNghiep($tinh, $quanhuyen, $keyword, $currentPage, $itemsPerPage);
    $totalResults = countTotalDoanhNghiep($tinh, $quanhuyen, $keyword);
    $totalPages = ceil($totalResults / $itemsPerPage);
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
        /* Add any desired styles here */
    </style>
</head>

<body>
    <h1 id="thongtinsinhvien">Ho ten SV: <br>
        - Ma so sinh vien: 200121
    </h1>
    <form action="" method="get">
        <fieldset>
            <legend> Tìm kiếm thông tin </legend>

            Tỉnh thành
            <select name="tinhthanh05" id="tinhthanh">
                <option value="">-----</option>
                <option value="hcm" <?php if(isset($_GET['tinhthanh05']) && $_GET['tinhthanh05'] == 'hcm') echo 'selected' ?>>Thành phố HCM</option>
                <option value="hn" <?php if(isset($_GET['tinhthanh05']) && $_GET['tinhthanh05'] == 'hn') echo 'selected' ?>>Hà Nội</option>
                <option value="bd" <?php if(isset($_GET['tinhthanh05']) && $_GET['tinhthanh05'] == 'bd') echo 'selected' ?>>Bình Dương</option>
            </select>
            Quận Huyện
            <select name="quanhuyen05" id="quanhuyen">
                <?php
                $dsQuanHuyen = fetchQuanHuyen($tinh);
                foreach ($dsQuanHuyen as $quanHuyen) {
                    ?>
                    <option value="<?= $quanHuyen['maquanhuyen'] ?>" <?php if (isset($_GET['quanhuyen05']) && $_GET['quanhuyen05'] == $quanHuyen['maquanhuyen']) echo 'selected'  ?>>
                        <?= $quanHuyen['tenquanhuyen'] ?>
                    </option>
                    <?php
                }
                ?>
            </select>
            Thông tin
            <input type="text" name="keyword" id="" placeholder="Tên DN và người đại diện" value="<?php echo $_GET['keyword']??'' ?>">
            <input type="submit" value="Tìm kiếm">
        </fieldset>
    </form>
    <fieldset>
        <legend> Kết quả tìm kiếm </legend>
        <table border="1">
            <tr>
                <td>Mã DN</td>
                <td>Tên DN</td>
                <td>Người đại diện</td>
                <td>Tên quận huyện</td>
                <td>Xoá</td>
            </tr>
            <?php foreach ($searchResults as $result) : ?>
                <tr>
                    <td><?= $result['madn'] ?></td>
                    <td><?= $result['tendn'] ?></td>
                    <td><?= $result['nguoidaidien'] ?></td>
                    <td><?= $result['tenquanhuyen'] ?></td>
                    <td><a href="#" onclick="confirmDelete('<?= $result['madn'] ?>')">Xoá</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div>
            <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                <a href="?tinhthanh05=<?= $tinh ?>&quanhuyen05=<?= $quanhuyen ?>&keyword=<?= $keyword ?>&page=<?= $i ?>"><?= $i ?></a>
            <?php endfor; ?>
        </div>
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
                    $('#quanhuyen').html(response);
                },
                error: function() {
                    alert('Error loading districts');
                }
            });
        });
    });

    function confirmDelete(madn) {
        if (confirm('Bạn có chắc chắn muốn xóa doanh nghiệp này?')) {
            window.location.href = 'delete.php?id=' + madn;
        }
    }
</script>

</html>
