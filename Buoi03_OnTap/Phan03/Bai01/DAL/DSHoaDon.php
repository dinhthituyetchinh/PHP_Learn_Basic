<?php
class DSHoaDon{
    private $hdList = [];
    private $ds = [];
 
    public function __construct() {}

    public function docFile($fileName) {
        $xml = simplexml_load_file($fileName);

        foreach ($xml->HoaDon as $node) {
            $loai = (int) $node->Loai;
            $ms = (string) $node->MS;
            $ten = (string) $node->Khach;
            $ngay = (string) $node->NgayLap;

            $mhNodeList = $node->Hang;
            $mhArray = [];
            foreach ($mhNodeList as $mhNode) {
                $maHang = (string) $mhNode->MH;
                $tenHang = (string) $mhNode->TenHang;
                $donGia = (double) $mhNode->Gia;
                $hinh = (string) $mhNode->Hinh;
                $mhArray[] = new MatHang($maHang, $tenHang, $donGia, $hinh);
            }

            $sl = (int) $node->SoLuong;

            if ($loai == 1) {
                $hd = new HoaDonKhachHangVIP($ms, $ten, $ngay, $mhArray[0], $sl);
            } elseif ($loai == 2) {
                $hd = new HoaDonKhachHangVangLai($ms, $ten, $ngay, $mhArray[0], $sl);
            } else {
                $hd = new HoaDonKhachHangThanThiet($ms, $ten, $ngay, $mhArray[0], $sl);
            }

            $this->hdList[] = $hd;
            $this->ds[] = $loai;
        }
    }

    public function xuat()
    {
        foreach ($this->hdList as $hd)
        {
            $hd->xuat();
        }
    }

    public function xuatKVLai() 
    {
        foreach ($this->hdList as $hd) 
        {
            if ($hd instanceof HoaDonKhachHangVangLai)
            {
                $hd->xuat();
            }
        }
    }

    public function tongTTDS() 
    {
        return array_reduce($this->hdList, function ($carry, $hd) 
        {
            return $carry + $hd->tongThanhTien();
        }, 0);
    }

    public function xuatHDTongTTMax() 
    {
        $maxTong = max(array_map(function ($hd) 
        {
            return $hd->tongThanhTien();
        }, $this->hdList));

        $this->hdList = array_filter($this->hdList, function ($hd) use ($maxTong) 
        {
            return $hd->tongThanhTien() == $maxTong;
        });
    }

    public function demHD() {
        return count(array_filter($this->ds, function ($loai) 
        {
            return $loai == 1 || $loai == 3;
        }));
    }

    public function sapXep() 
    {
        usort($this->hdList, function ($a, $b) {
            $diff = $a->tongThanhTien() - $b->tongThanhTien();
            if ($diff == 0) {
                return strcmp($b->getMaSo(), $a->getMaSo());
            }
            return $diff;
        });
    }
}