<?php
function loadClass($classname){
    include "$classname.php";
  
}
spl_autoload_register('loadClass');

require_once 'DSHoaDon.php';
$ds = new DSHoaDon();
$ds->docFile("DSHD.xml");
echo ' Sắp xếp hóa đơn tăng dần theo tổng thành tiền, nếu thành tiền bằng thì sắp giảm theo mã số hóa đơn';
$ds->sapXep();
$ds->xuat();
?>
