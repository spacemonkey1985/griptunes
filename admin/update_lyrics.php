<?php

	include('../connect/db_connection.php');
	
	if(isset($_POST['name'])){
		$sql = "UPDATE lyrics SET Originator = '" . $_POST['name'] . "', Email = '" . $_POST['email'] . "', Song = '" . $_POST['title'] . "', Artist = '" . $_POST['artist'] . "', Artist2 = '" . $_POST['artist2'] . "', Album = '" . $_POST['album'] . "', Lyrics = '" . $_POST['lyrics'] . "', YouTube = '" . $_POST['youtube'] . "', DateTimeStamp = CURDATE() WHERE ID = '" . $_POST['lyricid'] . "'";
		
		mysql_query($sql);
	}
	mysql_close($conn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>G.R.I.P</title>
<link type="text/css" href="../stylesheets/common.css" rel="stylesheet" />
</head>
<body>
    <div class="header">
    	<div class="header-content">
            <div class="menu">
            	<ul>
                	<li><a href="lyrics.php">LYRICS</a></li>
                    <li><a href="playlist.php">PLAYLISTS</a></li>
                    <li><a href="quotes.php">QUOTES</a></li>
                    <li><a href="ads.php">ADS</a></li>
                </ul>
            </div>
            <div style="position: absolute; left: 40px;">
            	<a href="../index.php"><img src="../images/logo.png" alt="G.R.I.P" border="0" /></a>
            </div>
        </div>
    </div>
    <div class="topbar2">
    	<div class="breadcrumbs">
        	<div class="breadcrumbs-content" style="text-align: center;">
            </div>
        </div>
    </div>
    
    <div class="content">
    	<div class="columns">
        	<div style="background: #000; position: relative; top: 20px; left: 60px; width: 457px; padding: 5px; height: 100%; float: left;">
            	<h2>thank you</h2>
				these lyrics have been updated sucessfully! view your changes <a href="../view_lyrics.php?id=<?php echo $_POST['lyricid'] ?>">here</a>
            </div>
            <div style="background: #000; position: relative; top: 20px; right: 140px; width: 260px; padding: 5px; height: 100%; float: right">
            </div>
        </div>
    </div>
    <div class="footer">
    	<div class="footer-content">
            <br /><br /><br /><br />
            <table align="center">
                <tr>
                    <td>
                        <a href="contact.php">contact</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="legal.php">privacy policy</a><br />
                        &copy;2010 g.r.i.p. All rights reserved
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
