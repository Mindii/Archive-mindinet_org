<?php
$shows="0";
$Tinysqcon=mysqli_connect("","","","");
$TGuideSQ = mysqli_query($Tinysqcon,"SELECT * FROM TinyGuide");
$TGuideRows = $TGuideSQ->num_rows;

//TinyGuide Title
if ($TGUserDate == $datenow) { echo "<div id='tinyguidetitle'>Today's Episodes</div><br>"; }
else { echo "<div id='tinyguidetitle'>Episodes on $TGUserDate</div><br>"; }

//Lets get shows.
// Allright it works now but you need way to get data from other tablets
while($tgrow = mysqli_fetch_array($TGuideSQ)) {
	$TGName = ''.$tgrow['Name'].'';
	$TGEpisode = ''.$tgrow['Episode'].'';
	$TGDate = ''.$tgrow['Date'].'';
	$TGDate = date("d.m",strtotime("$TGDate"));
	$TGGenre = 'Genre Here'; 
	$TGNote = 'Plot here'; 
	
	//$tggenre = $db->querySingle('SELECT Genre FROM tinyguide_infos WHERE Name LIKE "'.$TGName.'"');
	//$tgnote = $db->querySingle('SELECT Note FROM tinyguide_infos WHERE Name LIKE "'.$TGName.'"');
	
	//echo '<br><br><br>Debug '.$TGDate.' '.$TGUserDate.' <br><br>';
	
	if ($TGDate == $TGUserDate) {
	
		//Show Additional information
		$stats = mysqli_query($Tinysqcon,"SELECT * FROM TinyGuideDB WHERE Name='$TGName'");
		while($srow = mysqli_fetch_array($stats))
		{
		$Genre = $srow['Genre'];
		$Note = $srow['Note'];
		$Link = $srow['Link'];
		}
	
		echo "<div id='tinyguide_note'>$Note</div>"; 
		echo "<a href='$Link' target='_blank'><img src='../$folder/data/image/tinyguide/$TGName.png'/></a><br>";
		echo "<div id='tinyguide'><br>$TGName</div><br><br>"; 
		echo "<div id='tinyguide_Infobox'><div id='tinyguide_Genre'><br>$Genre</div><br><br>"; 
		echo "<div id='tinyguide_Seep'>$TGEpisode</div></div>";
		$wehave_shows = "on";
		
	}
}
	
	if ($wehave_shows != on) {
	echo "<div id='tinyguide'>Sorry, we don't have any interesting shows today.</div><br>";
	}
?>