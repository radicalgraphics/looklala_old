<?php
/*
Plugin Name: Tcolor

Description: returns the color of a given id Tshirt

Usage: <code>Tcolor($id)</code>

Returns: returns the available colors of a given tshirt on live (array of strings)

Version: 1.0

Author: Radical Graphics Studios

*/

function tcolor($id){

	
	
	if ($id!=""){
		$query=("SELECT * FROM lala_available_colors_per_design WHERE lala_camisetas_id = '$id'");
		$result=mysql_query($query);
		
	$num_rows = mysql_num_rows($result);
	for ($i=0; $i<$num_rows; $i++) {
	
		$row = mysql_fetch_array($result);
		$bunch[$i]=$row['color'];
		
	}
		
		/*$row=mysql_fetch_array($result);*/
	
	return $bunch;
	}
}





?>