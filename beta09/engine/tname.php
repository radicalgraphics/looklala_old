<?php
/*
Plugin Name: Tname

Description: returns the name of a given id Tshirt

Usage: <code>Tname($id)</code>

Returns: returns the name of a given tshirt on live

Version: 1.0

Author: Radical Graphics Studios

*/

function tname($id){

	if ($id!=""){
		$query=("SELECT name FROM lala_camisetas WHERE id = '$id'");
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);
		
	return $row['name'];
	}
}





?>