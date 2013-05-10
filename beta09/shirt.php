<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>



<?php //Llamada a la conexión de BD de Brinkster hosting
include('engine/dbcon.php');
include('engine/tcolor.php');
include('engine/tnum.php');
include('engine/tname.php');
include('engine/getlove.php');
include('engine/getneed.php');
include('engine/radrandt.php');
include('engine/getzazzleurlcode.php');
include('engine/getpricedollar.php');
include('engine/getpriceeuro.php');
include('engine/getsizefit.php');
include('engine/getdesc.php');
include('engine/selfurl.php');

//Pillamos la id de la camiseta de la URL
$id = $_GET['id'];

//get the id design
$query=("SELECT * FROM lala_camisetas WHERE id='$id'");
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$iddesign = $row['lala_designs_id'];


if ($id=="") {die('Error tshirt id null');}



?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta property="og:title" content="<?php $name = tname($id); print $name; ?>"/>
<meta property="og:site_name" content="looklala"/>
<meta property="og:type" content="article" />
<meta property="og:description" content="<?php print getdesc($id) ?>" />
<meta property="og:image" content="http://www.looklala.com/looklala/blog/wp-content/uploads/looklalaweb/tshirtid<?php print $id ?>/thumb.jpg"/>



<title><?php  print $name; $ret = radrandt($name); ?> | looklala.com</title>

<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" href="engine/960.css" />
<link href="looklalahome.css" rel="stylesheet" type="text/css" />
<link href="engine/multibox.css" rel="stylesheet" type="text/css" />

<script type="text/javascript"  src="engine/lalahomeengine.js"></script>
<script type="text/javascript" src="engine/mootools.js"></script>
<script type="text/javascript" src="engine/overlay.js"></script>
<script type="text/javascript" src="engine/multibox.js"></script>

</head>

<body onload="MM_preloadImages('images/home/buttonbuyon.png','images/home/cubitoonBrown.png','images/home/cubitoongreen.png','images/home/cubitoonred.png','images/home/cubitoonyellow.png','images/home/cubitoonwhite.png','images/home/headertransb.png','images/home/helpbuttonon.png','images/home/sizehelpbuttonon.png','images/home/badgeon.png')">


<div class="headercontainer">
	
    <div class="leftimage"><a href="home.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('home','','images/home/headertransb.png',1)"><img src="images/home/headertrans2.png" width="528" height="77" id="home"/></a></div>
	<div class="rightimage"><a href="badge.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('badge','','images/home/badgeon.png',1)" class="mb" rel="width:400,height:400,ajax:true"><img src="images/home/badge.png" width="100" height="100" id='badge' name='Beta!'/></a></div>
    
    
    <div class="clear">&nbsp;</div>
    <div class="helpbutton"><a href="faq.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('help','','images/home/helpbuttonon.png',1)" class="mb" rel="width:650,height:750,iframe:true"><img src="images/home/helpbutton.png" width="458" height="66" id="help" name="help"/></a>
    </div>
    
</div>


<div class="maincontainershirt">
	
    <div class="biglalapodlaunchcollection">
    	
        <div class="tshirttitle">
        <?php print $name;?>
        </div>
        <div class="globitos">
              <div class="lovecounter"><?php print getlove($iddesign) ?></div>
              <div class="needcounter"><?php print getneed($iddesign) ?></div>
          
        </div>
        <div class="bigpic">
        <span class="fotoborder"><img src="http://www.looklala.com/looklala/blog/wp-content/uploads/looklalaweb/tshirtid<?php print $id ?>/bigfotomodel.jpg"  /></span>
      </div>
        
        <div class="smallpic">
        <table width="200" border="0" cellpadding="5">
          <tr>
            <td><span class="fotoborder"><img src="http://www.looklala.com/looklala/blog/wp-content/uploads/looklalaweb/tshirtid<?php print $id ?>/smallfotomodel.png" width="166" height="194" /></span></td>
            <td><span class="fotoborder"><img src="http://www.looklala.com/looklala/blog/wp-content/uploads/looklalaweb/tshirtid<?php print $id ?>/smallfotomodel2.png" width="196" height="197" /></span></td>
            <td class="coll">&nbsp;</td>
            <td>
            	    <a href="<?php print getzazzleurlcode($id) ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('buy','','images/home/buttonbuyon.png',1)"><img src="images/home/buttonbuy.png" name="buy" width="212" height="186" id="buy" /></a>
                    
                    
            </td>
          </tr>
        </table>
        <div class="shirtdesc"><?php print getdesc($id)?></div>
        </div>
   
   

       
  </div>  <!--END BIG POD-->

	<div class="secondpod">
    <div class="secondpodcolors">
    	<div class="secondpodletters">
			<?php  print $ret['model'];  ?>
        </div>
        <img src="images/home/colors.png" width="118" height="35" />
        
        
        <br /><br />
<!-- Begin of COLOR LOOP -->
    	<?php
		
			
			/// El id del design
			$n=$iddesign;
			
            ////Loop for colors
			$colors=tcolor($n);
			$numcolors = count($colors); ////Numero de loops!
						
			///Loop for color cubes
			for ($i=0;$i<$numcolors;$i++)
				{	
					   if ($i==0){
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
					  	   ?><a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('<?php print 'cubitoBrown'.$n.'c'.$i?>','','<?php echo $cubitoonBrown ?>',1)" ><img title="available in <?php echo $colorname ?>" name="available in <?php echo $colorname ?>" id="<?php print 'cubitoBrown'.$n.'c'.$i?>" src="<?php echo $cubitoBrown ?>" /></a><?
  
					  }?>
                      
				  
			<?php
			
			////End loop for color cubes
				}
			
	
			?>
      
      
        
           <!-- Price System --> 
        <div class="pricepod">
        	<div class="pricelettersmini">
            	<?php $priceeuro = getpriceeuro($id); print ($priceeuro.'&#8364;') ?>

        </div>
            <div class="priceletters">
            	<?php $pricedollar = getpricedollar($id); print ('$'.$pricedollar) ?>
                
          </div>
        </div>
        <!-- End of Price System-->
        
        <!--FIT SIZE -->
        <div class="fitimage2">
        	<a href="sizehelp.php?size=<?php print $row['size']; ?>&gender=<?php print $row['sex']; ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('sizehelp','','images/home/sizehelpbuttonon.png',1)" class="mb" rel="width:800,height:600,ajax:true"><img src="images/home/sizehelpbutton.png" width="91" height="65" id="sizehelp"/></a>
        	
		<?php $ret = getsizefit($id); ?>
        <img src="<?php print ($ret['sizeimage']) ?>" name="<?php print ($ret['sizename']) ?>" title="<?php print ($ret['sizename']) ?>" />
        </div>
      <!--END OF FIT SIZE  -->
        
        
        
        
        </div>
    	<!-- End of COLOR LOOP-->
        
   		     
   
        
  </div>
   
   
<?php
function myUrlEncode($string) {
    $entities = array('%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
    $replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
    return str_replace($entities, $replacements, urlencode($string));
}
?>
   
  <div class="clear">&nbsp;</div>
	<div class="thirdpod"><div class="sharetext"><table width="256" border="0" align="center" cellpadding="0">
  <tr>
    <td width="137"><a name="fb_share" type="button_count" share_url="<?php print myUrlEncode(selfURL());?>" href="http://www.facebook.com/sharer.php">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
	
   </td>
    
    
     <td width="143"><a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="looklalacom">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script></td>     
  </tr>
</table>
&nbsp;
          
          
  </div></div>


<div class="clear">&nbsp;</div>
</div>











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
			window.addEvent('domready', function(){
				box = new MultiBox('mb', {descClassName: 'multiBoxDesc', useOverlay: true});
			});
		</script>

</body>
</html>
