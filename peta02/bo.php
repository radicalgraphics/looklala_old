<?php


// Connects to your Database 
include('engine/dbcon.php');


//Deshabilitamos los warning de error
error_reporting(0);

//Checks if there is a login cookie
if(isset($_COOKIE['ID_my_site']))

	//if there is, it logs you in and directes you to the members page
	{ 
	$username = $_COOKIE['ID_my_site']; 
	$pass = $_COOKIE['Key_my_site'];
	$check = mysql_query("SELECT * FROM lala_admin WHERE login = '$username'")or die(mysql_error());
	while($info = mysql_fetch_array( $check )) {
		if ($pass != $info['pass']) 
		{
		}else{
			header("Location: members.php");

		}
	}
}


//if the login form is submitted
if (isset($_POST['submit'])) { // if form has been submitted



	// makes sure they filled in username and password for username
	$dump = $_POST['username']	;
	

	if(!$_POST['username'] | !$_POST['pass']) {
		die('<link rel="stylesheet" type="text/css" href="style.css" />You did not fill in a required field. <br><a href=bo.php><							< Back</a>');
		}
	// checks it against the database

	//if (!get_magic_quotes_gpc()) {
	//$_POST['email'] = addslashes($_POST['email']);
	//}
	$check = mysql_query("SELECT * FROM lala_admin WHERE login = '".$_POST['username']."'")or die(mysql_error());

	//Gives error if user doesn't exist
	$check2 = mysql_num_rows($check);
	if ($check2 == 0) {
		die ('<link rel="stylesheet" type="text/css" href="style.css" />This user does not exist in our database. <br><a href=bo.php><< Back</a>');
		}
		while($info = mysql_fetch_array( $check )) 
		{
		$_POST['pass'] = stripslashes($_POST['pass']);
		$info['pass'] = stripslashes($info['pass']);
		$_POST['pass'] = md5($_POST['pass']);
		$info['pass'] = md5($info['pass']);
		
	//gives error if the password is wrong
	 
	//echo $info['password'];  
	//echo $_POST['pass'] ; 


	//if remember password has been requested , redirect the user to that page
	//if ($_POST['username1'] != $info[]









		if ($_POST['pass'] != $info['pass']) {
		die('<link rel="stylesheet" type="text/css" href="style.css" />Incorrect password, please try again. <br><a href=bo.php><< Back			</a>');
		}else{ 
			//echo "Login Successful! <br />"; 
			// if login is ok then we add a cookie 
			$_POST['username'] = stripslashes($_POST['username']); 
			$hour = time() + 3600; 
			setcookie(ID_my_site, $_POST['username'], $hour); 
			setcookie(Key_my_site, $_POST['pass'], $hour); 
		
			//then redirect them to the members area 
			header("Location: boadmin.php");
			die('<link rel="stylesheet" type="text/css" href="style.css" />Welcome home, please advance to admin<br><a href=boadmin.php>Enter >></a>');
		}

	 }
	 
	}else { 

// if they are not logged in 
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	<link rel="stylesheet" href="engine/jqtransformplugin/jqtransform.css" type="text/css" media="all" />
	
	
	<script type="text/javascript" src="engine/requiered/jquery.js" ></script>
	<script type="text/javascript" src="engine/jqtransformplugin/jquery.jqtransform.js" ></script>
	<script language="javascript">
		$(function(){
			$('form').jqTransform({imgPath:'engine/jqtransformplugin/img/'});
		});
	</script>





<title>lalabackend</title>
</head>
<style type="text/css">
body {
	font-family: Calibri,"Trebuchet MS", Verdana;
	font-size:16px;
	margin: 0px;
	/*background-image: url('');*/
  background-image:url(images/fondo.png);
	background-repeat: repeat;
	

}

form{clear:both;}



.logo {
	margin-top: 0;
	margin-right: auto;
	margin-bottom: 0;
	margin-left: auto;
	width:1030px;
	/*height:700px;*/
	color: #4898ac;
	background-image:url(images/fondoFOG.png);
	background-repeat: repeat-y;
	
}

.textor {
	padding-top: 50px;
	padding-right: 100px;
	padding-left: 300px;
}

.let {
	text-align: center;

}

.letform {
	margin-top: 0;
	margin-right: auto;
	margin-bottom: 0;
	margin-left: auto;
	text-align: center;
	background-image:url(images/bottomfondo.png);
	background-repeat: no-repeat;
	width:1022px;
	height:272px;
	background-position: center top;
	font-family:Calibri, "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:16px;
	color: #999;
	font-weight: bold;
}


</style>
<body>
<div class="logo">

<div class="textor"><img src="images/lalagirl.png" /></div>
<div class="let"><img src="images/backendletras.png" width="497" height="249" /></div>

<br />
</div>
<div class="letform">
 
<!----Login Form ---->
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<table align="center">
		<tr><td colspan=2></td></tr> 
		<tr><div class="rowElem"><td align="right"><label class="rowElem">I am:</label></td><td> 
		<input type="text" name="username" maxlength="40">
		</td></div></tr> 
		<tr><div class="rowElem"><td><label class="rowElem">I can prove it:</label></td><td> 
		<input type="password" name="pass" maxlength="50"> 
		</td></div>
        <div class="rowElem"> <td colspan="2" align="right">
		<input type="submit" name="submit" value="Login"> 
		</td></div> 
        </tr>
		</table> 
		</form>
  
</div>
</body>
</html>
    <?php 
} 

?> 
