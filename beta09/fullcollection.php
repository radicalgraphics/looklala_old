<html>
<head>

</head>
<body>

<style type="text/css">
body {
	background-color: #a0bcd9;
	background-image: url(images/home/fondo.png);
	background-repeat: repeat-x;
	background-position: -3px top;
	
	}

.lalabadge{
	margin:5px;
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	margin-right:auto;
	margin-left:auto;
	font-weight: bold;
	color: #4898ac;
	text-align:center;
	/*width:400px;*/
	/*padding:5px;*/
	
}
.lalabadge a{
	
	color: #4898fc;
	text-decoration:none;
	
}

.lalabadge a:hover {
	text-decoration:underline;
	
	}

/* This is the H1 title used in the sample PHP files */
	.sampleTitle {
		text-align:center;
		font-family:"Trebuchet MS", Verdana;
	}
/* This is one product grid cell (the box that contains each product image and text) */
	.gridCell {
		float:left;
		text-align:center;
		position:relative;
		overflow:hidden;
		font-family:"Trebuchet MS", Verdana;
	}
/* This is the style given to the product image link by default */
	.gridCell .realviewLink {
		border:1px solid #AFD0F8;
		display:block;
		padding:0px;
	}
/* This is the style given to the product image itself by default */
	.gridCell .realviewImage {
		border:2px;
	}
/* This is the style given to the inside of the image link when hovering over the image */
	.gridCell .realviewLink:hover .realviewImage {
		border:2px solid #AFD0F8!important;
	}
/* This is the style given to the outside of the image link when hovering over the image */
	.gridCell .realviewLink:hover {
		border:1px solid #88a2c1!important;
	}
/* This is the style given to the text underneath the image (title, description, price...) */
	.gridCellInfo {
		text-align:center;
		font-size:.75em;
		font-family:"Trebuchet MS", Verdana;
	}
/* Centers text under the product  */
	.gridCellInfo a, .gridCellInfo a span {
		text-align:center;
	}
/* This is the main container for the grid of products */
	.allGrids {
		text-align:center;
		width:100%;
	}
/* Centers the grid of products inside allGrids */
	.centerGrids {
		 margin-left: auto;
		 margin-right: auto;
	}
	.error {
		border:1px solid;
		padding:18px;
		margin-bottom:23px;
	}
/* The currently selected sort method */
	.selectedSort, .selectedSort a {
		text-decoration:none;
	}
/* The pagination links */
	.count {
		float:right;
		margin-left:-2px;
		margin-bottom:7px;
		text-align:right;
		position:relative;
		font-family:"Trebuchet MS", Verdana;
	}
/* Powered by Zazzle logo */
	.pbimg {
		position:absolute;
		top:-5px;
		left:0px;
	}
	.pbimg img {
		border:0px;
	}
/* Empty classes in case you want to change the look of the pagination and sort */
	.count a, .sortLinks a {
		
	}
	.sortLinks {
		
	}
/* Used to stop product grids from floating to the left (at the end of the grid) */
	.clearMe {
		clear:both;
		margin:0px;
		padding:0px;
	}
/* Height of clearMe DIV */
	.short {
		height:10px;
	}
/* Fix for Mozilla browsers for floating elements...best not touch this! */
	.clearfix:after {
	    content: ".";
	    display: block;
	    height: 0;
	    clear: both;
	    visibility: hidden;
	}
	.clearfix {display: inline-block;}

	/* Hides from IE-mac \*/
	* html .clearfix {height: 1%;}
	.clearfix {display: block;}
	/* End hide from IE-mac */

/* Empty class in case you want to style the currently selected page number */
	.current {
		
	}
/* The product description text. To show more than one line of the description, increase the height. */	
	.productDescription {		
		cursor: default;
		text-decoration: none;
		position:relative;
		overflow:hidden;
		height:15px;
	}
/* The product title text */
	.productTitle {
		display:block;
		height:15px;
		overflow:hidden;
		font-weight:bold; 
	}
/* Product price text */
	.productPrice {
		cursor: default;
		text-decoration: none;
		font-size: 8pt;	
	}
/* The pagination arrows (previous/next)*/
	.paginationArrows {
		text-decoration: none;	
	}


</style>

<div class="lalabadge"><p><img src="images/home/launchatzazzle.png" width="641" height="131" alt="launch collection 10 at zazzle"><br><?php
// configure Zazzle Store Builder display
$_GET['showPagination'] = 'false';
$_GET['showSorting'] = 'false';
$_GET['showProductDescription'] = 'false';
$_GET['showByLine'] = 'false';
$_GET['showProductTitle'] = 'true';
$_GET['showProductPrice'] = 'false';
$_GET['gridCellSize'] = 'small';
$_GET['defaultSort'] = 'date_created';
$_GET['showHowMany'] = '32';
$_GET['productType'] = '235'; //id for tshirts only

include "engine/ZazzleStoreBuilder_v1_0_2/include/zstore.php";
?>
</p>
</div>
</body>
</html>