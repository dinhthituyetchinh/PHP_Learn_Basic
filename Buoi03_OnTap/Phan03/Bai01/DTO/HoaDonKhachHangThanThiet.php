<?php
include 'AutoloadClass.php';

class HoaDonKhachHangThanThiet extends HoaDon
{
    public function __construct($maSo, $hoTen, $ngayLap, $mh, $soLuong)
    {
        parent::__construct($maSo, $hoTen, $ngayLap, $mh, $soLuong);
    }

    
    public function tienKhuyenMai()
    {
        if($this->thanhTien() >= 1000000)
        {
            return 0.04 * $this->thanhTien();
        }
        else if($this->thanhTien() < 1000000 && $this->thanhTien() >= 600000)
        {
           return 0.03 * $this->thanhTien();
        }
        else{
            return 0;
        }
    }
}