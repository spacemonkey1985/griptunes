<?php

	include('connect/db_connection.php');
	
	$sql = "SELECT * FROM lyrics ORDER BY Views DESC LIMIT 5";
	
	$result = mysql_query($sql);
	
	while($row = mysql_fetch_array($result)){
		echo ('<li><a href=view_lyrics.php?id=' . $row['ID'] . '>' . $row['Song'] . ' - <i>' . $row['Artist'] . '</i></a></li>');
	}
	
	mysql_close($conn);
?>