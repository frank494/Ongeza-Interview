<?php
error_reporting(E_ERROR | E_WARNING);

$connect=mysqli_connect("localhost","root","","ongeza_test") or die(mysqli_connect_error());


$connect_db = mysql_connect('localhost','root','') or die(mysql_error());
$select_db = mysql_select_db('ongeza_test',$connect_db) or die(mysql_error());

?>