<?php
/*
Plugin Name: Getsizefit

Description: returns array with ['sizeimage'] and ['sizename']

Usage: <code>getsizefit($id)</code>

Returns: returns image path in size fit

Version: 1.0

Author: Radical Graphics Studios

*/

function getsizefit($id){

	$query=("SELECT * FROM lala_camisetas WHERE id = '$id'");
						$result=mysql_query($query);
						$num_rows = mysql_num_rows($result);
						$row = mysql_fetch_array($result);
						switch ($row['size']) {
							
							case 'S':
								$sizeimage = "images/home/fitted_large.png";
								$sizename = "fitted";
								break;
							
							case 'M':
								$sizeimage = "images/home/classic_large.png";
								$sizename = "classic fit";
								break;
							
							case 'L':
								$sizeimage = "images/home/relaxed_large.png";
								$sizename = "relaxed fit";
								break;
							
							}
	
	$ret['sizeimage'] = $sizeimage;
	$ret['sizename'] = $sizename;
	
	
	return $ret;

}





?>