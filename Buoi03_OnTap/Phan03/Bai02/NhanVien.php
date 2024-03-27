<?php

abstract class NhanVien{
    private $id, $fullName, $address, $phone;
    public static $salaryPartTime = 25000;

    public function getID() {
        return $this->id;
    }
    public function setID($value) : void{
        $this->id = $value;
    }

    public function getFullName() {
        return $this->fullName;       
    }
    public function setFullName($value) : void {
        $this->fullName = $value;
    }

    public function getAddress() {
        return $this->address;
    }
    public function setAddress($value) : void {
        $this->address = $value;
    }

    public function getPhone(){
        return $this->phone;       
    }
    public function setPhone($value) : void {
        $this->phone = $value;       
    }

    public function __construct($id, $name, $address, $phone)
    {
        $this->id = $id;
        $this->fullName = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    abstract public function thucLanh();
    
}