<?php

/*
  Zazzle Store Builder 1.0.2 - a Zazzle.com product publishing tool
*/

// Please see the README.txt file included in this distribution for 
// troubleshooting, installation and customization instructions

// import our external class libraries
require_once 'cacheMgr.php';
require_once 'lastRSS.php';
require_once 'configuration.php';
require_once 'strings.php';

error_reporting(0);
/*

Copyright (c) 2008, Zazzle.com
 
All rights reserved.
 
Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
     * Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
     * Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer 
     in the documentation and/or other materials provided with the distribution.
     * Neither the name of Zazzle.com nor the names of its contributors may be used to endorse or promote products
     derived from this software without specific prior written permission.
     
THIS SOFTWARE IS PROVIDED BY Zazzle.com  "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL Zazzle.com BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE 
OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

*/

// if we have any of these params set in $_GET, they override our config file settings
if( isset( $_GET['contributorHandle'] )) $contributorHandle = $_GET['contributorHandle']; 
if( isset( $_GET['associateId'] )) $associateId = $_GET['associateId'];
if( isset( $_GET['productLineId'] )) $productLineId = $_GET['productLineId'];
if( isset( $_GET['productType'] )) $productType = $_GET['productType'];
if( isset( $_GET['keywords'] )) $keywords = $_GET['keywords']." ".$keywords;
if( isset( $_GET['keywords'] )) $keywordParam = "&amp;keywords=".urlencode($_GET['keywords']);
if( isset( $_GET['gridWidth'] )) $gridWidth = $_GET['gridWidth'];
if( isset( $_GET['gridCellSize'] )) $gridCellSize = $_GET['gridCellSize'];
if( isset( $_GET['gridCellSpacing'] )) $gridCellSpacing = $_GET['gridCellSpacing'];
if( isset( $_GET['gridCellBgColor'] )) $gridCellBgColor = $_GET['gridCellBgColor'];
if( isset( $_GET['analyticsId'] )) $analyticsId = $_GET['analyticsId'];	
if( isset( $_GET['showHowMany'] )) $showHowMany = $_GET['showHowMany'];
if( isset( $_GET['startPage'] )) $startPage = $_GET['startPage'];
if( isset( $_GET['useCaching'] )) $useCaching = $_GET['useCaching'];
if( isset( $_GET['cacheLifetime'] )) $cacheLifetime = $_GET['cacheLifetime'];
if( isset( $_GET['defaultSort'] )) $defaultSort  = $_GET['defaultSort'];
if( isset( $_GET['currentSort'] )) $currentSort  = $_GET['currentSort'];

if( isset( $_GET['useAnalytics'] )) {
	$_GET['useAnalytics'] == 'true' ? $useAnalytics = true : $useAnalytics = false;
}

if( isset( $_GET['showPagination'] ))  {
	 $_GET['showPagination'] == 'true' ? $showPagination = true : $showPagination = false;
}

if( isset( $_GET['showSorting'] ))  {
	$_GET['showSorting'] == 'true' ? $showSorting = true : $showSorting = false;
}

if( isset( $_GET['showProductDescription'] )) {
	$_GET['showProductDescription'] == 'true' ? $showProductDescription = true : $showProductDescription =  false;
}

if( isset( $_GET['showByLine'] )) {
	$_GET['showByLine'] == 'true' ? $showByLine = true : $showByLine =  false;
}

if( isset( $_GET['showProductTitle'] ))  {
	$_GET['showProductTitle'] == 'true' ? $showProductTitle = true : $showProductTitle = false;
}

if( isset( $_GET['showProductPrice'] )) {
	$_GET['showProductPrice'] == 'true' ? $showProductPrice = true : $showProductPrice = false;
}

// Standardize values to booleans if they are set as strings

if( isset($useCaching) && $useCaching != 1 && $useCaching != 'true' ) $useCaching = false;
if( isset($useCaching) && $useCaching == 'true' ) $useCaching = true;

// use analytics is a special case because we use the value as a string literal in javascript
if( isset($useAnalytics) && $useAnalytics != 1 && $useAnalytics != 'true' ) $useAnalytics = 'false';
if( isset($useAnalytics) && $useAnalytics == 'true' ) $useAnalytics = 'true';

if( isset($showPagination) && $showPagination != 1 && $showPagination != 'true' ) $showPagination = false;
if( isset($showPagination) && $showPagination == 'true' ) $showPagination = true;

if( isset($showSorting) && $showSorting != 1 && $showSorting != 'true' ) $showSorting = false;
if( isset($showSorting) && $showSorting == 'true' ) $showSorting = true;

if( isset($showProductDescription) && $showProductDescription != 1 && $showProductDescription != 'true' ) $showProductDescription = false;
if( isset($showProductDescription) && $showProductDescription == 'true' ) $showProductDescription = true;

if( isset($showByLine) && $showByLine != 1 && $showByLine != 'true' ) $showByLine = false;
if( isset($showByLine) && $showByLine == 'true' ) $showByLine = true;

if( isset($showProductTitle) && $showProductTitle != 1 && $showProductTitle != 'true' ) $showProductTitle = false;
if( isset($showProductTitle) && $showProductTitle == 'true' ) $showProductTitle = true;

if( isset($showProductPrice) && $showProductPrice != 1 && $showProductPrice != 'true' ) $showProductPrice = false;
if( isset($showProductPrice) && $showProductPrice == 'true' ) $showProductPrice = true;


if( $_GET['clean_cache'] == 'true' ) {
	// clean up
	$cache = new cacheMgr;
	$cache->clean_cache();
}

// $gridNumber lets zstore.php keep track of individual grids in a multi-grid setup
if( $gridNumber >= 1 ) {
	$gridNumber++;	
}
else {
	$gridNumber = 1;	
}

// URLS used by the Zazzle Store Builder
$poweredByZazzleButton = "http://www.zazzle.com/assets/graphics/logos/poweredByZazzle_v2.png";
$dataURLBase = $contributorHandle!="" ? 'http://feed.zazzle.com/'.$contributorHandle.'/feed' : 'http://feed.zazzle.com/feed';
$zazzleURLBase = 'http://www.zazzle.com';


// tiny, small, medium, large, huge.
switch( $gridCellSize ) {	
	case 'tiny':
		$gridCellSize = 50;
		break;	
	case 'small':
		$gridCellSize = 92;
		break;
	case 'medium':
		$gridCellSize = 152;
		break;
	case 'large':
		$gridCellSize = 210;				
		break;
	case 'huge':
		$gridCellSize = 328;
		break;
	default:
		$gridCellSize = $gridCellSize;
}

$gridCellWidth = $gridCellSize + 6;
$gridCellHeight = $gridCellSize + 4;
$associateIdParam = $associateId != "" && $associateId != "YOURASSOCIATEIDHERE" ? "?rf=".$associateId : "";

?>
