<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<LINK REL="SHORTCUT ICON" HREF="/img/style/logo.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Media</title>
<?php include $_SERVER['DOCUMENT_ROOT'].'/resources/include.php';?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/resources/header.php';?>
    <div id="spacer"></div>
<?php 
include $_SERVER['DOCUMENT_ROOT'].'/media/archive/resources/sidebar.php';
?>
      <div id="sermon-video">
					<p id="player">
						<a href="http://www.macromedia.com/go/getflashplayer">Get Flash</a> to see this player.
					</p>
					<script type="text/javascript">
					//<![CDATA[
						var so = new SWFObject('/media/resources/mediaplayer.swf', 'player', '620', '367', '9');
						so.addVariable("file", '/media/videocasts/2011/03-plainjames/05-tamingthetongue/Plain_James_5_Sat.flv');
						so.addParam("allowfullscreen", "true");
						so.addVariable("displayheight", "349");
						so.addVariable("autostart", "true");
						so.addVariable("repeat", "false");
						so.addVariable("image", '');
						so.addVariable("bufferlength", "5");
						so.write('player');
					//]]>
					</script>
					</div>
					
<div id="page_content">
<?php include $_SERVER['DOCUMENT_ROOT'].'/media/videocasts/2011/03-plainjames/description.php';?>
</div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/resources/footer.php';?>
</body>
</html>