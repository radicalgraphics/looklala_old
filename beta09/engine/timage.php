<?php
/*
Plugin Name: Timage 

Description: returns the images associated to a given tshirt

Usage: <code>Timage($id)

Returns: returns an array with the path to images

Version: 1.0

Author: Radical Graphics Studios

*/

function timage($lala_designs_id){
	
	//chequeamos el parametro si esta vacio
	if ($lala_designs_id!=""){
	
		$query=("SELECT image, zmodelimage, zmodelbackimage FROM lala_designs WHERE id=$lala_designs_id");
		$result=mysql_query($query);
		$row = mysql_fetch_array($result);
		}

return $row;

}



?>