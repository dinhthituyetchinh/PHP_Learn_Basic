<?php
class DB
{
    public $conStr;
    function __construct()
    {
        $this->conStr = new PDO('mysql::host=localhost;dbname=banhang','root','');
        //$this->com->query('set names utf8');
    }
    public function query($sql) {
        $stm=$this->conStr->query($sql);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}