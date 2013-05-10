<?php
/*
Plugin Name: Tactive

Description: returns if the tshirt is active in live

Usage: <code>tactive($id)</code>

Returns: returns boolean

Version: 1.0

Author: Radical Graphics Studios

*/

function tactive($id){

	if ($id!=""){
		$query=("SELECT * FROM lala_camisetas WHERE id='$id'");
		$result=mysql_query($query);
		if (!$result) {
    	die('Invalid query: ' . mysql_error());
		}
		$row = mysql_fetch_array($result);
		$ret = $row['active'];
		
	}
		
		/*$row=mysql_fetch_array($result);*/
	
	return $ret;
	
}





?>