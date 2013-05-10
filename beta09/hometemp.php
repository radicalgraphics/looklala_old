<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>looklala.com | indie trend</title>
<link rel="shortcut icon" href="favicon.ico">

<script type="text/javascript"  src="engine/lalahomeengine.js"></script>
<script type="text/javascript"  src="engine/jquery-1.3.2.min.js"></script>
<script type="text/javascript"   src="engine/jquery.qtip/jquery.qtip-1.0.0-rc3.min.js"></script>



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
	autostep: {enable:true, moveby:1, pause:2000},
	panelbehavior: {speed:500, wraparound:true, persist:false},
	defaultbuttons: {enable: false},
	statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
	contenttype: ['inline'] //content setting ['inline'] or ['ajax', 'path_to_external_file']
})

</script>


<link href="looklalahome.css" rel="stylesheet" type="text/css" />
<link href="engine/stepcarousel/stepcarousellooklala.css" rel="stylesheet" type="text/css" />

<?php //Llamada a la conexión de BD de Brinkster hosting
include('engine/dbcon.php');
include('engine/radrandt.php');
include('engine/timage.php');
include('engine/tnum.php');
include('engine/tname.php');
include('engine/tcolor.php');
?>

</head>

<body onload="MM_preloadImages('images/home/lalatrendtechon.png','images/home/lovethison.png','images/home/needthison.png','images/home/cubitoonBrown.png','images/home/cubitoongreen.png','images/home/cubitoonred.png','images/home/cubitoonyellow.png',images/home/cubitoonwhite.png)">




<div class="headercontainer"></div>



<div class="banner">

  <!-- HTML FOR CAROUSEL -->
  <!--/////////-->
  <!--/////////-->
  <!--/////////-->
  <div id="mygallery" class="stepcarousel">
		<div class="belt">
	
			
            	
                
                <div class="panel">
                <img src="images/home/banner2.png" width="840"  border="0" usemap="#Map2"  />
                <map name="Map2" id="Map2">
                  <area shape="circle" coords="374,130,30" href="javascript:stepcarousel.stepBy('mygallery', 1)" />
                  <area shape="rect" coords="504,405,583,481" href="#" />
                </map>
          </div>
                
                
                <div class="panel">
                <img src="images/home/bannerbigw.png" border="0" usemap="#Map" />
                <map name="Map" id="Map">
                  <area shape="circle" coords="392,358,26" href="javascript:stepcarousel.stepBy('mygallery', 1)" />
                  <area shape="rect" coords="516,70,597,153" href="test.html"  />
                </map>
          </div>
                
                <div class="panel">
                <img src="images/home/banner2.png"  border="0" usemap="#Map3" />
                <map name="Map3" id="Map3">
                  <area shape="circle" coords="381,329,26" href="javascript:stepcarousel.stepBy('mygallery', 1)" />
                  <area shape="rect" coords="503,42,584,125" href="test.html"  />
                </map>
          </div>
                
                
                
    </div>       
                
         
		
  </div>
  
  <!-- END OF CARRUSEL -->
</div>

<p id="mygallery-paginate" style="width: 250px; text-align:center">
<img src="opencircle.png" data-over="graycircle.png" data-select="closedcircle.png" data-moveby="1" />
</p>

<p>
<b>Current Panel:</b> <span id="statusA"></span> <b style="margin-left: 30px">Total Panels:</b> <span id="statusC"></span>
</p>

<p>
<a href="javascript:stepcarousel.stepBy('mygallery', -1)">Back 1 Panel</a> <a href="javascript:stepcarousel.stepBy('mygallery', 1)" style="margin-left: 80px">Forward 1 Panel</a> <br />

<a href="javascript:stepcarousel.stepTo('mygallery', 1)">To 1st Panel</a> <a href="javascript:stepcarousel.stepBy('mygallery', 2)" style="margin-left: 80px">Forward 2 Panels</a>
</p>

</body>
</html>