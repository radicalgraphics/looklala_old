<?php
/*
Plugin Name: queryswitch

Description: Changes the query order (10 first tshirts shown on home) based on several filters (alphabetical, by color, by rating, random, etc... 

Usage: queryswitch($string)   //When $string could be: 'love' , 'need' , 'color' , 'name', etc...

Returns: returns a query ordered by parameter of tshirts on live

Version: 1.0

Author: Radical Graphics Studios

*/

function queryswitch($string,$positioncounter){
	
	$query="SELECT * FROM lala_camisetas WHERE active = 1 ORDER BY color LIMIT 1,10";//default query
	//vemos si el parametro esta vacio
	if ($string!="") {
		
		
		switch($string) {
			
			case "love":
				$query="SELECT lala_camisetas.* FROM lala_camisetas INNER JOIN lala_tshirt_rating ON lala_camisetas.lala_designs_id = lala_tshirt_rating.lala_designs_id WHERE lala_camisetas.active=1 ORDER BY lala_tshirt_rating.love DESC LIMIT $positioncounter,10";
				break;
			
			case "need":
				$query="SELECT lala_camisetas.* FROM lala_camisetas INNER JOIN lala_tshirt_rating ON lala_camisetas.lala_designs_id = lala_tshirt_rating.lala_designs_id WHERE lala_camisetas.active=1 ORDER BY lala_tshirt_rating.need DESC LIMIT $positioncounter,10";
				break;
			
			case "color":
				$query="SELECT * FROM lala_camisetas WHERE active=1 ORDER BY color LIMIT $positioncounter,10";
				break;
			
			
			case "name":
				$query="SELECT * FROM lala_camisetas WHERE active=1 ORDER BY name LIMIT $positioncounter,10";
				break;


			case "size":
				$query="SELECT * FROM lala_camisetas WHERE active=1 ORDER BY size LIMIT $positioncounter,10";
				break;
			
			case "gender":
				$query="SELECT * FROM lala_camisetas WHERE active=1 ORDER BY sex LIMIT $positioncounter,10";
				break;
			
			case "featured":
				$query="SELECT * FROM lala_camisetas WHERE active=1 ORDER BY featured DESC,id ASC LIMIT $positioncounter,10";
				break;
			
			case "random":
			
				$query=("SELECT * FROM lala_camisetas WHERE active = 1 ORDER BY RAND() LIMIT $positioncounter,10");
				
			}
		
		
		
		
		
	} else {
		
		die('Error en queryswitch: $string empty');
		
		
		}
	
	
	return $query;
	





}





?>