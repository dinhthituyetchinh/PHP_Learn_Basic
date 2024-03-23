<?php
$var = 12;
$result = (is_string($var) == 1)?"Chuỗi":"Không là chuỗi";
echo $result;
echo "<hr>";
$n = -12;
$result = ($n > 0) ? "Số dương": (($n < 0) ? "Số âm": "Số 0");
echo $result;