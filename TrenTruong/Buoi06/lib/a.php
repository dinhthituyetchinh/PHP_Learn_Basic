<?php
class A{
    public $a1 = 1;
    protected $a2 = 2;
    private $a3 = 3;
    public function _construct($v1, $v2, $v3) {
       // echo "Hello";
       $this->a1 = $v1;
       $this->a2 = $v2;
       $this->a3 = $v3;

    }
    public function F1() {
        echo "f1";
        $this->F2();
    }
    protected function F2() {
       // echo "f2";
       echo "\nTong = ".($this-> a1 + $this ->a2 + $this->a3);
    }

    public static function f3() {
        echo "\nFunc 3";
    }
}