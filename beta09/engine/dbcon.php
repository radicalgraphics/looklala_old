<?php

///  Conexion a basededatos de brinkster
////////////////////////////////////////////
/// (c) 2008 Radical Graphics Studios


$con = mysql_connect("mysql5.brinkster.com","jmgomezdelara","ksironline.com");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("jmgomezdelara", $con);


?>