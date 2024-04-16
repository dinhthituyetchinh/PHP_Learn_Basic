<?php
class A{
    public $a1 = 1;
    protected $a2 = 2;
    private $a3 = 3;
    const A1 = 1000;
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
class B
{
    public $b1;
    public function __construct($b1) {
       // echo "Hello";
       $this->b1 = $b1;

    }
    public function F1() {
        return new A($this ->b1);
    }
}
$b1 = new B(5);
$b2 = $b1->F1();
$b2->F1();