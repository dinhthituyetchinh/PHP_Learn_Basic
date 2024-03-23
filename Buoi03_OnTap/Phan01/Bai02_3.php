<?php
$num = 12.34;
// echo (int)$num;
settype($num, "integer");
echo $num;
echo "<hr>";
echo is_numeric("2345");//Kiểm ra dữ liệu có phải là số hoặc chuỗi số không, nếu phải trả về 1
echo "<hr>";
//Khai báo hằng
define("host", "localhost");
echo host;