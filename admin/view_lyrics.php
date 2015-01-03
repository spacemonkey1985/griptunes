<?php

	include('../connect/db_connection.php');
	
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
				$active = $row['Active'];
				$id = $row['ID'];
				$youtube = $row['YouTube'];
			}
		}	
	}
	
	if(isset($_GET['editid'])){
		$sql = "SELECT * FROM lyric_edits WHERE ID = " . $_GET['editid'];
	
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
				$active = $row['Active'];
				$id = $row['LyricID'];
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
        	<div style="background: #000; position: relative; top: 20px; left: 60px; width: 640px; padding: 5px; height: 100%; float: left;">
            	<h2><?php echo($title); ?></h2>
				by <?php echo($artist); if($artist2 != ''){echo(' ft. ' . $artist2);} ?><br />
                from the album <?php echo($album); ?><br /><br />
                <?php echo($youtube); ?><br /><br />
                <br />
				<br />
				<p><?php echo(nl2br($lyrics)); ?></p><br /><br />
				shared by <?php echo($name); ?><br /><br />
				<div style="text-align: right;">
                	<a href="javascript:history.go(-1);">back to search results</a>
                </div>
            </div>
            <div style="background: #000; position: relative; top: 20px; right: 60px; width: 160px; padding: 5px; height: 100%; float: right;">
            	<h2>options</h2>
                <?php
					if(ord($active)){
						echo('<a href="enable_lyrics.php?id=' . $id . '&enable=0" ><img src="../images/disable-icon-small.png" alt="Hide" border="0" /></a>');
						echo('<a href="enable_lyrics.php?id=' . $id . '&enable=0" >hide lyrics</a>');
					}
					else{
						echo('<a href="enable_lyrics.php?id=' . $id . '&enable=1" ><img src="../images/enable-icon-small.png" alt="Show" border="0" /></a>');
						echo('<a href="enable_lyrics.php?id=' . $id . '&enable=1" >show lyrics</a>');
					}
				
				?><br /><br />
               	<a href="edit_lyrics.php?id=<?php echo($id); ?>"><img src="../images/edit-icon-small.png" alt="Edit" border="0" /></a>&nbsp;&nbsp;<a href="edit_lyrics.php?id=<?php echo($id); ?>">edit</a><br /><br />
                <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fhttp://www.griptime.com/view.php?id=<?php echo($_GET['id']); ?>%2F&t=Check these lyrcis out on grip.com%26s+website" target="_blank"><img src="../images/fb-icon-small.png" alt="Facebook" border="0" /></a>&nbsp;&nbsp;<a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fhttp://www.griptime.com/view.php?id=<?php echo($_GET['id']); ?>%2F&t=Check these lyrcis out on grip.com%26s+website" target="_blank">share on facebook</a><br /><br />
                <a href="http://twitter.com/home?status=Check these lyrics out on griptime.com http://www.griptime.com/view.php?id=<?php echo($_GET['id']); ?>" target="_blank"><img src="../images/tw-icon-small.png" alt="Twitter" border="0" /></a>&nbsp;&nbsp;<a href="http://twitter.com/home?status=Check these lyrics out on griptime.com http://www.griptime.com/view.php?id=<?php echo($_GET['id']); ?>" target="_blank">share on twitter</a><br /><br />
                <a href="../email_lyrics.php?subject=G.R.I.P Lyrics&body=<?php echo(nl2br('Check out these lyrics on www.grip.com http://www.griptime.com/view_lyrics.php?id=' . $_GET['id'])); ?>"><img src="../images/email-icon-small.png" alt="Email" border="0" /></a>&nbsp;&nbsp;<a href="../email_lyrics.php?subject=G.R.I.P Lyrics&body=<?php echo(nl2br('Check out these lyrics on www.grip.com http://www.griptime.com/view_lyrics.php?id=' . $_GET['id'])); ?>">share by email</a>
                <br /><br />
                <a href='delete.php?lyric=<?php echo($_GET['id']); ?>'><img src='../images/delete-icon.png' alt='Remove' border='0' /></a>&nbsp;&nbsp;<a href='delete.php?lyric=<?php echo($_GET['id']); ?>'>remove lyric</a>
                <br /><br />
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
