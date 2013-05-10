<?php
/*
Plugin Name: addshirt

Description: Adds a new design and tshirt to looklala.com database

Usage: Interface use through lala backend

Returns: Operation results

Version: 1.0

Author: Radical Graphics Studios

*/


//Recogemos los datos pasados por post

$design_name = $_POST['name'] ;
$design_zmodelimage = $_POST['zmodelimage'];
$shirt_nametshirt = $_POST['nametshirt'];
$shirt_model = $_POST['model'];
$shirt_color = $_POST['color'];
$shirt_sex = $_POST['sex'];
$shirt_size = $_POST['size'];
$shirt_active = $_POST['active'];
$shirt_zazzlecodeurl = $_POST['zazzlecodeurl'];
$shirt_priceeuro = $_POST['priceeuro'];
$shirt_pricedollar = $_POST['pricedollar'];






//Conexion con BD
include('dbcon.php');


//chequeo de seguridad para evitar duplicados
$query = "SELECT * from `lala_designs` WHERE name='$design_name'";
$ret = mysql_query($query);
if (mysql_num_rows($ret)>0) {
		
		
	//echo "repetido"; 
		
	?>
	<span class="dostexto">Data Enter Error :<br />
 	Design: <span class="backmain"><?php echo $name;?></span> exits already !<br />
 	Please use another<br /><a href="javascript:history.back()">&laquo; Back</a>			
	</span>
	<?
	die;
}


//metemos los datos en la BBDD (lala_designs)
$query = "insert into `lala_designs` (name, zmodelimage) values ('$design_name','$design_zmodelimage')";
$ret = mysql_query($query);
		
if (!$ret) {
 		   	$message  = 'Invalid query: ' . mysql_error() . "\n";
		    $message .= 'Whole query: ' . $query;
	   	 	die($message);
}


//chequeamos el id del disenio para incorporarlo a la camiseta 

$query = "SELECT id from `lala_designs` ORDER BY id DESC LIMIT 1;";
$ret= mysql_query($query);
$retar = mysql_fetch_array($ret);
//echo $retar['id'];
$design_id = $retar['id'];


//metemos los datos en la BBDD (lala_camisetas)
$query = "insert into `lala_camisetas` (name,model,lala_designs_id,color,sex,size,active,zazzlecodeURL,priceeuro,pricedollar) values ('$shirt_nametshirt','$shirt_model','$design_id','$shirt_color','$shirt_sex','$shirt_size',TRUE,'$shirt_zazzlecodeurl','$shirt_priceeuro','$shirt_pricedollar')";
$ret = mysql_query($query);
		
if (!$ret) {
 		   	$message  = 'Invalid query: ' . mysql_error() . "\n";
		    $message .= 'Whole query: ' . $query;
	   	 	die($message);
}



//aniadimos el color de la camiseta a los colores disponibles

$query = "insert into `lala_available_colors_per_design` (color,lala_camisetas_id) values ('$shirt_color','$design_id')";
$ret = mysql_query($query);
		
if (!$ret) {
 		   	$message  = 'Invalid query: ' . mysql_error() . "\n";
		    $message .= 'Whole query: ' . $query;
	   	 	die($message);
}


//aniadimos la camiseta al rating

$query = "insert into `lala_tshirt_rating` (love,need,lala_designs_id) values (0,0,'$design_id')";
$ret = mysql_query($query);
		
if (!$ret) {
 		   	$message  = 'Invalid query: ' . mysql_error() . "\n";
		    $message .= 'Whole query: ' . $query;
	   	 	die($message);
}


?>






<!--Imprimimos por pantalla los datos recien metidos si no hay fallo-->
Data sucesfully entered:
<table width="400" border="0" cellpadding="2">
  <tr>
    <td>Name of Design</td>
    <td><?php echo $design_name ?></td>
  </tr>
  <tr>
    <td>Image for Home</td>
    <td><img src="../<?php echo $design_zmodelimage ?>" /></td>
  </tr>
  <tr>
    <td>Tshirt Name</td>
    <td><?php echo $shirt_nametshirt ?></td>
  </tr>
  <tr>
    <td>Tshirt Model</td>
    <td><?php echo $shirt_model ?></td>
  </tr>
  <tr>
    <td>Tshirt color (main on lala_camisetas)</td>
    <td><?php echo $shirt_color ?></td>
  </tr>
  <tr>
    <td>Tshirt gender</td>
    <td><?php echo $shirt_sex ?></td>
  </tr>
  <tr>
    <td>Tshirt fit-loose (size)</td>
    <td><?php echo $shirt_size ?></td>
  </tr>
  <tr>
    <td>Is Tshirt active?</td>
    <td><?php echo $shirt_active ?></td>
  </tr>
  <tr>
    <td>Zazzle direct link to shirt</td>
    <td><a href="<?php echo $shirt_zazzlecodeurl ?>"><?php echo $shirt_zazzlecodeurl ?></a></td>
  </tr>
  <tr>
    <td>Tshirt price in euro</td>
    <td><?php echo $shirt_priceeuro ?></td>
  </tr>
  <tr>
    <td>Tshirt price in dollar</td>
    <td><?php echo $shirt_pricedollar ?></td>
  </tr>
</table>



