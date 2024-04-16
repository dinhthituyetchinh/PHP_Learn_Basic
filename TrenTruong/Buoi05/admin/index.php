<?php
if(!isset($_SESSION)) session_start();
if(!isset($_SESSION['admin']))
{
    header('location: login.html'); exit;
}
?>
<h1>Trang chu admin</h1>
<h2>Chao <?php echo $_SESSION['admin']['hoten']?> , <a href ='logout.php'>Thoat</a></h2>
<a href ='./them.php'>Them sp</a>
<a href ='./xoa.php'>Xoa sp</a>