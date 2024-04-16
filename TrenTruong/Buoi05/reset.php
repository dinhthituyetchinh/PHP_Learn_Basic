<?php
if(!isset($_SESSION)) session_start();
unset($_SESSION['dem']);
header('location:vd3.php');