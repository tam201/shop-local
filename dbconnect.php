<?php
$ketnoi= mysql_connect("localhost","root","usbw");
if(!$ketnoi)
{
	die('could not connect:'.mysql_error());
}
mysql_select_db("pico",$ketnoi);
@mysql_query("SET NAMES utf8");
?>