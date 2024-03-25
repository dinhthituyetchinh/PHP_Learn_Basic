<?php
class MatHang
{
    private $maHang, $tenHang, $donGia, $hinhAnh;
    

    public function getMaHang() : string {
        return $this->maHang;
    }

    public function setMaHang(string $value) : void {
        $this->maHang = $value; 
    }

    public function getTenHang() : string {
        return $this->tenHang;
    }

    public function setTenHang(string $value) : void {
        $this->tenHang = $value;
    }

    public function getDonGia() {
        return $this -> donGia;
    }

    public function setDonGia($value) : void {
        $this->donGia = $value;
    }

    public function getImage() :string {
        return $this->hinhAnh;
    }

    public function setImage(string $value) : void {
        $this->hinhAnh = $value;
    }


    public function __construct($ma, $ten, $gia, $hinh)
    {
        $this->maHang = $ma;
        $this->tenHang = $ten;
        $this->donGia = $gia;
        $this->hinhAnh = $hinh;
    }
    
    public function xuatMH() {
        echo "Mã hàng: " . $this->maHang . "\n";
        echo "Tên hàng: " . $this->tenHang . "\n";
        echo "Đơn giá: " . $this->donGia . "\n";
    }
}