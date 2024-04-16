<?php
if(!isset($_SESSION)) session_start();
$u = isset($_POST['u'])?$_POST['u']:'';
$p = isset($_POST['p'])?$_POST['p']:'';
if($u == '')
{
    header('location: login.html'); exit;
}