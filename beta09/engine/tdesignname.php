<?php
/*
Plugin Name: Tdesignname

Description: returns the name of a given id design

Usage: <code>Tdesignname($id)</code>

Returns: returns the name of a given design

Version: 1.0

Author: Radical Graphics Studios

*/

function tdesignname($id){

	if ($id!=""){
		$query=("SELECT name FROM lala_designs WHERE id = '$id'");
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);
		
	return $row['name'];
	}
}





?>