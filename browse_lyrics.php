<?php

	include('connect/db_connection.php');
	
	/*if(isset($_GET['id'])){
		$sql = "SELECT DISTINCT Artist FROM lyrics WHERE ID = " . $_GET['id'];
	
		if(!$result = mysql_query($sql)){
			echo mysql_error;
		}
		else{
			while($row = mysql_fetch_array($result)){
				$name = $row['Originator'];
				$title = $row['Song'];
				$artist = $row['Artist'];
				$lyrics = $row['Lyrics'];
			}
		}	
	}
	mysql_close($conn);*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>G.R.I.P</title>
<link type="text/css" href="stylesheets/common.css" rel="stylesheet" />
<script type="text/javascript">
function showPopup(){
	var popup = document.getElementById('popup');
	popup.style.display = 'inline';
	window.location = '##';
}
function hidePopup(url){
	var popup = document.getElementById('popup');
	popup.style.display = 'none';
	window.location = '#' + url;
}
</script>
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
            	<a href="javascript:showPopup();" name="#"><img src="images/az/num.png" alt="#" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist REGEXP '^[0-9]' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="a"><img src="images/az/a.png" alt="A" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'a%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="b"><img src="images/az/b.png" alt="B" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'b%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="c"><img src="images/az/c.png" alt="C" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'c%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="d"><img src="images/az/d.png" alt="D" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'd%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="e"><img src="images/az/e.png" alt="E" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'e%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="f"><img src="images/az/f.png" alt="F" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'f%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="g"><img src="images/az/g.png" alt="G" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'g%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="h"><img src="images/az/h.png" alt="H" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'h%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="i"><img src="images/az/i.png" alt="I" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'i%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="j"><img src="images/az/j.png" alt="J" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'j%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="k"><img src="images/az/k.png" alt="K" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'k%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="l"><img src="images/az/l.png" alt="L" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'l%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="m"><img src="images/az/m.png" alt="M" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'm%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="n"><img src="images/az/n.png" alt="N" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'n%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="o"><img src="images/az/o.png" alt="O" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'o%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="p"><img src="images/az/p.png" alt="P" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'p%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="q"><img src="images/az/q.png" alt="Q" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'q%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="r"><img src="images/az/r.png" alt="R" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'r%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="s"><img src="images/az/s.png" alt="S" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 's%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="t"><img src="images/az/t.png" alt="T" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 't%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="u"><img src="images/az/u.png" alt="U" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'u%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="v"><img src="images/az/v.png" alt="V" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'v%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="w"><img src="images/az/w.png" alt="W" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'w%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="x"><img src="images/az/x.png" alt="X" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'x%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="y"><img src="images/az/y.png" alt="Y" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'y%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
                <a href="javascript:showPopup();" name="z"><img src="images/az/z.png" alt="Z" title="to jump to a letter in the alphabet click here to select the letter of you choice to jump to" border="0" /></a>
                <br /><br />
				<?php 
					$sql = "SELECT DISTINCT Artist FROM lyrics WHERE artist like 'z%' AND Active = 1 ORDER BY Artist ASC";
		
					if(!$result = mysql_query($sql)){
						echo mysql_error;
					}
					else{
						while($row = mysql_fetch_array($result)){
							echo ("<a href='find_lyrics.php?field=artist&find=" . urlencode($row['Artist']) . "'>" . $row['Artist'] . "</a><br />");
						}
					}
				?>
                <br /><br />
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
    
    <div class="popup" id="popup">
    	<div class="popup-content">
        	<table cellpadding="5">
            	<tr>
                	<td><a href="javascript:hidePopup('a');"><img src="images/az/a.png" alt="A" border="0" /></a></td>
                    <td><a href="javascript:hidePopup('b');" ><img src="images/az/b.png" alt="B" border="0" /></a></td>
                    <td><a href="javascript:hidePopup('c');"><img src="images/az/c.png" alt="C" border="0" /></a></td>
                    <td><a href="javascript:hidePopup('d');"><img src="images/az/d.png" alt="D" border="0" /></a></td>
                </tr>
                <tr>
                	<td><a href="javascript:hidePopup('e');"><img src="images/az/e.png" alt="E" border="0" /></a></td>
                    <td><a href="javascript:hidePopup('f');"><img src="images/az/f.png" alt="F" border="0" /></a></td>
                    <td><a href="javascript:hidePopup('g);"><img src="images/az/g.png" alt="G" border="0" /></a></td>
                    <td><a href="javascript:hidePopup('h');"><img src="images/az/h.png" alt="H" border="0" /></a></td>
                </tr>
                <tr>
                	<td><a href="javascript:hidePopup('i');"><img src="images/az/i.png" alt="I" border="0" /></a></td>
                    <td><a href="javascript:hidePopup('j');"><img src="images/az/j.png" alt="J" border="0" /></a></td>
                    <td><a href="javascript:hidePopup('k');"><img src="images/az/k.png" alt="K" border="0" /></a></td>
                    <td><a href="javascript:hidePopup('l');"><img src="images/az/l.png" alt="L" border="0" /></a></td>
                </tr>
                <tr>
                	<td><a href="javascript:hidePopup('m');"><img src="images/az/m.png" alt="M" border="0" /></a></td>
                    <td><a href="javascript:hidePopup('n');"><img src="images/az/n.png" alt="N" border="0" /></a></td>
                    <td><a href="javascript:hidePopup('o');"><img src="images/az/o.png" alt="O" border="0" /></a></td>
                    <td><a href="javascript:hidePopup('p');"><img src="images/az/p.png" alt="P" border="0" /></a></td>
                </tr>
                <tr>
                	<td><a href="javascript:hidePopup('q');"><img src="images/az/q.png" alt="Q" border="0" /></a></td>
                    <td><a href="javascript:hidePopup('r');"><img src="images/az/r.png" alt="R" border="0" /></a></td>
                    <td><a href="javascript:hidePopup('s');"><img src="images/az/s.png" alt="S" border="0" /></a></td>
                    <td><a href="javascript:hidePopup('t');"><img src="images/az/t.png" alt="T" border="0" /></a></td>
                </tr>
                <tr>
                	<td><a href="javascript:hidePopup('u');"><img src="images/az/u.png" alt="U" border="0" /></a></td>
                    <td><a href="javascript:hidePopup('v');"><img src="images/az/v.png" alt="V" border="0" /></a></td>
                    <td><a href="javascript:hidePopup('w');"><img src="images/az/w.png" alt="W" border="0" /></a></td>
                    <td><a href="javascript:hidePopup('x');"><img src="images/az/x.png" alt="X" border="0" /></a></td>
                </tr>
                <tr>
                	<td><a href="javascript:hidePopup('y');"><img src="images/az/y.png" alt="Y" border="0" /></a></td>
                    <td><a href="javascript:hidePopup('z');"><img src="images/az/z.png" alt="Z" border="0" /></a></td>
                    <td><a href="javascript:hidePopup('#');"><img src="images/az/num.png" alt="#" border="0" /></a></td>
                    <td></td>
                </tr>
            </table>
    	</div>
    </div>
</body>
</html>
