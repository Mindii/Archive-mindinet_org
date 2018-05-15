<style>
#Showname {
padding-top: 45px;
padding-left: 10px;
text-align: center;
font-family: visit;
font-size: 20px;
color: #FF7A00;
letter-spacing: normal;
position: absolute;
}

#EPList {
width: 200px;
height: 80px;
position: absolute;
z-index: 9;
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

</style>


<?php
// Episode calender module
	include "data/config.php";
	$traktapi = file_get_contents('http://api.trakt.tv/user/calendar/shows.json/*/*');
	$trakt = json_decode($traktapi, true);
	
		$trnum = 0; // Day
		$shownum = 0; //show
		
		
		echo '<div id="EPList">';
		while($shownum < 5) {
			// Upcoming Episode Information
			$trdate = $trakt[$trnum]['date'];
			$trdate = date("d.m",strtotime("$trdate"));
			$trshow = $trakt[$trnum]['episodes'][$shownum]['show']['title'];
			$trurl = $trakt[$trnum]['episodes'][$shownum]['show']['url'];
			$trday = $trakt[$trnum]['episodes'][$shownum]['show']['air_day_utc'];
			$trimage{$shownum} = $trakt[$trnum]['episodes'][$shownum]['show']['images']['banner'];
			
			$trepi = $trakt[$trnum]['episodes'][$shownum]['episode']['number'];
			$trsea = $trakt[$trnum]['episodes'][$shownum]['episode']['season'];
			// End Episode Information
			if (empty($trshow)) { break; }
			
			echo '<style>#Calender'.$shownum.'{ border:1px solid #; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;
				box-shadow: 0px 0px 6px #414141; margin-top: 10px; width: 90px; height: 30px;
				background: url(/data/image/background.png), linear-gradient(to bottom, #979797, #000000, #000000); 
				position: absolute; margin-bottom: 25px; margin-left: '.$shownum.'00px;}</style>';
			
			echo '<style>#Calender'.$shownum.'{background:url('.$trimage{$shownum}.'); background-size: cover;}</style>';
			
			
			//echo ''.$trshow.' '.$tryear.' '.$trgenre.' <br>';
			echo '
				<div  title=" '.$trshow.' E'.$trepi.' S'.$trsea.'" id="Calender'.$shownum.'">
				</div>';
			
			// Episodes end
			$shownum++; }
			echo '<div id="Showname">New episodes</div><br>';
			echo '</div>';
?>