<?php

class SinhVienController extends DB
{
    function Show()
    {
        return $this->selectQueyry('select * from sinhvien'); 
    }

     function destroy($id)  {
         $sql = "select masv from sinhvien where masv=?";
         $data1 = $this->selectQueyry($sql, [$id]);
         if(Count($data1) > 0)
         return -1;
         $sql = "delete from category where masv=?";
         return $this->updateQueyry($sql, [$id]);
     }

     function store() {
        $id = $_POST['masv']??'';
        $full_name = $_POST['hoten']??'';
        $email = $_POST['email']??'';
        $malop = $_POST['malop']??'';
        $sql = "select masv from sinhvien where masv=?";
        $data = $this->selectQueyry($sql,[$id]);
        if(Count($data) > 0)
        {
            return -1;
        }
        $sql = "insert into sinhvien(masv,hoten, email, malop) values(?,?,?,?)";
        $arr = [$id, $full_name, $email, $malop];
        print_r($arr);
        print_r($_POST);
        return $this->updateQueyry($sql, $arr);
    }
}