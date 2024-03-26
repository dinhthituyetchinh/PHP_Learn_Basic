<?php
function loadClass($classname){
    include "$classname.php";
  
}
spl_autoload_register('loadClass');

require_once 'DSHoaDon.php';
$ds = new DSHoaDon();
$ds->docFile("DSHD.xml");
echo 'Tổng thành tiền các hóa đơn trong danh sách: '. $ds->tongTTDS();
?>
