<link rel="stylesheet" type="text/css" href="data/module.css">

<style>
#Showname {
position: relative;
z-index: 9;
color: #383838;
font-size: 12px;
top: -10px;
font-family: Verdana, Geneva, sans-serif;
margin-top: 10px;
text-transform: uppercase;
font-weight: normal;
background: #FFF;
display: inline-block;
margin-left: -50px;
margin-top: 5px;
margin-left: -55px;
padding: 1;
padding-right: 5;
box-shadow: 0px 0px 1px #000;
text-indent: 4px;
border-top-left-radius: 5px;
}

#Showname2 {
position: absolute;
right: 5px;
text-align: right;
z-index: 9;
color: #383838;
font-size: 12px;
top: 1px;
font-family: Verdana, Geneva, sans-serif;
margin-top: 10px;
text-transform: uppercase;
font-weight: normal;
background: #FFF;
display: inline-block;
margin-left: -50px;
margin-top: 5px;
margin-left: -55px;
padding: 1;
padding-right: 5;
box-shadow: 0px 0px 1px #000;
text-indent: 4px;
border-top-right-radius: 5px;
}

#EPList {
width: 330px;
height: 20px;
position: relative;
padding-bottom: 20px;
}

#Calender a:link { 
	color: #FFFFFF; 
}

#Calender a:visited { 
	color: #FFD3A3; 
}

#Calender a:hover { 
	color: #FFD3A3; 
}

#moduleframe {
width: 350px;
height: 90px;
position: relative;
z-index: 9;
left: 30px;
top: 20px;
color: #000000;
background: #ffffff;
padding: 10px;
margin-bottom: 40px;
border-bottom-left-radius: 1px;
border-bottom-right-radius: 1px;
border-top-left-radius: 10px;
}

#moduleframe2 {
width: 350px;
height: 90px;
position: absolute;
z-index: 9;
left: 420px;
top: 20px;
color: #000000;
background: #ffffff;
padding: 10px;
margin-bottom: 30px;
border-bottom-left-radius: 1px;
border-bottom-right-radius: 1px;
border-top-right-radius: 10px;
}

.fadein { 
height:70px; width:330px; margin:0 auto;
padding: 10px; margin-top: -30; z-index: 999;
 }
 
.fadein img { 
position:absolute; left:10px; top:10px; 
width: 350px;
height: 90px;
box-shadow: 0px 0px 6px #414141;
}

#nowwatch{
border:1px solid #;
box-shadow: 0px 0px 6px #414141;
margin-top: -21px;
width: 350px;
height: 90px;
background: url(/data/image/background.png), linear-gradient(to bottom, #979797, #000000, #000000);
}

#playhalt{
margin-top: 10px;
width: 300px;
height: 1px;
}

#Artist{
padding-top: 75px;
padding-left: 6px;
text-align: left;
font-family: visit;
font-size: 16px;
color: #FFFFFF;
text-shadow: 0px 0px 2px #000;
letter-spacing: normal;
overflow: hidden;
height: 14px;
}

#Song{
top: 78px;
left: 16px;
padding-right: 5px;
text-align: left;
font-family: visit;
font-size: 10px;
color: #FFFFFF;
text-shadow: 0px 0px 2px #000;
position: absolute;
}

#album{
top: 13px;
right: 10px;
padding-right: 5px;
text-align: right;
font-family: visit;
font-size: 10px;
color: #FFFFFF;
text-shadow: 0px 0px 2px #000;
position: absolute;
}

#Status{
	padding-top: 5px;
	padding-right: 5px;
	text-align: right;
	font-family: visit;
	font-size: 10px;
	color: #FFFFFF;
	text-shadow: 0px 0px 2px #000;
}

#nowwatch a:link { color: #FFFFFF; }
#nowwatch a:visited { color: #FFD3A3; }
#nowwatch a:hover { color: #FFD3A3; }
</style>

<?php

		//############## MODULE 1

		echo "<div id='moduleframe'>";

		// Now watching variables
	$traktapi = file_get_contents('http://api.trakt.tv/user/watching.json/*/*');
	$trakt = json_decode($traktapi, true);
	$type = $trakt['type'];
	$show = $trakt['show']['title'];
	$season = $trakt['episode']['season'];
	$episode = $trakt['episode']['number'];
	$eptitle = $trakt['episode']['title'];
	$showimage = $trakt['episode']['images']['screen'];	
	
	$moviename = $trakt['movie']['title'];
	$movieyear = $trakt['movie']['year'];
	$movieimage = $trakt['movie']['images']['poster'];
	$moviegenre = $trakt['movie']['genres'][0];
	
	$movieimdb = $trakt['movie']['imdb_id'];
	$movieimdb = "<a target='_blank' href='http://www.imdb.com/title/$movieimdb'>IMDB</a>";
	$movietrailer = $trakt['movie']['trailer'];
	$movietrailer = "<a target='_blank' href='$movietrailer'>Trailer</a>";
	$movietrakt = $trakt['movie']['url'];
	$movietrakt = "<a target='_blank' href='$movietrakt'>Trakt</a>";	
	
	// Now watching status
		if (!empty($show)) { $NWStatus = 'Now Watching'; }
		elseif (!empty($moviename)) { $NWStatus = 'Now Watching'; }
		else { $NWStatus = 'Pause'; }
		
	if (strlen($showimage) > 5) { echo '<style>#nowwatch{background:url('.$showimage.') 0 -20; background-size: cover;}</style>'; }
	if (strlen($movieimage) > 5) { echo '<style>#nowwatch{background:url('.$movieimage.') 0; background-size: cover;}</style>'; }
	
	//Add zero for episode and season if under 10
		if ($season < 10) { $season = '0'.$season.''; }
		if ($episode < 10) { $episode = '0'.$episode.''; }
		
	echo '<div id="Showname"><font color="#FF7A00">N</font>ow Watching</div><br>';
	
	// Texts
	$bbtext = '
	<div id="nowwatch">
		<div id="Artist">'.$show.'</div><br>
		<div id="Song">'.$eptitle.'</div><br>
		<div id="Album">S'.$season.'E'.$episode.'</div><br>
	</div>';
	
	$bbtextmovie = '
	<div id="nowwatch">
		<div id="Artist">'.$moviename.' ('.$movieyear.')</div><br>
		<div id="Song">'.$moviegenre.'</div><br>
		<div id="Album">'.$movietrakt.'/'.$movieimdb.'/'.$movietrailer.'</div><br>
	</div>';	
	
	$bbtextno = '
	<div id="playhalt">
		<div id="Artist"></div><br>
		<div id="Song"></div><br>
		<div id="Album"></div><br>
	</div>';

	if (!empty($show)) {
		echo "
		<font id='module_text'>$bbtext</font>
		"; }
	
	elseif ($type == movie) {
		echo "
		<font id='module_text'>$bbtextmovie</font>
		"; }
	
	else {
		echo "
		<font id='module_text'>$bbtextno</font>
		"; }
		
		echo "</div>";

			//############## MODULE 2
			echo "<div id='moduleframe2'>";
			echo '<div id="Showname2"><font color="#FF7A00">N</font>ew Episodes Today</div><br>';
		
			
?>


		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script>
			$(function(){
			$('.fadein img:gt(0)').hide();
				setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 5000);
			});
		</script>

<?php
// Episode calender module
	$traktapi = file_get_contents('http://api.trakt.tv/user/calendar/shows.json/*/*');
	$trakt = json_decode($traktapi, true);
	
		$trnum = 0; // Day
		$shownum = 0; //show
		
		
			echo "<div class='fadein'>";
		while($shownum < 5) {
			// Upcoming Episode Information
			$trdate = $trakt[$trnum]['date'];
			$trdate = date("d.m",strtotime("$trdate"));
			$trshow = $trakt[$trnum]['episodes'][$shownum]['show']['title'];
			$trday = $trakt[$trnum]['episodes'][$shownum]['show']['air_day_utc'];
			$trimage{$shownum} = $trakt[$trnum]['episodes'][$shownum]['show']['images']['banner'];
			// if there is only 1 show slide 1 with it
			if ($shownum <= 1) {
				if (empty($trshow)) { 
					echo '<img src="./data/image/slide/1.png">';
					$shownum = 5;
				}
			}
			
			// if there is episode show it
			if (!empty($trshow)) { 
				echo '<img src='.$trimage{$shownum}.'>';
			}
			
			// Episodes end
			$shownum++; }
			echo "</div></div>";
?>