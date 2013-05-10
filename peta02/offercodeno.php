<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>looklala is coming!!!!</title>
<link href="offerstyleno.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico">
<script language="JavaScript" src="lalaengine.js"></script>


</head>
<body>


<div class="backmain"><div class="moongirl"></div><div class="looklalaletters"></div>
<?php 
///Decision para ver que paso es en el que estamos


if (isset($_POST['prevstep'])) {//Si existe prevstep es que NO estamos en el paso 1

	////////////// paso 2 //////////////////////////////
	/////////////////////////////////////////////////////
	if ($_POST['prevstep']=='1'){//Estamos en el PASO 2
		
		
		
		
		
		
	
		//Metemos los datos en la BBDD una vez validados...
		$name = $_POST['field_1'];
		$surname = $_POST['field_2'];
		$mail = $_POST['field_3'];
		
		include('dbcon.php');
		
		//chequeo de seguridad para evitar duplicados
		$query = "SELECT * from `lala_users` WHERE email='$mail'";
		$ret = mysql_query($query);
		if (mysql_num_rows($ret)>0) {
		
		
			//echo "repetido"; 
		
			?>
			<span class="dostexto">Data Enter Error :<br />
 			User mail: <span class="backmain"><?php echo $mail;?></span> its already taken!<br />
 			Please use another<br /><a href="javascript:history.back()">&laquo; Back</a>			
			</span>
			<?
			die;
			
			}
		
		//echo $name . " :: ". $surname . "  ::  ". $country . "<BR>"; 
		
		
		
		
		
		$query = "insert into `lala_users` (name, surname, email) values ('$name','$surname','$mail')";
		$ret = mysql_query($query);
		
			if (!$ret) {
 		   	$message  = 'Invalid query: ' . mysql_error() . "\n";
		    $message .= 'Whole query: ' . $query;
	   	 	die($message);
			}
		
		//$lastrow = mysql_insert_id($ret);
		
		
		
		?> <div class="stepper"><div class="st1off">1</div>
			  <span class="st2on">2</span><span class="st3off">3</span><span class="st4off">gift</span></div>
		<?
		
		//Pintamos paso 2
		include('step2.htm');
		
		
		
	////////////// paso 3 //////////////////////////////
	/////////////////////////////////////////////////////
	}elseif ($_POST['prevstep']=='2'){//Estamos en el PASO 3
		
		//Metemos los datos en la BBDD una vez validados...
		$login = $_POST['field_1'];
		$password = $_POST['field_2'];
		$password2= $_POST['field_3'];
		
		//echo $name . " :: ". $surname . "  ::  ". $country . "<BR>"; 
		
		
		include('dbcon.php');
		
		//pillo el ultimo row insertado y meto los datos alli...
		//$lastrow es el ultimo
		
		$query = "SELECT id from `lala_users` ORDER BY id DESC LIMIT 1;";
		$ret= mysql_query($query);
		$retar = mysql_fetch_array($ret);
		//echo $retar['id'];
		$lastrowid = $retar['id'];
		// die;
		
		$query = "update `lala_users` set login='$login', pass='$password' WHERE id='$lastrowid'";
		$ret = mysql_query($query);
		
			if (!$ret) {
 		   	$message  = 'Invalid query: ' . mysql_error() . "\n";
		    $message .= 'Whole query: ' . $query;
	   	 	die($message);
			}
		
		
		?> <div class="stepper"><div class="st1off">1</div>
			  <span class="st2off">2</span><span class="st3on">3</span><span class="st4off">gift</span></div>
		<?
		
		
		//Pintamos paso 3
		include('step3.htm');
	
	}else{//Si es cualquier otra cosa entonces estamos en el PASO 4
	
		//Metemos los datos en la BBDD una vez validados...
		$gender = $_POST['field_4'];
		$birthdayseason = $_POST['field_5'];
		$birthyear = $_POST['field_6'];
		$country = $_POST['field_3'];
		//echo $name . " :: ". $surname . "  ::  ". $country . "<BR>"; 
		
		
		include('dbcon.php');
		
		//pillo el ultimo row insertado y meto los datos alli...
		//$lastrow es el ultimo
		
		$query = "SELECT id from `lala_users` ORDER BY id DESC LIMIT 1;";
		$ret= mysql_query($query);
		$retar = mysql_fetch_array($ret);
		//echo $retar['id'];
		$lastrowid = $retar['id'];
		// die;
		
		$query = "update `lala_users` set gender='$gender', birthdayseason='$birthdayseason', birthyear='$birthyear', country='$country' WHERE id='$lastrowid'";
		$ret = mysql_query($query);
		
			if (!$ret) {
 		   	$message  = 'Invalid query: ' . mysql_error() . "\n";
		    $message .= 'Whole query: ' . $query;
	   	 	die($message);
			}
	
		?> <div class="stepper"><div class="st1off">1</div>
			  <span class="st2off">2</span><span class="st3off">3</span><span class="st4on">gift</span></div>
		<?
	
	
		//Pintamos paso 4	
		include('step4no.htm');
	}

}else{//Si no hay step es que estamos en el PASO1
	
	if (isset($_GET['user'])) {
		 	
			$user = $_GET['user'];
		 
		 }else{ 
		 	
			$user='visitor';
		 
		 }
	
	?>
	
	<div class="texto">Welcome <?php echo $user;?> to the new coming looklala.com. While we prepare everything for the grand opening, give us your details to receive a special gift from us to you:</div>
	
	<?
	
	include('step1.htm');
	
	
	
	
	
	
}



?>


	<?php
			/*
			if(isset($_POST['field_1'])) { //Vemos si se ha pasado algo por parametros
  				echo "<span class=debug>You entered field1:: ".$_POST['field_1']."</span>";
				echo "<span class=debug>You entered field2:: ".$_POST['field_2']."</span>";
				echo "<span class=debug>You entered field3:: ".$_POST['field_3']."</span>";
				if (isset ($_POST['field_5'])) {// Vemos si recogemos algo de edad o sexo
					echo "<span class=debug>You entered field4:: ".$_POST['field_4']."</span>";
					echo "<span class=debug>You entered field5:: ".$_POST['field_5']."</span>";
					echo "<span class=debug>You entered field6:: ".$_POST['field_6']."</span>";
				}
			}*/
		?>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-5601542-2");
pageTracker._trackPageview();
} catch(err) {}</script>
		
		</body>
</html>