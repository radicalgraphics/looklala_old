<?php
/*
Plugin Name: RadRandT 

Description: returns a tshirt name, model, color, image(s)for looklala randomly on the homepage (returns a row) IF the parameters are empty,...

Usage: <code>radrandt($tname)

Returns: returns a row with related data

Version: 1.0

Author: Radical Graphics Studios

*/

function radrandt($name){

	
	
	//Si contiene la palabra "rating" ordenamos por rating
	
	if ($name=="rating") {
	
		$query=("SELECT lala_camisetas_id FROM lala_tshirt_rating ORDER BY rating DESC");
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);
		$query=("SELECT * FROM lala_camisetas WHERE id=$row[0]");
		
	
	}
	
	
	
	//vemos si el parametro esta vacio
	//Si no esta vacio mostramos la camiseta indicada
	if ($name!="") {
	
		$query=("SELECT * FROM lala_camisetas WHERE name LIKE '$name'");
		
	}
	
	
	//Mostramos una camiseta aleatoria
	
	if ($name==""){
	
		//contamos el total de camisetas
		$query=("SELECT * FROM lala_camisetas");
		$result=mysql_query($query);
		$num_rows = mysql_num_rows($result);
		$rand = rand(1,$num_rows);
		$query=("SELECT * FROM lala_camisetas WHERE id=$rand");
		
	}
	
	$result=mysql_query($query);
	$row = mysql_fetch_array($result);
	return $row;
	
}



?>