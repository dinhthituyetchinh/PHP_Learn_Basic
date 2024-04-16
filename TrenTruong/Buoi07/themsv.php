<?php
include "./connect.php";
$m = $_POST['masv']??'';
$t = $_POST['hoten']??'';
$ng = $_POST['ngaysinh']??'';
$lop = $_POST['lop'];
$h = $_POST['img']['name'];
$sql = "insert into sinhvien (masv, hoten, ngaysinh, lop, img)
        values('$m', '$t', '$ng', '$lop', '$h')";
$conn->query($sql);
move_uploaded_file($_FILES['img']['tmp_name'], "img/$h");

header("location: sinhvien.php");