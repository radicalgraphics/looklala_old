<link rel="stylesheet" href="engine/jqtransformplugin/jqtransform.css" type="text/css" media="all" />
	
	
	<script type="text/javascript" src="engine/requiered/jquery.js" ></script>
	<script type="text/javascript" src="engine/jqtransformplugin/jquery.jqtransform.js" ></script>
	<script language="javascript">
		$(function(){
			$('form').jqTransform({imgPath:'engine/jqtransformplugin/img/'});
		});
	</script>



<?php 
echo '<font face="Trebuchet MS, Verdana, Arial" size="2" color="#ADC4FF">//////////////////////////////////////////////////<br>
// lala_tshirt admin<br>
// (c)2010 Radical Graphics Studios<br>
//////////////////////////////////////////////////</font><br><br>';


//Llamada a la conexión de BD de Brinkster hosting
include('engine/dbcon.php');
include('engine/radrandt.php');
include('engine/timage.php');

//Deshabilita el error reporting
//Da porculo con los warnings el 
//error_reporting(0);

if ($_GET['listok']!=""){
$listok = $_GET['listok'];
}

if ($_GET['addok']!="") {
$addok = $_GET['addok']	;
}


//Si se pulsa el boton de lista todas las camisetas se muestran:
if ($listok==1) {

	$query=("SELECT * FROM lala_camisetas");
	$result=mysql_query($query);
	
	echo ('<font face="Trebuchet MS, Verdana, Arial" size="2" color="#9e948d">');
	
	while ($row = mysql_fetch_array($result)) {
	
		printf('id: %s - name: %s - model: %s - color: %s - sex: %s - size: %s',$row[0],$row['name'], $row['model'],$row['color'],$row['sex'],$row['size']);
		echo ('<br>');
		//Buscamos las imagenes disponibles para la camiseta en cuestión
		$design_current = $row['lala_designs_id'];

		$query2=("SELECT * FROM lala_designs WHERE id=$design_current");
		$result2=mysql_query($query2);
		$row2=mysql_fetch_array($result2);
		printf('<img src="%s"/>',$row2['zmodelimage']);
		echo'<br/>';
	}
	echo '</font>';

	echo '<br/> Prueba de rand- sin parametros<br/>';
	$ret = radrandt("");
	print_r ($ret);
	
	
	print "Nombre de la camiseta: {$ret['name']} <br>";
	
	
	$ret = timage($ret['lala_designs_id']);
	print "Imagen de la camiseta: <img src='{$ret['zmodelimage']}'> <br>";
	
	echo '<br/> Prueba de rand- con rating<br/>';
	$ret = radrandt("rating");
	print_r ($ret);

	echo '<br/> Prueba de rand- con nombre<br/>';
	$ret = radrandt("Time Changes");
	print_r ($ret);
}

?>
<?
//Si se pulsa el boton de add tshirt, se presenta formulario para crear la camiseta ( con llamada externa a addshirt.php)
if ($addok==1) {



	?>

	<font face="Trebuchet MS, Verdana, Arial" size="2" color="#9e948d">
	Design<br>
	<form name="formadd" method="post" action="engine/addshirt.php">
    
	<br>
	<br>
	Add a new Tshirt (Please remember to double check the data you enter)<br>
	 <br>
	 

<table width="400" border="0" cellpadding="2" style=" font-size:10pt; color:#666">
  <tr>
    <td>name: </td>
    <td><input type="text" name="name" /></td>
    <td>Name (title) of tshirt (also for design) (data shared on 2 tables)</td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td>zmodelimage:</td>
    <td><input type="text" name="zmodelimage" /></td>
    <td>path to image (zmodel, .jpg, example path: images/home/name.jpg)(on home screen) of tshirt (data only on lala_designs)</td>
  </tr>
  <tr>
    <td>nametshirt:</td>
    <td><input type="text" name="nametshirt" /></td>
    <td>Name of tshirt (not for design, it may contain info about colors) (only on lala_camisetas)</td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td >model:</td>
    <td><input type="text" name="model" /></td>
    <td>tshirt model (supplied by engine ie. American Apparel)</td>
  </tr>
  <tr>
    <td>sex:</td>
    <td><select name="sex">
  		  <option value="M">Male</option>
  			<option value="F">Female</option>
			</select></td>
    <td>Gender for tshirt</td>        
  </tr>
  <tr  bgcolor="#CCCCCC">
    <td>size:</td>
    <td><select name="size">
  		  <option value="S">Fitted</option>
  		  <option value="M">Classic Fit</option>
		  <option value="L">Relaxed fit</option>
   </select></td>
   <td>Size refers to the fit of the tshirt, also related to engine</td>
  </tr>
  <tr>
    <td>color:</td>
    <td><label>
      <select name="color" id="color">
        <option value="black">black</option>
        <option value="white">white</option>
        <option value="red">red</option>
        <option value="green">green</option>
        <option value="white/pink">white/pink</option>
        <option value="brown">brown</option>
        <option value="yellow">yellow</option>
      </select>
    </label></td>
    <td>Color of tshirt. To add another color to an existent design please use <a href="addcolor.php">addcolor.php</a></td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td >active:</td>
    <td><select name="active" id="active">
        <option value="yes">yes</option>
        <option value="no">no</option>
      </select></td>
    <td>set the tshirt live or not</td>  
  </tr>
  <tr>
    <td>zazzlecodeURL</td>
    <td><input name="zazzlecodeurl" type="text" size="40" maxlength="500" /></td>
    <td>URL to tshirt page on zazzle engine (ie.: http://www.zazzle.com/name&code?gl=looklala&rf=238996134271056600&CMPN=zstore&zbar=1) </td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td >priceeuro</td>
    <td><input name="priceeuro" type="text" /></td>
    <td>Price in euro of tshirt.Taken from any zazzle engine on euro(zazzle.es)</td>
  </tr>
  <tr>
    <td>pricedollar</td>
    <td><input name="pricedollar" type="text" /></td>
    <td>Price in dollar of tshirt.Taken from any zazzle engine on US dollars(zazzle.com)</td>
  </tr>
</table>

<input type="submit" name="submit" value="+ Add">
	</form>
	<?php	
}

?><title>lala tshirt admin</title>



 <!--next comes the form, you must set the enctype to "multipart/frm-data" and use an input type "file" -->
<!--Upload a file (bigfotomodel.jpg, smallfotomodel.jpg, smallfotomodel2.jpg, thumb.jpg) -->
 
 <a href="../../blog/wp-content/uploads/looklalaweb/upload3.php">Upload an image</a>
 
 <!--<form name="newad" method="post" enctype="multipart/form-data"  action="../../blog/wp-content/uploads/looklalaweb/upload3.php">
 <table>
 	<tr><td><input type="file" name="image"></td></tr>
 	<tr><td><input name="upload3" type="submit" value="Upload image"></td></tr>
 </table>	
 </form>-->

<hr />

<form name="form1" method="post" action="tshirtadmin.php?listok=1">
  		<input type="submit" name="Submit" value="ListTshirts">
</form>

<hr />
<form name="form2" method="post" action="tshirtadmin.php?addok=1">
  		<input type="submit" name="Submit" value="Add Design + MainTshirt">
</form>
