<?php

	session_start();
	
	if(isset($_SESSION['loggedIn'])){
		if($_SESSION['loggedIn'] == '0'){
			header('Location: index.php');
		}
	}
	else{
		header('Location: index.php');
	}
	
	include('../connect/db_connection.php');
	
	if(isset($_GET['find'])){
		switch($_GET['field']){
			case 'title':
				$sql = "SELECT * FROM lyrics WHERE Song like '%" . $_GET['find'] . "%' ORDER BY Song ASC";
				break;
			case 'artist':
				$sql = "SELECT * FROM lyrics WHERE Artist like '%" . $_GET['find'] . "%' ORDER BY Song ASC";
				break;
			case 'lyric':
				$sql = "SELECT * FROM lyrics WHERE Lyrics like '%" . $_GET['find'] . "%' ORDER BY Song ASC";
				break;
			default:
				$sql = "SELECT * FROM lyrics WHERE Lyrics like '%" . $_GET['find'] . "%' OR Artist like '%" . $_GET['find'] . "%' OR Song like '%" . $_GET['find'] . "%' ORDER BY Song ASC";
				break;
		}
	}
	if(isset($_POST['find'])){
		switch($_POST['field']){
			case 'title':
				$sql = "SELECT * FROM lyrics WHERE Song like '%" . $_POST['find'] . "%' ORDER BY Song ASC";
				break;
			case 'artist':
				$sql = "SELECT * FROM lyrics WHERE Artist like '%" . $_POST['find'] . "%' ORDER BY Song ASC";
				break;
			case 'lyric':
				$sql = "SELECT * FROM lyrics WHERE Lyrics like '%" . $_POST['find'] . "%' ORDER BY Song ASC";
				break;
			default:
				$sql = "SELECT * FROM lyrics WHERE Lyrics like '%" . $_POST['find'] . "%' OR Artist like '%" . $_POST['find'] . "%' OR Song like '%" . $_POST['find'] . "%' ORDER BY Song ASC";
				break;
		}	
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
            	<h2>search lyrics</h2>
				<form method="post" action="lyrics.php">
                <table>
                	<tr>
                    	<td>search for</td>
                        <td>
                        	<input type="text" name="find" size="30" value="<?php if(isset($_GET['find'])){ echo($_GET['find']);} if(isset($_POST['find'])){ echo($_POST['find']);} ?>"/>&nbsp;&nbsp;in
                            <select name="field">
                            	<option value="title" <?php if($_GET['field'] == 'title'){echo('selected="selected"');} if($_POST['field'] == 'title'){echo('selected="selected"');} ?>>song titles</option>
                                <option value="artist" <?php if($_GET['field'] == 'artist'){echo('selected="selected"');} if($_POST['field'] == 'artist'){echo('selected="selected"');} ?>>artiste</option>
                                <option value="lyric" <?php if($_GET['field'] == 'lyric'){echo('selected="selected"');} if($_POST['field'] == 'lyric'){echo('selected="selected"');} ?>>lyrics</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                    	<td colspan="2" align="right">
                        	<br />
                        	<input type="submit" value="find" style="width: 60px;" />
                        </td>
                    </tr>
                </table>	
                </form>
                <br />
           		<h2>results</h2>
                <table width="100%" cellpadding="5">
                	<tr>
                    	<td><b>song title</b></td>
                        <td><b>artiste</b></td>
                    </tr>
                    <?php
						if(!$result = mysql_query($sql)){
							echo('<tr>');
							echo('<td>No matches found.</td>');
							echo('<td></td>');
							echo('</tr>');
						}
						else{
							while($row = mysql_fetch_array($result)){
								if($row['Artist2'] != ''){
									echo('<tr>');
									echo('<td><a href="view_lyrics.php?id=' . $row['ID'] . '">' . $row['Song'] . '</a></td>');
									echo('<td><a href="lyrics.php?field=artist&find=' . $row['Artist'] . '">' . $row['Artist'] . ' ft. ' . $row['Artist2'] . '</a></td>');
									echo('</tr>');
								}
								else{
									echo('<tr>');
									echo('<td><a href="view_lyrics.php?id=' . $row['ID'] . '">' . $row['Song'] . '</a></td>');
									echo('<td><a href="lyrics.php?field=artist&find=' . $row['Artist'] . '">' . $row['Artist'] . '</a></td>');
									echo('</tr>');
								}
							}
						}
							
					?>
                </table>
            </div>
            <div style="background: #000; position: relative; top: 20px; right: 140px; width: 260px; padding: 5px; float: right;">
            <h2>lyrics to be added</h2>
            <ul>
            	<?php
					$sql = 'SELECT ID, Song, Artist FROM lyrics WHERE Active = 0';
					
					if($result = mysql_query($sql)){
						while($row = mysql_fetch_array($result)){
							echo('<li>');
							echo('<a href="view_lyrics.php?id=' . $row['ID'] . '">' . $row['Song'] . ' - <i>' . $row['Artist'] . '</i></a></td>');
							echo('</li>');
						}
					}
						
				?>
            </ul>
            <h2>lyrics to be edited</h2>
            <ul>
            	<?php
					$sql = 'SELECT ID, LyricID, Song, Artist FROM lyric_edits';
					
					if($result = mysql_query($sql)){
						while($row = mysql_fetch_array($result)){
							echo('<li>');
							echo('<a href="view_lyrics.php?editid=' . $row['ID'] . '">' . $row['Song'] . ' - <i>' . $row['Artist'] . '</i></a>');
							echo('</li>');
						}
					}
						
					mysql_close($conn);
				?>
            </ul>
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
