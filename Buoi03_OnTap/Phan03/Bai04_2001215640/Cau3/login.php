<?php
if(isset($_POST["user"]) && isset($_POST["pass"]))
{
    $userName = $_POST["user"];
    $passWord = $_POST["pass"];

    if($userName == "admin" && $passWord == "2001215640")
    {
        $_SESSION["username"] = $user;
        session_start();

        header("Location: ./admin/index.php");
    }
}
?>
<form action="" method="post">
    UserName <input type="text" name = "user" placeholder="Tên Đăng Nhập" /> <br />
    Mật khẩu <input type="password" name = "pass"  placeholder="Mật Khẩu" /> <br />
    <input type="submit" value="Đăng nhập" />
</form>