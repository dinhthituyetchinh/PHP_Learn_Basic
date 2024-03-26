<?php
function loadClass($classname){
    include "$classname.php";
  
}
spl_autoload_register('loadClass');

require_once 'DSHoaDon.php';
$ds = new DSHoaDon();
$ds->docFile("DSHD.xml");
echo 'Có '.$ds->demHD().' hóa đơn của khách VIP và khách thân thiết';

