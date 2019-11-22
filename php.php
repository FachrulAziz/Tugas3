<?php
$user="root";
$server="localhost";
$password="";
$database="semester3";

$rumah=mysql_connect($server,$user,$password);
if($rumah){
	echo 'Rumah Berhasil Terhubung';
}else{
	echo 'Cek Lagi';
}
$db=mysql_select_db($database);
if(db){
	echo 'Rumah Berhasil Terhubung';
}else{
	echo 'Cek Lagi';
}
?>