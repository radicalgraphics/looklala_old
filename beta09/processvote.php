<?php
/*
Processvote

Description: process a vote for looklala.com (love or need), counts that on the database and redirects to tshirtpage

Version: 1.0

Author: Radical Graphics Studios

*/
require_once("engine/dbcon.php");

$idshirt = $_GET["id"];
$votevar = $_GET["var"];


//get the id design
$query=("SELECT * FROM lala_camisetas WHERE id='$idshirt'");
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$iddesign = $row['lala_designs_id'];

//die('IDDESIGN: '.$iddesign);
/// Update the DB

if ($idshirt!=""){
		$query=("SELECT * FROM lala_tshirt_rating WHERE lala_designs_id = '$iddesign'");
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);
		
		if ($votevar == "l") {
			
			$love = $row["love"] + 1;
			
			$query = "update `lala_tshirt_rating` set love='$love' WHERE lala_designs_id='$iddesign'";
			$ret = mysql_query($query);
			
			if (!$ret) {
 		   	$message  = 'Invalid query: ' . mysql_error() . "\n";
		    $message .= 'Whole query: ' . $query;
	   	 	die($message);
			}
			
		}else{

			$need = $row["need"] + 1;
			
			$query = "update `lala_tshirt_rating` set need='$need' WHERE lala_designs_id='$iddesign'";
			$ret = mysql_query($query);
			
			if (!$ret) {
 		   	$message  = 'Invalid query: ' . mysql_error() . "\n";
		    $message .= 'Whole query: ' . $query;
	   	 	die($message);
			}
		
		
		
		}
		
		
	
	}

header("Location: shirt.php?id=" . $idshirt);



?>

