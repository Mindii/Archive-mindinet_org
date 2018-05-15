<div id="bar">
<style>
    #bar {
		background-color: white;
		background-image: linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.7));
		border-bottom-left-radius: 7px;
		border-bottom-right-radius: 7px;
		background-repeat: repeat;
		box-shadow: 1px 1px 7px #000000;
		width: 900px;
		height: 18px;
		margin-left: -450px;
		left: 50%;
		top: 0;
		z-index: 10;
		position: fixed;
	}

	#barinfo {
		position: absolute;
		vertical-align: middle;
		right: -1px;
		bottom: -3px;
		font-family: visit;
		font-size: 10px;
		color: rgba(0, 0, 0, 0.58);
	}

	/* Nappulat */
	#white{
		color:white;
	}
	
	#Button{

	}
	
	#Button img:hover{
		opacity: 0.4;
	}
	
	#bpos{
	top: 0px;
	position: fixed;
	}
	
	#bpos img:hover{
	opacity: 0.8;
	}
	
	#buttons{
		margin-left: 30px;
	}
	
    </style>
	<?php 
	echo "<a href='..$folder/' id='bpos' title='Index'> <img src='https://leo.mindinet.org/data/image/b_l.png' width='31' height='18'/></a>";
	
	echo "<div id='buttons'>";
	if ($imagebutton == 'on') { echo "<a href='..$folder/gallery' id='Button' title='Images'> <img src='https://leo.mindinet.org/data/image/b/i.png' width='45' height='22'/></a>"; }
	if ($linuxbutton == 'on') { echo "<a href='..$folder/linux' id='Button' title='Linux Tips'> <img src='https://leo.mindinet.org/data/image/b/d.png' width='45' height='22'/></a>"; } 
	if ($livebutton == 'on') { echo "<a href='..$folder/live' id='Button' title='Live'> <img src='https://leo.mindinet.org/data/image/b/l.png' width='45' height='22'/></a>"; } 
	if ($gamebutton == 'on') { echo "<a href='..$folder/games' id='Button' title='Files'> <img src='https://leo.mindinet.org/data/image/b/g.png' width='45' height='22'/></a>"; } 
	if ($filebutton == 'on') { echo "<a href='..$folder/files' id='Button' title='Files'> <img src='https://leo.mindinet.org/data/image/b/f.png' width='45' height='22'/></a>"; } 
	if ($musicbutton == 'on') { echo "<a href='..$folder/music' id='Button' title='Music'> <img src='https://leo.mindinet.org/data/image/b/m.png' width='45' height='22'/></a>"; }
	if ($guidebutton == 'on') { echo "<a href='..$folder/media' id='Button' title='Media Calendar'> <img src='https://leo.mindinet.org/data/image/b/guide.png' width='45' height='22'/></a>"; }
	if ($virpibutton == 'on') { echo "<a href='..$folder/virpi' id='Button' title='Virpi'> <img src='https://leo.mindinet.org/data/image/b/virpi.png' width='45' height='22'/></a>"; }
	if ($aboutbutton == 'on') { echo "<a href='..$folder/about' id='Button' title='About'> <img src='https://leo.mindinet.org/data/image/b/h.png' width='45' height='22'/></a>"; }
	echo "</div><font id='barinfo'>";
	//echo "<img src=https://leo.mindinet.org/data/image/icons/save.png> $Files ";
	//echo "<img src=https://leo.mindinet.org/data/image/icons/photo.png> 0 ";
	//	Articles
	//echo "<img src=https://leo.mindinet.org/data/image/icons/document.png> $ArticleCount ";
	
	
	// User Check Start
		/*$cookie_text = 'We welcome you freely,';
		if (!isset($_COOKIE["User"])) { echo ''.$cookie_text.' outlander. '; }
		else { echo ''.$cookie_text.' '.$_COOKIE["User"].'! '; }
		*/
	// User Check End
	
	//echo "<a href='..$folder/admin' title='Admin'><img id='Button' src='https://leo.mindinet.org/data/image/icons/admin.png' width='22' height='22'></a>";
	//echo "<a href='..$folder/login' title='Login'><img id='Button' src='https://leo.mindinet.org/data/image/icons/login.png' width='22' height='22'></a>";
	//echo "<a href='..$folder/data/rss.xml' title='Rss Feed' target='_blank'><img id='Button' src='https://leo.mindinet.org/data/image/icons/rss.png' width='22' height='22'></a>";
	?>
</font>
</div>