<?php

$username = 'ab';
$password = 'cd';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   if ((isset($_POST['uname']) && ($_POST['uname'] == $username)) &&
      (isset($_POST['psw']) && ($_POST['psw'] == $password))) {
         header("Location: admin.html");
         exit();
   }
}

header("Location: loginadmin.html");