<?php

	session_start();
	
	if(isset($_SESSION['loggedIn'])){
		if($_SESSION['loggedIn'] == '0'){
			header('Location: index.php');
		}
	}
	else{
		//header('Location: index.php');
	}
	
	include('../connect/db_connection.php');
	
	if(isset($_GET['ad'])){
		$sql = "DELETE FROM ads WHERE ID ='" . $_GET['ad'] . "'";
		mysql_query($sql);
		
		//header('Location: ads.php');
	}
	
	if(isset($_GET['playlist'])){
		$sql = "DELETE FROM lyrics_playlist WHERE PlaylistID ='" . $_GET['playlist'] . "'";
		mysql_query($sql);
		
		$sql = "DELETE FROM playlists WHERE ID ='" . $_GET['playlist'] . "'";
		mysql_query($sql);
		
		//header('Location: playlist.php');
	}
	
	if(isset($_GET['quote'])){
		$sql = "DELETE FROM quotes WHERE ID ='" . $_GET['quote'] . "'";
		mysql_query($sql);
		
		//header('Location: quotes.php');
	}
	
	if(isset($_GET['lyric'])){
		$sql = "DELETE FROM lyrics_playlist WHERE SongID ='" . $_GET['lyric'] . "'";
		mysql_query($sql);
		
		$sql = "DELETE FROM lyrics WHERE ID ='" . $_GET['lyric'] . "'";
		mysql_query($sql);
		
		//header('Location: lyrics.php');
	}

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
            	<h2>completed</h2>
				these changes have been made sucessfully! <a href="lyrics.php">back to lyrics page</a>
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