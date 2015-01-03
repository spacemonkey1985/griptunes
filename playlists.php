<?php

	include('connect/db_connection.php');
	
	$sql = "SELECT * FROM playlists ORDER BY Name ASC";
	
	$result = mysql_query($sql);
	
	while($row = mysql_fetch_array($result)){
		echo ('<li><a href=find_lyrics.php?field=playlist&find=' . $row['Name'] . '>' . $row['Name'] . '</a></li>');
	}
	
	mysql_close($conn);
?>