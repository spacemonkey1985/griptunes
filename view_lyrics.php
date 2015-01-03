<?php

	include('connect/db_connection.php');
	
	if(isset($_GET['id'])){
		$sql = "SELECT * FROM lyrics WHERE ID = " . $_GET['id'];
	
		if(!$result = mysql_query($sql)){
			echo mysql_error;
		}
		else{
			while($row = mysql_fetch_array($result)){
				$name = $row['Originator'];
				$title = $row['Song'];
				$artist = $row['Artist'];
				$artist2 = $row['Artist2'];
				$lyrics = $row['Lyrics'];
				$album = $row['Album'];
				$youtube = $row['YouTube'];
			}
		}	
	}
	mysql_close($conn);
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
        	<div style="background: #000; position: relative; top: 20px; left: 60px; width: 645px; padding: 5px; height: 100%; float: left">
            	<h2><?php echo($title); ?></h2>
				by <?php echo($artist); if($artist2 != ''){echo(' ft. ' . $artist2);} ?><br />
                from the album <?php echo($album); ?><br /><br />
                <?php echo($youtube); ?></a><br /><br />
                <br />
				<br />
				<p><?php echo(nl2br($lyrics)); ?></p><br /><br />
				shared by <?php echo($name); ?><br /><br />
				<div style="text-align: right;">
                	<a href="javascript:history.go(-1);">back to search results</a>
                </div>
            </div>
            <div style="background: #000; position: relative; top: 20px; right: 60px; width: 160px; padding: 5px; height: 100%; float: right">
            	<h2>options</h2>
               	<a href="edit_lyrics.php?id=<?php echo($_GET['id']); ?>"><img src="images/edit-icon-small.png" alt="Edit" border="0" /></a>&nbsp;&nbsp;<a href="edit_lyrics.php?id=<?php echo($_GET['id']); ?>">edit</a></li><br /><br />
                <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.griptime.com/view_lyrics.php?id=<?php echo($_GET['id']); ?>&%2F&t=Check these lyrcis out on grip.com%26s+website" target="_blank"><img src="images/fb-icon-small.png" alt="Facebook" border="0" /></a>&nbsp;&nbsp;<a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.griptime.com/view_lyrics.php?id=<?php echo($_GET['id']); ?>&%2F&t=Check these lyrcis out on grip.com%26s+website" target="_blank">share on facebook</a><br /><br />
                <a href="http://twitter.com/home?status=Check these lyrics out on griptime.com http://www.griptime.com/view_lyrics.php?id=<?php echo($_GET['id']); ?>" target="_blank"><img src="images/tw-icon-small.png" alt="Twitter" border="0" /></a>&nbsp;&nbsp;<a href="http://twitter.com/home?status=Check these lyrics out on griptime.com http://www.griptime.com/view_lyrics.php?id=<?php echo($_GET['id']); ?>" target="_blank">share on twitter</a><br /><br />
                <a href="email_lyrics.php?subject=G.R.I.P Lyrics&body=<?php echo(nl2br('Check out these lyrics on www.griptime.com http://www.griptime.com/view_lyrics.php?id=' . $_GET['id'])); ?>"><img src="images/email-icon-small.png" alt="Email" border="0" /></a>&nbsp;&nbsp;<a href="email_lyrics.php?subject=G.R.I.P Lyrics&body=<?php echo(nl2br('Check out these lyrics on www.grip.com http://www.griptime.com/view_lyrics.php?id=' . $_GET['id'])); ?>">share by email</a>
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
