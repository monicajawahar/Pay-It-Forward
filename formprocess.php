 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pay it Forward</title>

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
	<script type="text/javascript">
         <!--
            function Redirect() {
               window.location="login.html";
            }
            
            document.write("You will be redirected to main page in 10 sec.");
            setTimeout('Redirect()', 10000);
         //-->
      </script>

</head>

<body>

    <div class="brand">Pay it Forward</div>
    

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
                <a class="navbar-brand" href="index.html">Pay it Forward</a>
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
          <div class="nav navbar-nav">
<body>

<?php
	$name=$_POST['Full_Name'];
	$email=$_POST['Email_Address'];
	$comment=$_POST['Your_Message'];



	$port=getenv('S2G_MYSQL_PORT');
	$host="localhost:".$port;
	$user='id1114810_payitforward';
	$pass='harimohan';
	$connect=mysql_connect($host,$user,$pass);
	mysql_select_db('id1114810_payitforward2k17');
	$insert="insert into comments(name,email,comment) values('$name','$email','$comment')";
	if(mysql_query($insert,$connect))
	{
		echo ("Comment Inserted successfully !!");
	}
	else
	{
		echo ("Insertion failed");
	}
	mysql_close($connect);
?>
<br>
<form action="login.html" method="POST">
<input type="submit" value="Login Page"  >
</form>
</body>
</html>