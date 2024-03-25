<?php
//require_once 'HoaDon.php';
include 'AutoloadClass.php';

class HoaDonKhachHangVIP extends HoaDon
{
    public function __construct($maSo, $hoTen, $ngayLap, $mh, $soLuong)
    {
        parent::__construct($maSo, $hoTen, $ngayLap, $mh, $soLuong);
    }

    public function tienKhuyenMai()
    {
        if($this->thanhTien() >= 1000000)
        {
            return 0.05 * $this->thanhTien();
        }
        else if($this->thanhTien() < 1000000 && $this->thanhTien() >= 600000)
        {
           return 0.04 * $this->thanhTien();
        }
        else{
            return 0;
        }
    }

    public function tienGH()
    {
        return 0;
    }
}