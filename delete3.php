


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Delete</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}.button
{
	background-color:#008CBA;
	border:none;
	color:white;
	font-family:Josefin Slab;
	text-align:center;
	text-decoration:none;
	display:inline-block;
	font-size:20px;
	margin:5px;
	cursor:pointer;
	transition: all 0.5s;
	padding:20px;
	width:150px;
	border-radius:8px;
}
.button span
{
	cursor:pointer;
	display:inline-block;
	position:relative;
	transition:0.5s;
}
.button span:after
{
	content: '\00bb';
	position:absolute;
	opacity:0;
	top=0;
	right: -20px;
	transition:0.5s;
}
.button:hover span{
	padding-right:25px;
}
.button:hover span:after
{
	opacity:1;
	right:0;
}
.button1
{
	background-color:#4CAF50;
}
.button2
{
	background-color:orange;
}	
.button3
{
	background-color:red;
}


</style>
<body>

    <div class="brand">Pay It Forward</div>


    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
					<li>
                        <a href="Register.html">Register</a>
                    </li>
                    <li>
                        <a href="login.html">Login</a>
                    </li>
                     <li>
                        <a href="search.html">Search</a>
                    </li>
                    
        <li>
                        <a href="about.html">About</a>
                    </li>
      <li>
                        <a href="contact.html">Contact us</a>
                    </li>
    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
					<center><h2>Delete</h2></center>
<center>
<?php
	$n=$_POST['del'];
	$port=getenv('S2G_MYSQL_PORT');
	$host="localhost:".$port;
	$user='id1114810_payitforward';
	$pass='harimohan';
	$connect=mysql_connect($host,$user,$pass);
	mysql_select_db('id1114810_payitforward2k17');
	$sql="DELETE FROM userdetials WHERE username='".$n."'";
	$a=mysql_query($sql,$connect);
	if(! $a)
	{
		die('could not delete data:'.mysql_error());
	}
	echo "Record is Deleted ";
	mysql_close($connect);
?>

<br>
<form action="delete.php">
	<button class="button button2"style="vertical-align:middle"><span>Delete another member</span></button>
</form>
<form action="admin.html">
	<button class="button button1"style="vertical-align:middle"><span>Admin page</span></button>
</form>

</body>
</div></div></div></div></div>
</html>



