<?php
include 'AutoloadClass.php';

class HoaDonKhachHangThanThiet extends HoaDon
{
    private $khoangCach;
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
    public function tienGH()
    {
        if($this->khoangCach >= 6 && $this->thanhTien() >= 2000000)
        {
            return 0;
        }else{
            return 5000*($this->khoangCach - 6);
        }
    }
}