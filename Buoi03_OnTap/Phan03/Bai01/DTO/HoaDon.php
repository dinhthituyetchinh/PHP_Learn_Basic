<?php
abstract class HoaDon
{
    protected $maSo, $hoTen, $ngayLap, $tongTT;
    protected MatHang $mh;
    protected $soLuong;

    public function getMaSo() : string {
        return $this->maSo;
        
    }
    public function setMaSo(string $value) : void {
        $this->maSo = $value;
    }

    public function getHoTen() : string {
        return $this->hoTen;
    }

    public function setHoTen(string $value) : void{
        $this->hoTen = $value;
    }

    public function getMatHang() : MatHang {
        return $this->mh;
    }

    public function setMatHang(MatHang $value) : void {
        $this->mh = $value;
    }

    public function getNgayLap() {
        return $this->ngayLap;
    }

    public function setNgayLap($ngayLap) {
        $this->ngayLap = $ngayLap;
    }

    public function getSoLuong() {
        return $this->soLuong;
    }

    public function setSoLuong($soLuong) {
        $this->soLuong = $soLuong;
    }
    public function __construct($maSo, $hoTenKhach, $ngayLap, $mh, $soLuong)
    {
        $this->maSo = $maSo;
        $this->hoTen = $hoTenKhach;
        $this->ngayLap = $ngayLap;
        $this->mh = $mh; // Khởi tạo thuộc tính mh
        $this->soLuong = $soLuong;
    }
   
    
    public function thanhTien() {
        return $this->soLuong * $this->getMatHang()->getDonGia(); // or  $this->mh()->getDonGia();
    }

    abstract public function tienKhuyenMai();
    abstract public function tienGH();
    public function tongThanhTien()
    {
        return $this->thanhTien() - $this->tienKhuyenMai() + $this->tienGH();
    }

    public function xuat() {
        echo "Mã số: " . $this->maSo . "\n";
        echo "Tên kh: " . $this->hoTen . "\n";
        echo "Ngày lập: " . $this->ngayLap . "\n";
        $this->mh->xuatMH();
        echo "Số lượng: " . $this->soLuong . "\n";
        echo "Tiền giao hàng: " . $this->tienGH() . "\n";
    }
}