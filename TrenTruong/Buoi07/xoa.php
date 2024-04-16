<?php
include "./connect.php";

$id = $_GET['id']??'';
$sql = "delete from sinhvien where masv='$id'";
$stm = $conn->query($sql);
header("location: sinhvien.php");