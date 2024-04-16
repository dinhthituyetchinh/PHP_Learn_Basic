<?php
function loadClass($classname){
    include "$classname.php";
  
}
spl_autoload_register('loadClass');
$obj= new DB();

$data = $obj->query('select * from book');
echo '<pre>';
print_r($data);

