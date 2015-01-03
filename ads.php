<?php

	include('connect/db_connection.php');
	
	$sql = "SELECT * FROM ads";
	
	$result = mysql_query($sql);
	
	while($row = mysql_fetch_array($result)){
		echo ($row['Ad'] . '<br /><br />');
	}
	
	mysql_close($conn);
?>