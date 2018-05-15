<?php

/* 
Example for release text. ->>>
------------------------------

echo ''.$TINYRLSFONTTITLE.'Upcoming releases v0.90<br></font>
In "just released" thingy there is now 7 days limit for movies, games and other stuff<br> and 3 days for series to preventing series flooding thing to full.<br>';

EXAMPLE: without example text. ->>>
-----------------------------------

echo ''.$TINYRLSFONTTITLE.'TITLE - v0.00<br></font>
TEXT<br>';

*/

// Variables
$TINYRLSVER = '0.12';
$TINYRLS = $_GET['n'];
$TINYRLSFONTTITLE = '<font id="content" style="font-family: visit2; font-size: 20px; letter-spacing: 0.4px;">';
$TINYRLSDB = mysqli_query($Tinysqcon,"SELECT * FROM Releaselog ORDER BY Date DESC");


if ($TINYRLS == media) { $TINYRLS = 'Upcoming releases'; }

echo ''.$TINYRLSFONTTITLE.'TinyUi Releaselog Beta</font><br><br>';
// IF'S AND RELEASELOG'S.
	while($TINYRLSTEXTS = mysqli_fetch_array($TINYRLSDB)) {
		$TRLSN = ''.$TINYRLSTEXTS['Name'].'';
		$TRLSV = ''.$TINYRLSTEXTS['Versio'].'';
		$TRLST = ''.$TINYRLSTEXTS['Note'].'';
		$TRLSD = ''.$TINYRLSTEXTS['Date'].'';
		
		if ($TINYRLS == $TRLSN && $TRLSN !== $null) { 
			echo ''.$TINYRLSFONTTITLE.''.$TRLSN.' - v'.$TRLSV.'<br></font>
			'.$TRLST.'<br>'.$TRLSD.'<br><br>';
		}
		
	}	

echo "<br><br><br><br><img src=data/image/line.png><br>";
echo'<font id="content" style="font-family: visit2; font-size: 12px; letter-spacing: 0.4px;"><a href="http://mindinet.org/?t=release&n=releaselog">ReleaseLog</a> v'.$TINYRLSVER.'</font>';
?>