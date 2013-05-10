<?php
/*
Plugin Name: getdesc

Description: Returns description of tshirt given an id (tshirt id)

Usage: getdesc($tshirtid)

Returns: Text string

Version: 1.0

Author: Radical Graphics Studios

*/

function getdesc($id) {
	
	$query=("SELECT * FROM lala_camisetas WHERE id = '$id'");
	$result=mysql_query($query);
	$num_rows = mysql_num_rows($result);
	$row = mysql_fetch_array($result);
	
	return $row['description'];
	
	
	}