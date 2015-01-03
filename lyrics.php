<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>G.R.I.P</title>
<link type="text/css" href="stylesheets/common.css" rel="stylesheet" />
</head>
<body>
    <div class="header">
    	<div class="header-content">
            <div class="menu">
            	<ul>
                	<li><a href="index.php">HOME</a></li>
                    <li><a href="lyrics.php">LYRICS</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                </ul>
            </div>
            <div style="position: absolute; left: 40px;">
            	<a href="index.php"><img src="images/logo.png" alt="G.R.I.P" border="0" /></a>
            </div>
        </div>
    </div>
    <div class="topbar">
    	<div class="topbar-content">
        	<div style="position: absolute; top: 20px; left: 20px;">
				<img src="images/quote.png" alt="Quote" />        
            </div>
            <div style="position: absolute; top: 130px;">
            	<table width="877">
                	<tr>
                    	<td><img src="images/pic01.png" alt="Portrait" border="0" /></td>
                        <td><img src="images/pic02.png" alt="Portrait" border="0" /></td>
                        <td><img src="images/pic03.png" alt="Portrait" border="0" /></td>
                        <td><img src="images/pic04.png" alt="Portrait" border="0" /></td>
                        <td><img src="images/pic05.png" alt="Portrait" border="0" /></td>
                        <td><img src="images/pic06.png" alt="Portrait" border="0" /></td>
                        <td><img src="images/pic07.png" alt="Portrait" border="0" /></td>
                        <td><img src="images/pic08.png" alt="Portrait" border="0" /></td>
                        <td><img src="images/pic09.png" alt="Portrait" border="0" /></td>
                    </tr>
                </table>
				<table width="877">
                	<tr>
                    	<td><a href="add_lyrics.php"><img src="images/upload-btn.png" alt="Upload" border="0" /></a></td>
                        <td><a href="find_lyrics.php"><img src="images/find-btn.png" alt="Find" border="0" /></a></td>
                        <td><a href="browse_lyrics.php"><img src="images/browse-btn.png" alt="Browse" border="0" /></a></td>
                        <td><a href="browse_playlists.php"><img src="images/playlist-btn.png" alt="Playlist" border="0" /></a></td>
                    	<td style="vertical-align:bottom;">
                        	<a href="http://www.facebook.com/pages/GRIP/130845660270865" target="_blank"><img src="images/fb-icon.png" title="Join G.R.I.P on Facebook" alt="Join G.R.I.P on Facebook" border="0" /></a>&nbsp;
                       		<a href="http://twitter.com/griptime" target="_blank"><img src="images/tw-icon.png" title="Follow G.R.I.P on Twitter" alt="Follow G.R.I.P on Twitter" border="0" /></a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
    <div class="content">
    	<div class="columns">
        	<div style="background: #000; position: relative; top: 20px; left: 60px; width: 457px; padding: 5px; height: 100%; float: left;">
            	<h2>quick find</h2>
				<form action="find_lyrics.php" method="post">
                	<input type="text" name="find" id="find" size="35" />&nbsp;<input type="submit" value="Search" />
                    <input type="hidden" name="field" value="all" />
                </form>
                <br /><br /><br /><br />
                <h2>playlists</h2>
                <ul>
                	<?php include('playlists.php'); ?>
                </ul>
                <h2>most viewed</h2>
                <ul>
                	<?php include('mostviewed.php'); ?>
                </ul>
                <h2>recently added</h2>
                <ul>
                	<?php include('recentlyadded.php'); ?>
                </ul>
            </div>
            <div style="background: #000; position: relative; top: 20px; right: 140px; width: 260px; padding: 5px; height: 100%; float: right;">
            	<?php include('ads.php'); ?>
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
