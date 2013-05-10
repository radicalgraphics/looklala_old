<?php
include('dbcon.php');
include('tcolor.php');

//$colors=tcolor(3);

printf($colors);
echo "<br>";

$query=("SELECT * FROM lala_available_colors_per_design WHERE lala_camisetas_id = 3");
	$result=mysql_query($query);


	$i=1;
	echo '<font face="Trebuchet MS, Verdana, Arial" size="2" color="#9e948d">';
	while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
		printf("%s <strong>Name:</strong> <font color='#33AABB'> %s </font><strong>email:</strong> <font color='#33AABB'> %s </font> <strong>login:</strong> <font color='#33AABB'> %s </font> <strong>pass:</strong> <font color='#33AABB'> %s </font> <strong>gender:</strong> <font color='#33AABB'> %s </font> <strong>birthyear:</strong> <font color='#33AABB'> %s </font> <strong>birthdayseason:</strong> <font color='#33AABB'> %s </font> <strong>surname:</strong> <font color='#33AABB'> %s </font> <strong>country:</strong> <font color='#33AABB'> %s </font><br>", $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9]);
		$i++;  
	}
	echo '</font>';



?>