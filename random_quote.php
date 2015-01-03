<?php

	include('connect/db_connection.php');
	
	$sql = "SELECT * FROM quotes ORDER BY RAND() LIMIT 1";
	
	$result = mysql_query($sql);
	
	while($row = mysql_fetch_array($result)){
		echo ($row['Quote'] . ' - <i>' . $row['Artist'] . '</i>');
	}
	
	mysql_close($conn);
?>