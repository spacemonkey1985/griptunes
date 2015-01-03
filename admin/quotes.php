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
	
	if(isset($_POST['quote'])){
		$sql = "INSERT INTO quotes(Quote, Artist) VALUES ('" . $_POST['quote'] . "', '" . $_POST['artist'] . "')";
		mysql_query($sql);
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
            <div style="background: #000; position: relative; top: 20px; left: 60px; width: 820px; padding: 5px; height: 100%; float: left">
                <h2>add quote</h2>
                <form method="post" action="quotes.php">
                <table cellpadding="5">
                    <tr>
                        <td style="vertical-align: top;">quote</td>
                        <td>
                            <textarea name="quote" cols="60" rows="5">
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>artiste</td>
                        <td>
                            <input type="text" name="artist" size="30" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">
                            <br />
                            <input type="submit" value="add" style="width: 60px;" />
                        </td>
                    </tr>
                </table>	
                </form>
                <br /><br />
            	<h2>quotes</h2>
                <form method="post" action="quotes.php" name="list">
                <table cellpadding="5">
                	<?php 
						$sql = "SELECT * FROM quotes";
			
						if(!$result = mysql_query($sql)){
							echo mysql_error;
						}
						else{
							while($row = mysql_fetch_array($result)){
								echo ("<tr><td>" . $row['Artist'] . " - " . $row['Quote'] . "</td><td><a href='delete.php?quote=" . $row['ID'] . "'><img src='../images/delete-icon.png' alt='Remove' border='0' /></a></td></tr>");
								echo ("<input type='hidden' name='remove' value='" . $row['ID'] . "' />");
							}
						}
					?>
                </table>	
                </form>
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
