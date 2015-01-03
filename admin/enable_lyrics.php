<?php

	include('../connect/db_connection.php');
	
	if(isset($_GET['id'])){
		$sql = "UPDATE lyrics SET Active = " . $_GET['enable'] . " WHERE ID = '" . $_GET['id'] . "'";
		
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
            	<a href="index.htm"><img src="../images/logo.png" alt="G.R.I.P" border="0" /></a>
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
            	<h2>THANK YOU</h2>
				<?php
					if(isset($_GET['enable'])){
						if($_GET['enable'] == '1'){
							echo 'these lyrics have been made live! view these lyrics <a href="../view_lyrics.php?id=' . $_GET['id'] .'">here</a>';
						}
						else{
							echo 'these lyrics have been made hidden';
						}
					}
				?>
            </div>
            <div style="background: #000; position: relative; top: 20px; right: 140px; width: 260px; padding: 5px; height: 100%; float: right;">
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
