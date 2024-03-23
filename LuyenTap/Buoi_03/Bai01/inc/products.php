<?php
    function getAllProduct($filename)
    {
        $row = 1;
        $productList = [];
    if (($handle = fopen($filename, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            $productList[] = $data;
           // echo "<p> $num fields in line $row: <br /></p>\n";
            $row++;
            // for ($c=0; $c < $num; $c++) {
            //     echo $data[$c] . "<br />\n";
            // }
        }
        fclose($handle);
    }
    return $productList;
    }

    
function getAllProd($filename)
{
    $row = 1;
    $productList = [];
if (($handle = fopen($filename, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $productList[$row] = $data;
        $row++;
    }
    fclose($handle);
}
return $productList;
}
