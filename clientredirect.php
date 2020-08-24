

<?php
	$username=$_POST['uname'];
	$password=$_POST['psw'];
	$port=getenv('S2G_MYSQL_PORT');
	$host="localhost:".$port;
	$user='id1114810_payitforward';
	$pass='harimohan';
	$connect=mysql_connect($host,$user,$pass);
	mysql_select_db('id1114810_payitforward2k17');
	$sql="select * from userdetials where username='".$username."'";
	$result=mysql_query($sql,$connect);
	$row=mysql_fetch_array($result,MYSQL_ASSOC);
	
	if ((isset($usernmae) && ($username == $row['username'])) &&
      (isset($password) && ($password == $row['password']))) {
         header("Location: confirm.html");
         exit();
	   }
	
header("Location: loginclient.html");?>