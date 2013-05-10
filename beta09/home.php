<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>looklala.com | indie trend</title>

<meta property="og:site_name" content="looklala"/>

<meta property="og:description" content="looklala.com | indie trend is coming!" />
<link rel="shortcut icon" href="favicon.ico">

<!--


/***********************************************
* looklala.com home BETA v1.5.07072012
* (c)2012 Radical Graphics Studios (www.radicalgraphics.com)
* 
*
***********************************************/

-->

<?php //recogemos el parametro
$sw = $_GET['sw'] ;
$currentpage = $_GET['page'];
?>

<script type="text/javascript"  src="engine/lalahomeengine.js"></script>
<script type="text/javascript"  src="engine/jquery-1.3.2.min.js"></script>

<?php 
	//Check for page1 or not (if page 1 we show the carousel)
	if ($currentpage==1 || $currentpage=="") { ?>
	<script type="text/javascript" src="engine/stepcarousel/stepcarousel.js"></script>
	
	<?
	}
?>
<script type="text/javascript" src="engine/mootools.js"></script>
<script type="text/javascript" src="engine/overlay.js"></script>
<script type="text/javascript" src="engine/multibox.js"></script>

<?php
//Check for page1 or not (if page 1 we show the carousel)
	if ($currentpage==1 || $currentpage=="") { ?>
	


<script type="text/javascript">

/***********************************************
* Step Carousel Viewer script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
* This notice must stay intact for legal use
***********************************************/

stepcarousel.setup({
	galleryid: 'mygallery', //id of carousel DIV
	beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
	panelclass: 'panel', //class of panel DIVs each holding content
	autostep: {enable:true, moveby:1, pause:4000},
	panelbehavior: {speed:600, wraparound:true, persist:false},
	defaultbuttons: {enable: false},
	statusvars: ['statusA', 'statusB'], //register 3 variables that contain current panel (start), current panel (last), and total panels
	contenttype: ['inline'] //content setting ['inline'] or ['ajax', 'path_to_external_file']
})

</script>

	<?
	}
?>



<link href="looklalahome.css" rel="stylesheet" type="text/css" />
<link href="engine/stepcarousel/stepcarousellooklala.css" rel="stylesheet" type="text/css" />
<link href="engine/multibox.css" rel="stylesheet" type="text/css" />

<?php //Llamada a la conexión de BD de Brinkster hosting e includes varios
include('engine/dbcon.php');
include('engine/radrandt.php');
include('engine/timage.php');
include('engine/tnum.php');
include('engine/tname.php');
include('engine/tcolor.php');
include('engine/tactive.php');
include('engine/tdesignname.php');
include('engine/queryswitch.php');
include('engine/getlove.php');
include('engine/getneed.php');
include('engine/pagination/ps_pagination.php');
?>
<!--- Google analytics code --->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26351198-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</head>

<body onload="MM_preloadImages('images/home/lovethison.png','images/home/needthison.png','images/home/cubitoonBrown.png','images/home/cubitoongreen.png','images/home/cubitoonred.png','images/home/cubitoonyellow.png','images/home/cubitoonwhite.png','images/home/headertransb.png','images/home/blogbuttonon.png','images/home/twitterbuttonon.png','images/home/needbuttonhover.png','images/home/lovebuttonhover.png','images/home/randombuttonhover.png','images/home/lovebuttonpressed.png','images/home/needbuttonpressed.png','images/home/randombuttonpressed.png','images/home/needbuttonhovermini.png','images/home/lovebuttonhovermini.png','images/home/randombuttonhovermini.png','images/home/lovebuttonpressedmini.png','images/home/needbuttonpressedmini.png','images/home/randombuttonpressedmini.png','images/home/fullcollectionbuttonon.png','images/home/wannaseebuttonon.png','images/home/helpbuttonhomeon.png','images/home/badgeon.png')">




<div class="headercontainer">
	
    <div class="leftimage"><a href="home.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('home','','images/home/headertransb.png',1)"><img src="images/home/headertrans2.png" width="528" height="77" id="home" name="home" title="home"/></a></div>
	<div class="rightimage"><a href="faq.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('help','','images/home/helpbuttonhomeon.png',1)" class="mb" rel="width:650,height:750,iframe:true"><img src="images/home/helpbuttonhome.png" style="padding-right:55px;" width="194" height="52" id="help" name="help"/></a>
   <a href="badge.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('badge','','images/home/badgeon.png',1)" class="mb" rel="width:400,height:400,ajax:true"><img src="images/home/badge.png" width="100" height="100" id='badge' name='Beta!'/></a>
	 </div>
	<div class="clear">&nbsp;</div>

    
</div>

<?php //check for second or more pages


if ($currentpage==1 || $currentpage=="") { 
?>


 <p id="mygallery-paginate" class="centerdiv">
<img src="opencircle.png" data-over="graycircle.png" data-select="closedcircle.png" data-moveby="1" />
</p>



<div class="banner">

  <!-- HTML FOR CAROUSEL -->
  <!--/////////-->
  <!--/////////-->
  <!--/////////-->
 
  <div id="mygallery" class="stepcarousel">
		<div class="belt">
	
			
            
			<div class="panel">
                <img src="images/home/bannerbig2.png"  border="0" usemap="#Map" />
                <map name="Map" id="Map">
                  <area shape="rect" coords="281,44,335,104" href="shirt.php?id=1"  />
                  <area shape="rect" coords="352,44,439,92" href="sizehelp.php?size=M&gender=F" class="mb" rel="width:800,height:600,ajax:true"/>
                  <area shape="circle" coords="289,208,21" href="javascript:stepcarousel.stepBy('mygallery', 1)" alt="next" />
                  <area shape="rect" coords="299,199,331,214" href="javascript:stepcarousel.stepBy('mygallery', 1)"/>
                  <area shape="circle" coords="473,35,10" href="closebanner.html" class="mb" rel="width:750,height:500,ajax:true"/>
                  <area shape="rect" coords="158,40,260,229" href="shirt.php?id=1" />
                </map>
</div>
                
                <div class="panel">
                <img src="images/home/banner2verde.png"  border="0" usemap="#Map2"  />
                <map name="Map2" id="Map2">
                  <area shape="circle" coords="230,80,23" href="javascript:stepcarousel.stepBy('mygallery', 1)" alt="next" />
                  <area shape="rect" coords="295,244,366,296" href="shirt.php?id=3" />
                  <area shape="poly" coords="524,432,566,308" href="#" />
                  <area shape="rect" coords="227,68,279,89" href="javascript:stepcarousel.stepBy('mygallery', 1)">
                  <area shape="rect" coords="80,86,211,250" href="shirt.php?id=3" />
                </map>
</div>
                
                <?php
				$rand = rand(1,3);
				if ($rand==1) {
				?>	
				<div class="panel" style="width:840px;">
                  <img src="images/home/banner4verde2.png" border="0" usemap="#Map4" />
                  <map name="Map4">
                  <area shape="rect" coords="192,90,236,105" href="javascript:stepcarousel.stepBy('mygallery', 1)" alt="next" />
                  <area shape="circle" coords="191,98,23" href="javascript:stepcarousel.stepBy('mygallery', 1)">
                  <area shape="rect" coords="219,113,317,281" href="shirt.php?id=2" />
                  <area shape="rect" coords="109,111,159,172" href="shirt.php?id=2" />
                </map>
</div>
				<?	
					}else{
				
				?>
                
                <div class="panel">
                <img src="images/home/banner6.png" border="0" usemap="#Map4Map" />
                <map name="Map4Map" id="Map4Map"><area shape="rect" coords="198,88,234,106" href="javascript:stepcarousel.stepBy('mygallery', 1)" alt="next" /><area shape="circle" coords="183,97,19" href="javascript:stepcarousel.stepBy('mygallery', 1)" />
                  <area shape="rect" coords="111,119,151,165" href="shirt.php?id=25" />
                  <area shape="rect" coords="206,116,310,258" href="shirt.php?id=25" />
  </map>
                
</div>
                
                
                <? } 
				?>

				<div class="panel">
                <img src="images/home/banner5verde.png" border="0" usemap="#Map5" />
                <map name="Map5">
                  <area shape="rect" coords="351,94,389,108" href="javascript:stepcarousel.stepBy('mygallery', 1)" alt="next" />
                  <area shape="circle" coords="342,102,19" href="javascript:stepcarousel.stepBy('mygallery', 1)">
                  <area shape="rect" coords="167,171,363,249" href="#" />
  </map>
</div>
                
		
	</div>
  
  <!-- END OF CARRUSEL -->
  </div>

</div>

<div class="clear">&nbsp;</div>
<a name="navanchor"></a>
<?php

} else {?><br /><br /><br /><?php }

?>

<!--Navigation POD -->

<?php 
//Creamos el objet pagination para usarlo en el top y bottom de la page
$querypagination = "SELECT * FROM lala_camisetas WHERE active=1";//Damos al paginador las camisetas live en home

/*
	 * Create a PS_Pagination object
	 * 
	 * $conn = MySQL connection object
	 * $sql = SQl Query to paginate
	 * 10 = Number of rows per page
	 * 5 = Number of links
	 * "param1=valu1&param2=value2" = You can append your own parameters to paginations links
	 */
	$pager = new PS_Pagination($con, $querypagination, 10, 5, "sw=".$sw."");
	
	/*
	 * Enable debugging if you want o view query errors
	*/
	$pager->setDebug(true);
	
	/*
	 * The paginate() function returns a mysql result set
	 * or false if no rows are returned by the query
	*/
	$rs = $pager->paginate();
	if(!$rs) die(mysql_error());


$paginatorpod=""; //Paginator pod controla el paginador de arriba. Si estamos en la pagina 2 o mas y no es random mostramos el paginador arriba tambien


///Checking para usar el navpod o navpodmini. Navpodmini incluye (o deberia!!!) controles para el paginador (o incluso separados en otro lado)

///From the transition to looklala 2.0 this switch is almost trivial. In fact there's no diference in the layout. Although the code is left as is for clarity purposes.
///Please use this if you need to discriminate if you're in the home page or not.
if ($currentpage!="" && $currentpage>1){
		
			$navpodclass = "navpodmini";
			$sortby = "sortbymini.png";
			$lovebuttonnormal = "lovebuttonnormalmini.png";
			$lovebuttonhover = "lovebuttonhovermini.png";
			$lovebuttonpressed = "lovebuttonpressedmini.png";
			$needbuttonnormal = "needbuttonnormalmini.png";
			$needbuttonhover = "needbuttonhovermini.png";
			$needbuttonpressed = "needbuttonpressedmini.png";
			$randombuttonnormal = "randombuttonnormalmini.png";
			$randombuttonhover = "randombuttonhovermini.png";
			$randombuttonpressed = "randombuttonpressedmini.png";
			$paginatorpod= '<div class="paginator">'.$pager->renderPrev(). $pager->renderNav('<span class="shirtpod">', '</span>'). $pager->renderNext().'</div>';
			
			
			
} else { 

			$navpodclass = "navpodmini";
			$sortby = "sortbymini.png";
			$lovebuttonnormal = "lovebuttonnormalmini.png";
			$lovebuttonhover = "lovebuttonhovermini.png";
			$lovebuttonpressed = "lovebuttonpressedmini.png";
			$needbuttonnormal = "needbuttonnormalmini.png";
			$needbuttonhover = "needbuttonhovermini.png";
			$needbuttonpressed = "needbuttonpressedmini.png";
			$randombuttonnormal = "randombuttonnormalmini.png";
			$randombuttonhover = "randombuttonhovermini.png";
			$randombuttonpressed = "randombuttonpressedmini.png";
			$paginatorpod= '<div class="paginator">'.$pager->renderPrev(). $pager->renderNav('<span class="shirtpod">', '</span>'). $pager->renderNext().'</div>';
}





///Switch para controlar el orden de home. basado en $sw


if ($currentpage!=""){
	if ($currentpage!=1){
		$offsetillo = ($currentpage-1)*10; //el offsetillo nos dice cuando hay q leer en la BBDD debido a q estamos en pagina 2 o 3 etc... (el calculo es 10 camisetas por pagina, es decir, pagina 1 - offsetillo 0, pagina 2 - offsetillo 10, pag	 3 - off 20, etc...																											
	}

}

if ($offsetillo == "") {$offsetillo=0;}

///vemos si hay parametro de opcion elegida
if ($sw!="") {
	
		switch($sw) {
		
				case "need":
				$query =queryswitch('need',$offsetillo);?>
                
                <div class="<? print $navpodclass;?>"><img src="images/home/<? print $sortby;?>" style="padding-right:30px;" /><a href="home.php?sw=love#navanchor" onmouseout="MM_swapImgRestore()" onclick="MM_swapImage('lovebutton','','images/home/<? print $lovebuttonpressed;?>',1)" onmouseover="MM_swapImage('lovebutton','','images/home/<? print $lovebuttonhover;?>',1)"><img src="images/home/<? print $lovebuttonnormal;?>" id="lovebutton" title="top loved" /></a><img src="images/home/<? print $needbuttonpressed;?>" id="needbutton" alt="Most needed tshirts selected" title="Most needed tshirts selected"/> <a href="home.php?sw=random#navanchor" onmouseout="MM_swapImgRestore()" onclick="MM_swapImage('randombutton','','images/home/<? print $randombuttonpressed;?>',1)" onmouseover="MM_swapImage('randombutton','','images/home/<? print $randombuttonhover;?>',1)"><img src="images/home/<? print $randombuttonnormal;?>" alt="Random!! Yippieeee" title="Random!! Yippieeee" id="randombutton"/></a><?php //echo $pager->renderPrev(); echo $pager->renderNext(); ?></div>
                
                
                <?
				break;
			
				case "love":
				$query =queryswitch('love',$offsetillo);?>
				
                <div class="<? print $navpodclass;?>"></a><img src="images/home/<? print $sortby;?>" style="padding-right:30px;" /><img src="images/home/<? print $lovebuttonpressed;?>" id="lovebutton" alt="Most loved tshirts selected" title="Most loved tshirts selected"/><a href="home.php?sw=need#navanchor" onmouseout="MM_swapImgRestore()" onclick="MM_swapImage('needbutton','','images/home/<? print $needbuttonpressed;?>',1)" onmouseover="MM_swapImage('needbutton','','images/home/<? print $needbuttonhover;?>',1)"><img src="images/home/<? print $needbuttonnormal;?>" id="needbutton" title="top needed"/></a> <a href="home.php?sw=random#navanchor" onmouseout="MM_swapImgRestore()" onclick="MM_swapImage('randombutton','','images/home/<? print $randombuttonpressed;?>',1)" onmouseover="MM_swapImage('randombutton','','images/home/<? print $randombuttonhover;?>',1)"><img src="images/home/<? print $randombuttonnormal;?>" alt="Random!! Yippieeee" title="Random!! Yippieeee" id="randombutton"/></a><?php //echo $pager->renderPrev(); echo $pager->renderNext(); ?></div>
                
				
				
				<?
				break;
				
				case "random":
				$query =queryswitch('random',$offsetillo);?>
				
                <div class="<? print $navpodclass;?>"></a><img src="images/home/<? print $sortby;?>" style="padding-right:30px;" /><a href="home.php?sw=love#navanchor" onmouseout="MM_swapImgRestore()" onclick="MM_swapImage('lovebutton','','images/home/<? print $lovebuttonpressed;?>',1)" onmouseover="MM_swapImage('lovebutton','','images/home/<? print $lovebuttonhover;?>',1)"><img src="images/home/<? print $lovebuttonnormal;?>" id="lovebutton" /></a><a href="home.php?sw=need#navanchor" onmouseout="MM_swapImgRestore()" onclick="MM_swapImage('needbutton','','images/home/<? print $needbuttonpressed;?>',1)" onmouseover="MM_swapImage('needbutton','','images/home/<? print $needbuttonhover;?>',1)"><img src="images/home/<? print $needbuttonnormal;?>" id="needbutton"/></a><img src="images/home/<? print $randombuttonpressed;?>" id="randombutton" alt="Random tshirts selected" title="Random tshirts selected"/></div>
                
				
				
				<?
				break;
			
		}
		
		
	
	
	
	}else{
		$query =queryswitch('featured',$offsetillo);?>
		
		<div class="<? print $navpodclass;?>"></a><img src="images/home/<? print $sortby;?>"  style="padding-right:30px;" /><a href="home.php?sw=love#navanchor" onmouseout="MM_swapImgRestore()" onclick="MM_swapImage('lovebutton','','images/home/<? print $lovebuttonpressed;?>',1)" onmouseover="MM_swapImage('lovebutton','','images/home/<? print $lovebuttonhover;?>',1)"><img src="images/home/<? print $lovebuttonnormal;?>" id="lovebutton" /></a><a href="home.php?sw=need#navanchor" onmouseout="MM_swapImgRestore()" onclick="MM_swapImage('needbutton','','images/home/<? print $needbuttonpressed;?>',1)" onmouseover="MM_swapImage('needbutton','','images/home/<? print $needbuttonhover;?>',1)"><img src="images/home/<? print $needbuttonnormal;?>" id="needbutton"/></a> <a href="home.php?sw=random#navanchor" onmouseout="MM_swapImgRestore()" onclick="MM_swapImage('randombutton','','images/home/<? print $randombuttonpressed;?>',1)" onmouseover="MM_swapImage('randombutton','','images/home/<? print $randombuttonhover;?>',1)"><img src="images/home/<? print $randombuttonnormal;?>" alt="Random!! Yippieeee" title="Random!! Yippieeee" id="randombutton"/></a><?php //echo $pager->renderPrev(); echo $pager->renderNext();?></div>
		
        
        <?
}

echo $paginatorpod;

?>



<!--fin navigation pod -->


<div class="wrapper">
<div class="maincontainer">


<!-- Looplalapods -->


<?php $tshirtnum = tnum(); //Pillamos el número de loops a dar

//die('camisetas activas'.$tshirtnum);
//$tshirtnum = 6; //6 camisetas en la portada




//Montamos la funcion para saber si es par o impar
function is_odd($number) {
   return $number & 1; // 0 = even, 1 = odd
}





?>

<!-- MAIN LOOP  -->

<?php

//Query para saber cuantas camisetas activas hay en la BD. Se puede combinar ORDER BY  para alterar el orden con SQL. Con LIMIT se puede conseguir un numero maximo de registros
//$query=("SELECT * FROM lala_camisetas WHERE active = 1 ORDER BY color ASC LIMIT 1,10");

//$query = queryswitch('love');//string for the order on home page: 'love' , 'need' , 'name' , 'color'

//die($query);

//variable para ver si es par o impar y poner el lalapodr o lalapod . no se puede usar n pq las camisetas no son consecutivas
$printed = 0;

//die("la query es".$query);

$result=mysql_query($query);

//$n=1;

while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {


/*loop inverso*/


/*for ($n=$tshirtnum; $n>=1; $n--) {*/

//$sioque = tactive($row['id']);
//
//if ($row['id']!="") {///Chequeo para ver si id es null
?>
<!-- LALAPOD -->

<?php 

$design_name = tdesignname($row['lala_designs_id']);




$printed = $printed + 1;

//Vemos si el numero es impar o par. Si es impar es lalapod (izq) y si no lalapodr (der)
if (is_odd($printed)) {$classpod='lalapod';} else {$classpod='lalapodr';}


?>
			<div class="<?php print $classpod?>">
					<div class="lalapodtext"><?php print $design_name;?><span class="counter"><?php
                    
                    ///check para lovecounter or needcounter
                    switch ($sw) {
						
						case "need":
							?>
							<img src="images/home/ohcounter.png" width="38" height="34" alt="oh received" title="oh received"/>
							<?
							print getneed($row['lala_designs_id']);						
							break;
							
						case "love":	
							?>
                            <img src="images/home/lovecounter.png" width="38" height="34" alt="love received" title="love received" />
							<?
							print getlove($row['lala_designs_id']);						
							break;
							
						/*case "random":
							?>
							<img src="images/home/ohcounter.png" width="38" height="34" alt="oh received" title="oh received"/>
							<?
							print getneed($row['lala_designs_id']);
							?>
                            <img src="images/home/lovecounter.png" width="38" height="34" alt="love received" title="love received" />
							<?
							print getlove($row['lala_designs_id']);	
							break;*/
						}
                    	
					?></span></div>
					
					<table  class="coll"   border="0" >
					  <tr>
						<td><div class="lalapodshirt"><a href="shirt.php?id=<?php print $row['id'];?>"><img id="shirt" src="<?php $retimg = timage($row['lala_designs_id']); print $retimg['zmodelimage'];?>" /></a></div></td>
						<td class="buttonback">
                        
                        <a href="processvote.php?id=<?php print $row['id'] ?>&var=n" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('<?php print 'needthis'.$row['id']?>','','images/home/needthison.png',1)"><img src="images/home/needthis.png" name="<?php print 'needthis'.$row['id']?>" width="160" height="94" id="<?php print 'needthis' + $row['id']?>" /></a>
                        
                        <a href="processvote.php?id=<?php print $row['id'] ?>&var=l" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('<?php print 'lovethis'.$row['id']?>','','images/home/lovethison.png',1)"><br/><img src="images/home/lovethis.png" name="<?php print 'lovethis'.$row['id']?>" width="164" height="143" id="<?php print 'lovethis'.$row['id']?>"/></a>
                        
                        </td>
					  </tr>
					</table>
					
              <div class="lalapodshirt" ><div class="fit"><?php print $row['name'];?> | <?php print $row['model'];?><br/><br/>
            <div class="colorsletras"></div>
            
            
            <?php
            ////Loop for colors
			
			$colors=tcolor($row['lala_designs_id']);
			$numcolors = count($colors); ////Numero de loops!
			//if ($row['id']==33) {
//					 
//			die("numero de colores: ".$numcolors."color 1".$colors[0]); }
			///Loop for color cubes
			for ($i=0;$i<$numcolors;$i++)
				{
						
						//Para saber cual colorcube es el que esta on debemos ver si coincide con el de la camiseta
					   					   
					   if ($colors[$i]==$row['color']){
						   switch($colors[$i]) {
							
							case "black": 
								 $cubitoon="images/home/cubitoon.png";
								 $colorname="black";
								 break;
							case "brown": 
								 $cubitoon="images/home/cubitoonBrown.png";
								 $colorname="brown";
								 break;
							case "white/pink": 
								$cubitoon="images/home/cubitoonred.png";
								$colorname="white/pink";
								break;
							case "green": 
								$cubitoon="images/home/cubitoongreen.png";
								$colorname="green";
								break;
							case "white": 
								$cubitoon="images/home/cubitoonwhite.png";
								$colorname="white";
								break;
							case "red": 
								$cubitoon="images/home/cubitoonred.png";
								$colorname="red";
								break;
							case "yellow": 
								$cubitoon="images/home/cubitoonyellow.png";
								$colorname="yellow";
								break;
							
						   }
						   ?><img id="cubitoon" title="available in <?php echo $colorname ?>" name="available in <?php echo $colorname ?>" src="<?php echo $cubitoon ?>" /><?   
					   } else {
			   
						   switch ($colors[$i]) {
								case "black" :
									 $cubitoonBrown="images/home/cubitoon.png";
									 $cubitoBrown="images/home/cubito.png";
									 $colorname="black";
									 break;
								case "brown" :
									 $cubitoonBrown="images/home/cubitoonBrown.png";
									 $cubitoBrown="images/home/cubitoBrown.png";
									 $colorname="brown";
									 break;
								case "white/pink": 
									$cubitoonBrown="images/home/cubitoonred.png";
									 $cubitoBrown="images/home/cubitored.png";
									 $colorname="white/pink";
									 break;
								case "green":
									$cubitoonBrown="images/home/cubitoongreen.png";
									 $cubitoBrown="images/home/cubitogreen.png";
									 $colorname="green";
									 break;
								case "white": 
									$cubitoonBrown="images/home/cubitoonwhite.png";
									$cubitoBrown="images/home/cubitowhite.png";
									$colorname="white";
									break;
								case "red": 
									$cubitoonBrown="images/home/cubitoonred.png";
									$cubitoBrown="images/home/cubitored.png";
									$colorname="red";
									break;
								case "yellow": 
									$cubitoonBrown="images/home/cubitoonyellow.png";
									$cubitoBrown="images/home/cubitoyellow.png";
									$colorname="yellow";
									break;	
						   }
					  	   ?><a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('<?php print 'cubitoBrown'.$row['id'].'c'.$i?>','','<?php echo $cubitoonBrown ?>',1)" ><img title="available in <?php echo $colorname ?>" name="available in <?php echo $colorname ?>" id="<?php print 'cubitoBrown'.$row['id'].'c'.$i?>" src="<?php echo $cubitoBrown ?>" /></a><?
  
					  }?>
                      
				  
			<?php
			
			////End loop for color cubes
				}
			
			
			?>		  
                      </div></div>
                      <div class="fitimage">
                      
					  <table  class="fitimage">
					  <tr>
                      <td colspan="2" ><br/><div class="colorsletras"></div></td>
                      </tr>
                      
                      <tr>
                      <?php
					  //////size selector
					  	$idactual = $row['id'];
					  	$querysize=("SELECT * FROM lala_camisetas WHERE id = '$idactual'");
						$resultsize=mysql_query($querysize);
						//$num_rows = mysql_num_rows($resultsize);
						$rowsize = mysql_fetch_array($resultsize);
						switch ($rowsize['size']) {
							
							case 'S':
								$sizeimage = "images/home/smallfit.png";
								$sizename = "fitted";
								break;
							
							case 'M':
								$sizeimage = "images/home/mediumfit.png";
								$sizename = "classic fit";
								break;
							
							case 'L':
								$sizeimage = "images/home/largefit.png";
								$sizename = "loose fit";
								break;
							
							}
						
						switch ($rowsize['sex']){
							
							case "M":
								$sexicon = 'images/home/male.png';
								 $sexname = "Guy";
								 $divid="boy";
								 break;
							case "F":
								 $sexicon = 'images/home/female.png';
								 $sexname = "Girl";
								 $divid="girl";
								 break;
						}
							$priceeuro = $rowsize['priceeuro'];;


						
						
					  ?>
                      
                      
                      
					  <td class="centerimage"><div id="carteloide"><a title="<?php echo $sizename ?>"><img  src="<?php echo $sizeimage ?>" border="0"></a></div></td>
                      <td></td>
					  <td class="centerimage"><div id="<?php echo $divid ?>"><a title="<?php echo $sexname ?>"><img src="<?php echo $sexicon ?>"></a></div></td>
					  
					  
					  <td class="centerimage"><div id="<?php echo $divid ?>"><?php echo $priceeuro ?>&#8364;</div></td>
					  </tr>
					  </table>
					  
					  
					 
                      </div>
        
        
        
                      
  </div>
				  
				  				
				
<!-- END OF LALAPOD -->	
	
	
	
	
	
			
<?php 

//}
$n++;
} /*END OF LALAPOD LOOPS*/


?>



<div class="clear"></div>
<?php
//NO paginamos si es random

if ($sw!="random") {
?>
<div class="paginator">
<?




	//while($row = mysql_fetch_assoc($rs)) {
//		echo $row['image'],"<br />\n";
//	}
	
	//Display the full navigation in one go
	//echo $pager->renderFullNav();
	
	//echo "<br />\n";
	
	/*
	 * Or you can display the individual links for more
	 * control over HTML rendering.
	 * 
	*/
	
	//Display the link to first page: First
	//echo $pager->renderFirst();
	
	//Display the link to previous page: <<
	echo $pager->renderPrev();
	
	/*
	 * Display page links: 1 2 3
	 * $prefix = Will be prepended to the page link (optional)
	 * $suffix = Will be appended to the page link (optional)
	 * 
	*/
	echo $pager->renderNav('<span class="shirtpod">', '</span>');
	
	//Display the link to next page: >>
	echo $pager->renderNext();
	
	//Display the link to last page: Last
	//echo $pager->renderLast();


	//die('<br>SACABOOOOOOOO');



?>
</div>

<?php

}

?>

<div class="clear"></div>



<div class="bonepod">
<table width="700" border="0" align="center" cellpadding="10">
  <tr>
    <td><a href="http://www.looklala.com/looklala/blog" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('blog','','images/home/blogbuttonon.png',1)"><img src="images/home/blogbutton.png" width="284" height="112" id="blog" /></a></td>
    
    
    <td><!-- Facebook Badge START --><a href="http://www.facebook.com/pages/looklalacom/88814690070" title="looklala.com" target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #4898ac; text-decoration: none;">looklala.com</a><span style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; line-height: 16px; font-variant: normal; font-style: normal; font-weight: normal; color: #555555; text-decoration: none;">&nbsp;|&nbsp;</span><br/><a href="http://www.facebook.com/pages/looklalacom/88814690070" title="looklala.com" target="_TOP"><img src="http://badge.facebook.com/badge/88814690070.2886.214488839.png" width="239" height="84" style="border: 0px;" /></a>
<!-- Facebook Badge END --></td>
    <td><a href="http://www.twitter.com/looklalacom" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('twitter','','images/home/twitterbuttonon.png',1)"><img src="images/home/twitterbutton.png" width="200" height="125" id="twitter"/></a></td>
  </tr>
</table>

</div>

<br />
<div class="pinstickerpod">

<a href="pinsticker.php" class="mb" rel="width:960,height:700,iframe:true" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('wannasee','','images/home/wannaseebuttonon.png',1)"><img src="images/home/wannaseebutton.png" id="wannasee" /></a>
</div>
<div class="launchcollectionpod">

<a href="fullcollection.php"  class="mb" rel="width:960,height:700,iframe:true" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('fullcollection','','images/home/fullcollectionbuttonon.png',1)"><img src="images/home/fullcollectionbutton.png" id="fullcollection" /></a>
</div>    

<div class="clear"></div>

<div class="gallerypod">

<a href="images/gallery/summer10.jpg" id="mb1" class="mbimg" title="Summer'10 Launch Collection" rel="width:960,height:700,ajax:true"><img src="images/gallery/summer10mini.jpg" alt="" border="0" /></a>
  			<div class="multiBoxDesc mb1"></div>
<a href="images/gallery/train.jpg" id="mb2" class="mbimg" title="Green Acid" rel="width:960,height:700,ajax:true"><img src="images/gallery/trainmini.jpg" alt="" border="0" /></a>
  			<div class="multiBoxDesc mb2"><a href='shirt.php?id=25'>Green Acid</a></div>
<a href="images/gallery/lalalaugh.jpg" id="mb3" class="mbimg" title="I Luv My Mum" rel="width:960,height:700,ajax:true"><img src="images/gallery/lalalaughmini.jpg" alt="" border="0" /></a>
  			<div class="multiBoxDesc mb3"><a href='shirt.php?id=3'>I Luv My Mum</a></div>
<a href="images/gallery/praia.jpg" id="mb4" class="mbimg" title="Time Changes" rel="width:960,height:700,ajax:true"><img src="images/gallery/praiamini.jpg" alt="" border="0" /></a>
  			<div class="multiBoxDesc mb4"><a href='shirt.php?id=1'>Time Changes</a></div>
<a href="images/gallery/sticker.jpg" id="mb5" class="mbimg" title="Stickers" rel="width:960,height:700,ajax:true"><img src="images/gallery/stickermini.jpg" alt="" border="0" /></a>
  			<div class="multiBoxDesc mb5"><a href='pinsticker.php'>Stickers</a></div>

</div>
<br />
<br />
<br />
<br />
</div> <!--Closing div for main container -->


</div> <!--Closing div for wrapper -->
            
<?php

include('footer.htm');

?>




<!---UserVoice forum script --->
<script type="text/javascript">
  var uservoiceOptions = {
    key: 'looklala',
    host: 'looklala.uservoice.com', 
    forum: '15054',
    alignment: 'left',
    background_color:'#b3d10c', 
    text_color: 'white',
    hover_color: '#e68550',
    lang: 'en',
    showTab: true
  };
  function _loadUserVoice() {
    var s = document.createElement('script');
    s.src = ("https:" == document.location.protocol ? "https://" : "http://") + "uservoice.com/javascripts/widgets/tab.js";
    document.getElementsByTagName('head')[0].appendChild(s);
  }
  _loadSuper = window.onload;
  window.onload = (typeof window.onload != 'function') ? _loadUserVoice : function() { _loadSuper(); _loadUserVoice(); };
</script>

<!--/////Multibox Engine customized for looklala.com-->
<script type="text/javascript">
			var box = {};
			var imgbox = {};
			window.addEvent('domready', function(){
				box = new MultiBox('mb', {descClassName: 'multiBoxDesc', useOverlay: true});
				imgbox = new MultiBox('mbimg',{descClassName: 'multiBoxDesc', useOverlay: true});
			});
		</script>


</body>
</html>
