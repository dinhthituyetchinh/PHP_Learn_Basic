<?php

use PHPUnit\Framework\Constraint\Count;

class Category extends DB{
    function all()  {
       return $this->selectQueyry('select * from category'); 
    }
    function destroy($id)  {
        $sql = "select book_id from book where cat_id=?";
        $data1 = $this->selectQueyry($sql, [$id]);
        if(Count($data1) > 0)
        return -1;
        $sql = "delete from category where cat_id=?";
        return $this->updateQueyry($sql, [$id]);
    }
    function store() {
        $cat_id = $_POST['cat_id']??'';
        $cat_name = $_POST['cat_name']??'';
        $sql = "select * from category where cat_id=?";
        $data = $this->selectQueyry($sql,[$cat_id]);
        if(Count($data) > 0)
        {
            return -1;
        }
        $sql = "insert into category(cat_id,cat_name) values(?,?)";
        $arr = [$cat_id, $cat_name];
        return $this->updateQueyry($sql, $arr);
    }
}