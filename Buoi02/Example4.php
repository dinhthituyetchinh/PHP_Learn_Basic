<?php 
    class Employee
    {
        public $var1 = 'hello ' . 'world';
        public $var2 = <<<EOD
         hello world 
         EOD;    

    }

    $emp = new Employee();

    echo $emp->var1 . "<hr />";
    echo $emp->var2;
?>

