<?php
    class HiHi
    {
        public $var3 = 1+2;
        public $var7 = [true, false];

        public $var8 = <<<'EOD'
        hello world
        EOD;

    }
    $dt = new HiHi();
    echo $dt->var3 . "<hr />";
    echo var_dump($dt->var7). "<hr />";
    echo $dt->var8;
?>