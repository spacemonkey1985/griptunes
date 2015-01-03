<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>G.R.I.P</title>
<link type="text/css" href="stylesheets/common.css" rel="stylesheet" />
<script language="JavaScript" type="text/javascript" src="javascript/richtext.js"></script>
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
        	<div style="background: #000; position: relative; top: 20px; left: 60px; width: 560px; padding: 5px; float: left;">
            	<h2>add lyrics</h2>
				<form method="post" action="insert_lyrics.php" onSubmit="return submitForm();">
                	<table width="100%" cellpadding="5">
                    	<tr>
                        	<td>your name</td>
                            <td><input type="text" name="name" id="name" size="30" /></td>
                        </tr>
                        <tr>
                        	<td>your email</td>
                            <td><input type="text" name="email" id="email" size="30" /></td>
                        </tr>
                        <tr>
                        	<td colspan="2">
                            	<br />
                                <br />
                            </td>
                        </tr>
                        <tr>
                        	<td>song title</td>
                            <td><input type="text" name="title" id="title" size="30" /></td>
                        </tr>
                        <tr>
                        	<td>artiste</td>
                            <td><input type="text" name="artist" id="artist" size="30" /></td>
                        </tr>
                        <tr>
                        	<td>featuring</td>
                            <td><input type="text" name="artist2" id="artist2" size="30" /></td>
                        </tr>
                        <tr>
                        	<td>album</td>
                            <td><input type="text" name="album" id="album" size="30" /></td>
                        </tr>
                        <tr>
                        	<td colspan="2">
                            	lyrics	
                            </td>
                        </tr>
                        <tr>
                        	<td colspan="2">
                            	<script language="JavaScript" type="text/javascript">
								<!--
								function submitForm() {
									//make sure hidden and iframe values are in sync before submitting form
									updateRTE('lyrics'); //use this when syncing only 1 rich text editor ("rtel" is name of editor)
									//updateRTEs(); //uncomment and call this line instead if there are multiple rich text editors inside the form
									//alert("Submitted value: "+document.myform.rte1.value) //alert submitted value
									return true; //Set to false to disable form submission, for easy debugging.
								}
								//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
								initRTE("images/", "", "");
								writeRichText('lyrics', '<i>Enter lyrics into here</i>', 400, 200, true, false);
								//-->
								var RecaptchaOptions = {     
									theme : 'white' 
									};
								</script>
                            </td>
                        </tr>
                        <tr>
                        	<td colspan="2">
                            	<br />
                                <br />
                            </td>
                        </tr>
                        <tr>
                        	<td>link</td>
                            <td><input type="text" name="youtube" id="youtube" size="30" /></td>
                        </tr>
                        <tr>
                        	<td colspan="2" align="right">
                            	<input type="submit" value="Send" style="width: 80px" />
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div style="background: #000; position: relative; top: 20px; right: 160px; width: 160px; padding: 5px; float: right;">
            	<h2>request lyrics</h2>
                don't know the lyrics yourself? not to worry, simply make a request for them and maybe someone else does
                <br />
                <br />
                <form method="post" action="request_lyrics.php">
                	Song Title<br />
					<input type="text" name="title" id="title" size="20" />
                    <br />
                    <br />
                    Artist<br />
                    <input type="text" name="artist" id="artist" size="20" />
                    <br /><br />
					<div style="text-align:right;">
	                    <input type="submit" value="Request" style="width: 80px" />
                    </div>
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