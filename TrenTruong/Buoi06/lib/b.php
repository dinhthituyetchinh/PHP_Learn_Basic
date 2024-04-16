<?php
class B
{
    public $b1;
    public function _construct($b1) {
       $this->b1 = $b1;

    }
    public function F1() {
        return new a($this ->b1);
    }
}