<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (strlen(trim($_POST['username'])) < 3) {
        echo "Username phai lon hon 3 ky tu";
    } else if (strlen($_POST['password']) < 6) {
        echo "password phai lon hon 6 ky tu";
    } else {
        if (isset($_FILES['avatar'])) {
            $allowed = array('png', 'jpg');
            $filename = $_FILES['avatar']['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if (!in_array($ext, $allowed)) {
                echo 'Khong phai hinh anh';
            }
        }
        echo $_POST['username'];
        echo '<br />';
        echo $_POST['password'];
    }
}

?>
