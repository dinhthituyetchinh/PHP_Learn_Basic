<?php
    $arr = array(1, 2, 3, 4);
    foreach($arr as &$value)
    {
        $value = $value * 2;
    }
    // print_r($arr);
        unset($value);
    // print_r($arr);

    foreach ($arr as $key => $value) {
        // $arr[3] will be updated with each value from $arr...
        echo "<br />";
        echo "{$key} => {$value} ";

        print_r($arr);
    }
?>