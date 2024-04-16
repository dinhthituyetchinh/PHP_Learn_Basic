<?php
function loadClass($classname){
    include "lib/$classname.php";
  
}
spl_autoload_register('loadClass');
$c1= new b(5);
$c1->F1()->F1();