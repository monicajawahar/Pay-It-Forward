<?php
	$port=getenv('S2G_MYSQL_PORT');
	$host="localhost:".$port;
	$user='id1114810_payitforward';
	$pass='harimohan';
	$connect=mysql_connect($host,$user,$pass);
	mysql_select_db('id1114810_payitforward2k17');
?>