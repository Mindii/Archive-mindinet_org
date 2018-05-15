<?php
if (!isset($_COOKIE["Logo"])) {
		include "data/logo.php";
		//setcookie("Logo", $logorand, time()+180);
		setcookie("Logo", $logorand, time()+180, NULL, NULL, NULL, TRUE);
	}
else { $logorand = $_COOKIE["Logo"]; }

//$tinyurl = $_GET['t'];
//if ($tinyurl == rss) { header( 'Location: data/rss.xml' ); }
//elseif ($tinyurl == log) { include 'data/log.php'; exit(); }

//if rss enabled insert this to header
//<link rel="alternate" type="application/rss+xml" title="RSS" href="/index.php?t=rss" />
?>

<html>
<head>
	<?php include "data/config.php"; echo "<title>$title</title>"; ?>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name=viewport content="width=device-width, initial-scale=0.3">
	<link rel="shortcut icon" href="data/image/favicon.ico" />
</head>

<body>
<div id="background"></div>

<!--TinyBar-->
<?php
	if ($tbar == 1){
		include "data/tinybar.php";
	}
?>

 <?php 
	include 'data/whatisbrowser.php';
	if (stripos($browser, "Internet Explorer") !== false) { echo '<div id="Browser">Detecting IE: Just dont, For optimal experience use firefox or somthing..</div>'; }
?>
 
<!--LogoArea-->
<?php
	//include "data/logo.php";
	echo"<style>#Logo{background:url($logorand);</style>";
	include "data/background.php";
	
?>
<div id="Logo">
	<font id="logotext"><?php echo "$Versiolong"; ?></font>
	<div id="News"><div id="Newstext"><?php echo "$tinynote"; ?></div></div>
	<?php // include 'data/player.php'; ?>
	<img src="<?php 
	if ($smoke == $null) { $smoke = 'empty.png'; }
	echo "data/image/$smoke";
	?>" width="820" height="170"/>
</div>

<link rel="stylesheet" type="text/css" href="data/baka.css">
<!--TinyNote-->
<div id="Hideshadow"></div>

<!--Content-->
<div id="title">

<font id="content">
<?php
$tinyurl = $_GET['t'];
if ($tinyurl == index) { include 'data/articlesv2.php'; }
elseif ($tinyurl == $null) { include 'data/articlesv2.php'; }
elseif ($tinyurl == cookie) { include 'data/tiny_chocolate_cookie.php'; }
elseif ($tinyurl == linux) { include 'data/linux.php'; }
elseif ($tinyurl == tv) { include 'data/tv.php'; }
//elseif ($tinyurl == load) { include 'data/admin/load.php'; }
//elseif ($tinyurl == admin) { include 'data/administrator_panel.php'; }
//elseif ($tinyurl == article) { include 'data/article.php'; }
//elseif ($tinyurl == release) { include 'data/releaselog.php'; }
elseif ($tinyurl == media) { include 'data/media.php'; }
//elseif ($tinyurl == files) { include 'data/files.php'; }
//elseif ($tinyurl == virpi) { include 'data/virpi2.php'; }
//elseif ($tinyurl == token) { include 'data/token.php'; }
//elseif ($tinyurl == live) { include 'data/live.php'; }
//elseif ($tinyurl == rssup) { include 'data/rsswriter.php'; }
//elseif ($tinyurl == login) { include 'data/login.php'; }
//elseif ($tinyurl == galleryup) { include 'data/thumb.php'; }
//elseif ($tinyurl == gallery) { include 'data/gallery.php'; }
elseif ($tinyurl == about) { include 'data/about.php'; }
elseif ($tinyurl == forbidder) { echo "<br><br><img src=data/image/forbidder.png><br>"; }
else { echo "<br><br><img src=data/image/error.png><br>"; }

//include "data/visits.php";
?>

</font>
</div>

<!-- Footer style -->
<style>
#footer {
position: fixed;
z-index: 0;
width: 820px;
height: 30px;
left: 50%;
margin-left: -315px;
bottom: -5px;
}

#footerbar {
background: rgba(255, 255, 255, 1);
width: 630px;
height: 15px;
position: absolute;
z-index: -20;
box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.91);
border-top-left-radius: 3px;
border-top-right-radius: 3px;
color: #000000;
font-family: visit;
font-size: 9px;
letter-spacing: 1px;
text-align: center;
padding-top: 5px;
padding-bottom: 5px;
}

#footerbar img:hover{
  opacity: 0.6;
}

</style>

<!--footer-->
<div id="footer">
	<div id="footerbar">
	<?php echo "Designed & Created by <a href='mailto:contact@mindinet.org' target='_blank'>Mindi</a>"; ?>
	<span style="padding-left:60px"></span>
	<?php echo "<a href='http://mindinet.org/' target='_blank'><img src='/data/image/flogo.png' width='80' height='15' style='margin-bottom: -4px;'/></a>"; ?>
	<span style="padding-left:60px"></span>
	<?php echo "Licensed under a <a href='http://creativecommons.org/licenses/by-nc/4.0/' target='_blank'>CC BY NC</a>"; ?>
	</div>
	
</div>

</body>

</html>