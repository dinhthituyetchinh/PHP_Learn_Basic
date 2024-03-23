<?php
$user = $_POST["email"];
$passWord = $_POST["pass"];

$result = ($user == "admin" && $passWord == "123456") ? "Đăng nhập thành công" : "Đăng nhập thất bại";
echo $result;