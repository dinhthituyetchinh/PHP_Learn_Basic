<?php
class NhanVienChinhThuc extends NhanVien
{
    public static $salaryBasic = 8000000;
    private $doanhSo;

    public function getDoanhSo()  {
        return $this->doanhSo;
    }
    public function setDoanhSo($value) : void {
       $this->doanhSo = $value; 
    }

    public function __construct($id, $name, $address, $phone, $ds)
    {
        parent::__construct($id, $name, $address, $phone);
        $this->doanhSo = $ds;
    }

    public function thucLanh()
    {
        
    }

    
}