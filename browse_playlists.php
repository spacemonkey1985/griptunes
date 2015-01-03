<?php

	include('connect/db_connection.php');
	
	$sql = "SELECT * FROM playlists ORDER BY Name ASC";
	
	$result = mysql_query($sql);
	
?>
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
    <div class="topbar2">
    	<div class="breadcrumbs">
        	<div class="breadcrumbs-content" style="text-align: center;">
            	<table width="540px">
                	<tr>
                    	<td><a href="add_lyrics.php"><img src="images/upload-btn-small.png" alt="Upload" border="0" /></a></td>
                        <td><a href="find_lyrics.php"><img src="images/find-btn-small.png" alt="Find" border="0" /></a></td>
                        <td><a href="browse_lyrics.php"><img src="images/browse-btn-small.png" alt="Browse" border="0" /></a></td>
                        <td><a href="browse_playlists.php"><img src="images/playlist-btn-small.png" alt="Playlist" border="0" /></a></td>
                    </tr>
                </table>
                <div style="text-align: right; width:100%; margin-top: -35px;">
                        <a href="http://www.facebook.com/pages/GRIP/130845660270865" target="_blank"><img src="images/fb-icon.png" title="Join G.R.I.P on Facebook" alt="Join G.R.I.P on Facebook" border="0" /></a>&nbsp;
                        <a href="http://twitter.com/griptime" target="_blank"><img src="images/tw-icon.png" title="Follow G.R.I.P on Twitter" alt="Follow G.R.I.P on Twitter" border="0" /></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content">
    	<div class="columns">
        	<div style="background: #000; position: relative; top: 20px; left: 60px; width: 457px; padding: 5px; height: 100%; float: left;">
            	<?php
					while($row = mysql_fetch_array($result)){
						echo ('<h2>' . $row['Name'] . '</h2>');
						
						$sql2 = "SELECT a.* FROM lyrics a LEFT JOIN lyrics_playlist b on b.SongID = a.ID WHERE b.PlaylistID = " . $row['ID'];
						
						echo ('<table width="100%" cellpadding="5">');
							echo ('<tr>');
								echo ('<td><b>song title</b></td>');
								echo ('<td><b>artiste</b></td>');
							echo ('</tr>');
							
								if(!$result2 = mysql_query($sql2)){
									echo('<tr>');
									echo('<td>No matches found.</td>');
									echo('<td></td>');
									echo('</tr>');
								}
								else{
									while($row2 = mysql_fetch_array($result2)){
										if($row2['Artist2'] != ''){
											echo('<tr>');
											echo('<td><a href="view_lyrics.php?id=' . $row2['ID'] . '">' . $row2['Song'] . '</a></td>');
											echo('<td><a href="find_lyrics.php?field=artist&find=' . urlencode($row2['Artist']) . '">' . $row2['Artist'] . ' ft. ' . $row2['Artist2'] . '</a></td>');
											echo('</tr>');
										}
										else{
											echo('<tr>');
											echo('<td><a href="view_lyrics.php?id=' . $row2['ID'] . '">' . $row2['Song'] . '</a></td>');
											echo('<td><a href="find_lyrics.php?field=artist&find=' . urlencode($row2['Artist']) . '">' . $row2['Artist'] . '</a></td>');
											echo('</tr>');
										}
									}
								}
						echo('</table>');
					}
					
					mysql_close($conn);
				?>
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
