<?php
$num = - 11;
if($num >= 0 && $num % 2 == 0)
{
    $result = "Nguyên dương chẵn";
}
else if($num >= 0 && $num % 2 == 1)
{
    $result = "Nguyên dương lẻ";
}else if($num < 0 && $num % 2 == 0)
{
    $result = "Nguyên âm chẵn";
}
else{
    $result = "Nguyên âm lẻ";
}
echo $result;

