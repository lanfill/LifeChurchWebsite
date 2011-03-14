<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<LINK REL="SHORTCUT ICON" HREF="/img/style/logo.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Special Videos</title>
<?php include $_SERVER['DOCUMENT_ROOT'].'/resources/include.php';?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/resources/header.php';?>
    <div id="spacer"></div>
    <div id="content">
      <div id="page_header"><img src="img/page_header.jpg"></div>
      <div id="sidebar">
	      <div id="sidebar_content">
	      	<h2>MEDIA</h2><hr>
	      	<p>Watch the latest sermon video or subscribe to the official Life Church podcast</p><hr>
	      	<a href="http://itunes.apple.com/podcast/life-church-germantown/id272536452"><img src="img/itunes.png"> iTunes Podcast</a><hr>
	      	<a href="http://lcgtonline.com/media/podcasts/podcast.xml"><img src="img/rss.png"> RSS Feed</a><hr>
	      </div>
      </div>      
      <div id="sermon-video">
					<p id="player">
						<a href="http://www.macromedia.com/go/getflashplayer">Get Flash</a> to see this player.
					</p>
					<script type="text/javascript">
					//<![CDATA[
						var so = new SWFObject('/media/resources/mediaplayer.swf', 'player', '620', '367', '9');
						so.addVariable("file", '/media/videocasts/2010/04-flannelgraphjesus/12-why/2010.08.21-22_Baptisms.flv');
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
					</div>
    
<?php include $_SERVER['DOCUMENT_ROOT'].'/resources/footer.php';?>
</body>
</html>