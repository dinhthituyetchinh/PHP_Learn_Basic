<?php
    class Employee
    {
        public $id = '10001';
        public $name = 'Đinh Thị Tuyết Chinh';
        public $yearOfBirth = '2003';


        public function displayInfEmployee() 
        {
            echo "MSSV: $this->id <hr />";
            echo "Họ tên: $this->name <hr />";
            echo "Năm sinh: $this->yearOfBirth <hr />";
        }
    }
?>