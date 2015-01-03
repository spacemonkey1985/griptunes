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
	
	if(isset($_POST['ad'])){
		$sql = "INSERT INTO ads(Ad) VALUES ('" . $_POST['ad'] . "')";
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
            <div style="background: #000; position: absolute; top: 20px; left: 60px; width: 457px; padding: 5px; height: 250px;">
                <h2>add new ad</h2>
                <form method="post" action="ads.php">
                <table cellpadding="5">
                    <tr>
                        <td style="vertical-align: top;">ad code</td>
                        <td>
                            <textarea name="ad" cols="60" rows="5"></textarea>
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
            </div>
            <div style="background: #000; position: relative; top: 20px; left: 567px; width: 300px; padding: 5px; height: 900px;">
            	<h2>ads</h2>
                <form method="post" action="ads.php" name="list">
                <table cellpadding="5">
                	<?php 
						$sql = "SELECT * FROM ads";
			
						if(!$result = mysql_query($sql)){
							echo mysql_error;
						}
						else{
							while($row = mysql_fetch_array($result)){
								echo ("<tr><td><a href='delete.php?ad=" . $row['ID'] . "'><img src='../images/delete-icon.png' alt='Remove' border='0' /></a></td><td>" . $row['Ad'] . "</td></tr>");
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
            <table>
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
