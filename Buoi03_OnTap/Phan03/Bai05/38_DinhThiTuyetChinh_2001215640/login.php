<?php
 session_start();
if(isset($_POST["user"]) && isset($_POST["pass"]))
{
    $userName = $_POST["user"];
    $passWord = $_POST["pass"];

    if($userName && $passWord == "2001215640")
    {
       
        $_SESSION["username"] = $userName;
       

        header("Location: ./quanly/index.php");
    }
}
?>
<form action="" method="post">
    UserName <input type="text" name = "user" placeholder="Tên Đăng Nhập" /> <br />
    Mật khẩu <input type="password" name = "pass"  placeholder="Mật Khẩu" /> <br />
    <input type="submit" value="Đăng nhập" />
</form>