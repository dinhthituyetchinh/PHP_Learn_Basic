<?php
if(!isset($_SESSION)) session_start();
$n=isset($_SESSION['dem'])?$_SESSION['dem']:0;
$n++;
$_SESSION['dem']=$n;
?>
<h1>Ban da truy cap web<?php echo $n?>lan </h1>
<a href="./vd4.php">VD4</a>
<a href="./reset.php">Reset</a>;