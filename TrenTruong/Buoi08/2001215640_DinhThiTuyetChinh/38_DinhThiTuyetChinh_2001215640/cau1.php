
<form action="cau1.php" method='post' enctype="multipart/form-data">
    Tên đăng nhập: <input type="text" name="userName40"> <br>
    Ho ten <input type="text" name="fullName40"> <br>
    Mật khẩu <input type="password" name="passWord40" > <br>
    So thich <input type="checkbox" name="robby40[]" value='1'>The thao 
    <input type="checkbox" name="robby40[]" value='2'>Du Lich <br>
    Hinh dai dien <input type="file" name="img" id=""> <br>
    <input type="submit" value="Gui">
</form>

<?php
function chuanHoaTen($name) {
    return ucwords(strtolower(trim($name)));
}

$errors = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = isset($_POST['userName40']) ? trim($_POST['userName40']) : '';
    $fullName = isset($_POST['fullName40']) ? trim($_POST['fullName40']) : '';
    if (empty($userName) || empty($fullName)) {
        $errors[] = "Tên đăng nhập và họ tên không được để trống.";
    } else {
        $fullName =  chuanHoaTen($fullName);
    }

    $password = isset($_POST['passWord40']) ? $_POST['passWord40'] : '';
    if (strlen($password) < 8 || !preg_match("#[0-9]+#", $password) || !preg_match("#[A-Z]+#", $password) || !preg_match("#[a-z]+#", $password)) {
        $errors[] = "Mật khẩu phải có ít nhất 8 ký tự, bao gồm ít nhất 1 số, 1 ký tự hoa và 1 ký tự thường.";
    }

    $hobbies = isset($_POST['robby40']) ? $_POST['robby40'] : array();
    if (empty($hobbies)) {
        $errors[] = "Bạn phải chọn ít nhất một sở thích.";
    }

    if (empty($errors)) {
        echo "Tên đăng nhập: $userName <br />";
        echo "Họ tên: $fullName <br />";
        echo "Mật khẩu: $password <br />";
        echo "Sở thích: ";
        foreach ($hobbies as $hobby) {
            if ($hobby == '1') {
                echo "Thể thao, ";
            } elseif ($hobby == '2') {
                echo "Du lịch, ";
            }
        }
        echo "<br />";
        
        if(isset($_FILES['img']['name'])) {
            $fileName = $_FILES['img']['name'];
            $fileTmpName = $_FILES['img']['tmp_name'];
            $fileSize = $_FILES['img']['size'];
            $fileError = $_FILES['img']['error'];
            if($fileError === 0) {
                $fileDestination = 'hinh/' . $fileName;
                move_uploaded_file($fileTmpName, $fileDestination);
                echo "Hình vừa chọn: <br>";
                echo "<img src='$fileDestination' alt=''>";
            } else {
                echo "Đã xảy ra lỗi khi upload hình.";
            }
        }
    } else {
        foreach ($errors as $error) {
            echo "$error <br>";
        }
    }
}
?>

