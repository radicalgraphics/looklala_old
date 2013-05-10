<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>



<?php

//Pillamos la size de la camiseta de la URL
$size = $_GET['size'];
$gender = $_GET['gender'];

switch ($size) {
							
							case 'S':
								
								if ($gender=='M') {
									$sizeimage = "images/home/Male_BodySizes_Adult_Fitted.jpg";
									}else{
									$sizeimage = "images/home/Female_BodySizes_Adult_Fitted.png";	
									}
								break;
							
							case 'M':
								if ($gender=='M') {
									$sizeimage = "images/home/Male_BodySizes_Adult_Classic_fit.png";
									}else{
									$sizeimage = "images/home/Female_BodySizes_Adult_Classic_fit.png";
									}
								
								break;
							
							case 'L':
								if ($gender=='M') {
									$sizeimage = "images/home/relaxed_large.png";
									}else{
									$sizeimage = "images/home/relaxed_large.png";
									}
																					
								break;
							
							}


?>
<body>
<img src="<?php print $sizeimage; ?>" width="800" height="600" />
</body>
</html>