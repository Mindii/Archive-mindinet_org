<style>
@font-face {
    font-family: 'junction';
    src: url('https://leo.mindinet.org/data/fonts/junction-webfont.woff2') format('woff2'),
         url('https://leo.mindinet.org/data/fonts/junction-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

#title {
	padding-bottom: 100%;
}
#content {
	text-indent: 0px;
}

#TopFrame {
	font-family: junction;
	width: 600px;
	height: 35px;
	position: absolute;
	z-index: 9;
	margin-left: 110px;
	text-align: center;
	font-size: 30px;
	color: #606060;
	text-shadow: 1px 1px #E4E4E4, 2px 2px #E4E4E4, 3px 3px #E4E4E4;
}

#YDFrame {
	position: absolute;
    width: 700px;
    height: 400px;
    margin-top: 40px;
}

#DFrame {
	position: absolute;
    width: 700px;
    height: 400px;
    margin-top: 420px;
}

#FrameNames {
	font-family: junction;
	width: 600px;
	height: 35px;
	position: absolute;
	z-index: 9;
	font-size: 20px;
	color: #606060;
	margin-left: 115px;
	margin-top: 40px;
}

#TopSmallText {
	font-family: junction;
	width: 600px;
	height: 35px;
	position: absolute;
	z-index: 9;
	margin-left: 110px;
	margin-top: 30px;
	text-align: center;
	font-size: 10px;
	color: #606060;
	text-shadow: 1px 1px #E4E4E4, 2px 2px #E4E4E4, 3px 3px #E4E4E4;
}

#RelasesBG {
	width: 380px;
	height: 270px;
	position: absolute;
	z-index: 9;
	left: 100px;
	top: 60px;
	color: #000000;
	padding-left: 10px;
	text-align: center;
	text-indent: initial;
}

#RelasesBG2 {
	width: 380px;
	height: 270px;
	position: absolute;
	z-index: 9;
	left: 420px;
	top: 60px;
	color: #000000;
	text-align: center;
	text-indent: initial;
}

#ItemFrame {
	width: 600px;
	height: 200px;
	position: static;
	z-index: 9;
	left: 15px;
	top: 50px;
	color: #000000;
	margin-bottom: 10px;
	margin-top: 11px;
	box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.4);
	background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.05));

}

#ItemFrameYD {
    width: 300px;
    height: 100px;
    position: static;
    z-index: 9;
    left: 15px;
    top: 50px;
    color: #000000;
    margin-bottom: 10px;
    margin-top: 11px;
    box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.4);
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.05));
}

#NameFrame {
	font-family: junction;
	width: 433px;
	height: 35px;
	position: absolute;
	z-index: 9;
	margin-left: 140px;
	text-align: left;
	font-size: 19px;
	margin-top: 5px;
	color: #696969;
	text-decoration: underline;
}

#NameFrameYD {
    font-family: junction;
    width: 433px;
    height: 35px;
    position: absolute;
    z-index: 9;
    margin-left: 70px;
    text-align: left;
    font-size: 10px;
    margin-top: 3px;
    color: #696969;
    text-decoration: underline;
}

#PlotFrame {
	font-family: junction;
	width: 430px;
	height: 145px;
	position: absolute;
	z-index: 9;
	color: #696969;
	margin-left: 150px;
	text-align: left;
	font-size: 10px;
	margin-top: 40px;
}

#GenreFrame {
	font-family: junction;
	width: 400px;
	height: 15px;
	position: absolute;
	z-index: 9;
	color: #848484;
	margin-left: 193px;
	text-align: right;
	font-size: 9px;
	margin-top: 185px;
}

#ExtraFrame {
	font-family: junction;
	width: 455px;
	height: 15px;
	position: absolute;
	z-index: 9;
	color: #848484;
	margin-left: 140px;
	text-align: left;
	font-size: 9px;
	margin-top: 185px;
}

#ExtraFrameYD {
    font-family: junction;
    width: 455px;
    height: 15px;
    position: absolute;
    z-index: 9;
    color: #848484;
    margin-left: -160px;
    text-align: right;
    font-size: 9px;
    margin-top: 85px;
}

#LinksFrame {
	font-family: junction;
	width: 450px;
	height: 15px;
	position: absolute;
	z-index: 9;
	color: #848484;
	margin-left: 140px;
	font-size: 9px;
	margin-top: 24px;
	text-align: left;
}

#LinksFrameYD {
    font-family: junction;
    width: 450px;
    height: 15px;
    position: absolute;
    z-index: 9;
    color: #848484;
    margin-left: 70px;
    font-size: 9px;
    margin-top: 17px;
    text-align: left;
}

#ItemImageReleases {
	position: inherit;
	width: 35px;
	height: 35px;
	z-index: 1;
}

#BottomFrame {
    position: absolute;
    z-index: 9;
    color: #000000;
    text-align: center;
    font-size: 8px;
	margin-left: 105px;
}
</style>

<?php
// Variables
include "tv_setup.php";
$MSDToday = date('d.m.Y');
$MSDYday = date("d.m.Y", strtotime("yesterday"));
$MSDTime = date('Hi');
$MSDTime2 = date('H:iA');
$MSDBCount = $db->querySingle('SELECT COUNT(*) FROM TV WHERE More="True" AND Date="'.$MSDToday.'"');
$MSDBYCount = $db->querySingle('SELECT COUNT(*) FROM TV WHERE More="True" AND Date="'.$MSDYday.'"');
$MSListCount="0";
$MSListCount2="0";

echo "<div id='TopFrame'>TV Guide<br></div>";
echo "<div id='TopSmallText'>Updates everyday 1:00AM - UTC+03:00</div>";


### Yesterday Shows ###
echo "<div id='YDFrame'>";
if ($MSDBYCount >= "1") {
	$MSCSSP=$MSDBYCount;	
	echo "<div id='FrameNames'>Yesterday</div>";
	// First
	echo '<div id="RelasesBG">';
	while($MSListCount<$MSDBYCount) {
		$MSSID = strtoupper ($db->querySingle('SELECT ShowID FROM TV WHERE More="True" AND Date="'.$MSDYday.'" LIMIT 1 OFFSET '.$MSListCount.''));
		$MSName = strtoupper ($db->querySingle('SELECT Name FROM TV WHERE More="True" AND Date="'.$MSDYday.'" LIMIT 1 OFFSET '.$MSListCount.''));
		$MSIMDB = strtoupper ($db->querySingle('SELECT IMDB FROM TV WHERE More="True" AND Date="'.$MSDYday.'" LIMIT 1 OFFSET '.$MSListCount.''));
		$MSRun = strtoupper ($db->querySingle('SELECT Runtime FROM TV WHERE More="True" AND Date="'.$MSDYday.'" LIMIT 1 OFFSET '.$MSListCount.''));
		$MSSeasons = strtoupper ($db->querySingle('SELECT Seasons FROM TV WHERE More="True" AND Date="'.$MSDYday.'" LIMIT 1 OFFSET '.$MSListCount.''));
		$MSImage = '/scripts/series/shows/'.$MSSID.'.jpg';
		
		// Print first 3 on list
		if ($MSListCount < "3") {
			echo '<div id="ItemFrameYD">';
			echo "<div id='NameFrameYD'>$MSName</div>";
			echo "<div id='ExtraFrameYD'>Runtime ".$MSRun."min <font style='color: #000;'>//</font> Season ".$MSSeasons."</div>";
		
			if ($MSIMDB == $null) {
				echo "<div id='LinksFrameYD'>No extra info yet</div>";
			}
			else {
				echo "<div id='LinksFrameYD'><a href='http://www.imdb.com/title/".strtolower($MSIMDB)."' target='_blank'>IMDB</a></div>";
			}
		
			// IMAGE: Checking if there is file for image.
			if (file_exists($MSImage)) {
				echo "<div id='ItemImageReleases'><img height='100px' src='https://leo.mindinet.org/data/image/shows/$MSSID.jpg'/></div>";
			}
			else {
				echo "<div id='ItemImageReleases'><img height='100px' src='https://leo.mindinet.org/data/image/shows/nope.jpg'/></div>";
			}
				
			echo '</div>';
		}
		$MSListCount++;
    }
	echo '</div>';
	
	// Second
	echo '<div id="RelasesBG2">';
	while($MSListCount2<$MSDBYCount) {
		$MSSID2 = strtoupper ($db->querySingle('SELECT ShowID FROM TV WHERE More="True" AND Date="'.$MSDYday.'" LIMIT 1 OFFSET '.$MSListCount2.''));
		$MSName2 = strtoupper ($db->querySingle('SELECT Name FROM TV WHERE More="True" AND Date="'.$MSDYday.'" LIMIT 1 OFFSET '.$MSListCount2.''));
		$MSIMDB2 = strtoupper ($db->querySingle('SELECT IMDB FROM TV WHERE More="True" AND Date="'.$MSDYday.'" LIMIT 1 OFFSET '.$MSListCount2.''));
		$MSRun2 = strtoupper ($db->querySingle('SELECT Runtime FROM TV WHERE More="True" AND Date="'.$MSDYday.'" LIMIT 1 OFFSET '.$MSListCount2.''));
		$MSSeasons2 = strtoupper ($db->querySingle('SELECT Seasons FROM TV WHERE More="True" AND Date="'.$MSDYday.'" LIMIT 1 OFFSET '.$MSListCount2.''));
		$MSImage2 = '/scripts/series/shows/'.$MSSID2.'.jpg';
		
		// Print Next 3 to side
		if (($MSListCount2 >= "3") && ($MSListCount2 <= "6")) {
			echo '<div id="ItemFrameYD">';
			echo "<div id='NameFrameYD'>$MSName2</div>";
			echo "<div id='ExtraFrameYD'>Runtime ".$MSRun2."min <font style='color: #000;'>//</font> Season ".$MSSeasons2."</div>";
		
			if ($MSIMDB2 == $null) {
				echo "<div id='LinksFrameYD'>No extra info yet</div>";
			}
			else {
				echo "<div id='LinksFrameYD'><a href='http://www.imdb.com/title/".strtolower($MSIMDB2)."' target='_blank'>IMDB</a></div>";
			}
		
			// IMAGE: Checking if there is file for image.
			if (file_exists($MSImage2)) {
				echo "<div id='ItemImageReleases'><img height='100px' src='https://leo.mindinet.org/data/image/shows/$MSSID2.jpg'/></div>";
			}
			else {
				echo "<div id='ItemImageReleases'><img height='100px' src='https://leo.mindinet.org/data/image/shows/nope.jpg'/></div>";
			}
				
			echo '</div>';
		}

		$MSListCount2++;
    }
	echo '</div>';

}
echo "</div>";



### TODAY Shows ### 
$MSListCount="0";

echo "<div id='DFrame'>";
# If morning before update
/*
if ($MSDTime <= "0100") {
	$MSCSSP=$MSDBYCount;	
	# Lets edit css size
	#echo '<style> #BottomFrame { margin-top: -moz-calc(200 * '.$MSCSSP.'px + 160px); } </style>';
	echo '<style> #title { padding-bottom: -moz-calc(200 * '.$MSCSSP.'px + 200px); } </style>';
	#echo '<style> #BottomFrame { margin-top: -moz-calc(240 * '.$MSCSSP.'px); } </style>';
	#echo '<style> #title { padding-bottom: -moz-calc(250 * '.$MSCSSP.'px); } </style>';
	
	echo '<div id="RelasesBG">';
	while($MSListCount<$MSDBYCount)
		{
		$MSSID = strtoupper ($db->querySingle('SELECT ShowID FROM TV WHERE More="True" AND Date="'.$MSDYday.'" LIMIT 1 OFFSET '.$MSListCount.''));
		$MSName = strtoupper ($db->querySingle('SELECT Name FROM TV WHERE More="True" AND Date="'.$MSDYday.'" LIMIT 1 OFFSET '.$MSListCount.''));
		$MSIMDB = strtoupper ($db->querySingle('SELECT IMDB FROM TV WHERE More="True" AND Date="'.$MSDYday.'" LIMIT 1 OFFSET '.$MSListCount.''));
		$MSPlot = strtoupper ($db->querySingle('SELECT Plot FROM TV WHERE More="True" AND Date="'.$MSDYday.'" LIMIT 1 OFFSET '.$MSListCount.''));
		$MSGenres = strtoupper ($db->querySingle('SELECT Genres FROM TV WHERE More="True" AND Date="'.$MSDYday.'" LIMIT 1 OFFSET '.$MSListCount.''));
		$MSRun = strtoupper ($db->querySingle('SELECT Runtime FROM TV WHERE More="True" AND Date="'.$MSDYday.'" LIMIT 1 OFFSET '.$MSListCount.''));
		$MSSeasons = strtoupper ($db->querySingle('SELECT Seasons FROM TV WHERE More="True" AND Date="'.$MSDYday.'" LIMIT 1 OFFSET '.$MSListCount.''));
		$MSImage = '/scripts/series/shows/'.$MSSID.'.jpg';
		
		echo '<div id="ItemFrame">';
		echo "<div id='NameFrame'>$MSName</div>";
		echo "<div id='PlotFrame'>".ucfirst(strtolower($MSPlot))."</div>";
		echo "<div id='GenreFrame'>$MSGenres</div>";
		echo "<div id='ExtraFrame'></div>";
		
		if ($MSIMDB == $null) {
			echo "<div id='LinksFrame'>No extra info yet</div>";
		}
		else {
			echo "<div id='LinksFrame'><a href='http://www.imdb.com/title/".strtolower($MSIMDB)."' target='_blank'>IMDB</a> <font style='color: #000;'>//</font> Runtime ".$MSRun."min <font style='color: #000;'>//</font> Season ".$MSSeasons."</div>";
		}
		
		// IMAGE: Checking if there is file for image.
		if (file_exists($MSImage)) {
			echo "<div id='ItemImageReleases'><img height='200px' src='https://leo.mindinet.org/data/image/shows/$MSSID.jpg'/></div>";
		}
		else {
			echo "<div id='ItemImageReleases'><img height='200px' src='https://leo.mindinet.org/data/image/shows/nope.jpg'/></div>";
		}
				
		echo '</div>';
		
		$MSListCount++;
    }
	echo '</div>';
}
*/

# If right time but no episodes
if ($MSDBCount == 0) {
	$MSCSSP=$MSDBCount + "1";
	# Lets edit css size
	#echo '<style> #BottomFrame { margin-top: -moz-calc(200 * '.$MSCSSP.'px + 15px); } </style>';
	#echo '<style> #title { padding-bottom: -moz-calc(200 * '.$MSCSSP.'px + 50px); } </style>';
	echo "<div id='TopSmallText' style='padding-top:20px;'>Oh, Can't fine new episodes for today yet.</div>";
}

# Else
else {
	$MSCSSP=$MSDBCount;
	# Lets edit css size
	#echo '<style> #title { padding-bottom: -moz-calc(200 * '.$MSCSSP.'px + 200px); } </style>';
	#echo '<style> #BottomFrame { margin-top: -moz-calc(240 * '.$MSCSSP.'px); } </style>';
	#echo '<style> #title { padding-bottom: -moz-calc(250 * '.$MSCSSP.'px); } </style>';
	echo '<div id="FrameNames">Today</div><br>';
	echo '<div id="RelasesBG">';
	while($MSListCount<$MSDBCount)
		{
		$MSSID = strtoupper ($db->querySingle('SELECT ShowID FROM TV WHERE More="True" AND Date="'.$MSDToday.'" LIMIT 1 OFFSET '.$MSListCount.''));
		$MSIMDB = strtoupper ($db->querySingle('SELECT IMDB FROM TV WHERE More="True" AND Date="'.$MSDToday.'" LIMIT 1 OFFSET '.$MSListCount.''));
		$MSName = strtoupper ($db->querySingle('SELECT Name FROM TV WHERE More="True" AND Date="'.$MSDToday.'" LIMIT 1 OFFSET '.$MSListCount.''));
		$MSPlot = strtoupper ($db->querySingle('SELECT Plot FROM TV WHERE More="True" AND Date="'.$MSDToday.'" LIMIT 1 OFFSET '.$MSListCount.''));
		$MSGenres = strtoupper ($db->querySingle('SELECT Genres FROM TV WHERE More="True" AND Date="'.$MSDToday.'" LIMIT 1 OFFSET '.$MSListCount.''));
		$MSSeasons = strtoupper ($db->querySingle('SELECT Seasons FROM TV WHERE More="True" AND Date="'.$MSDToday.'" LIMIT 1 OFFSET '.$MSListCount.''));
		$MSRun = strtoupper ($db->querySingle('SELECT Runtime FROM TV WHERE More="True" AND Date="'.$MSDToday.'" LIMIT 1 OFFSET '.$MSListCount.''));
		$MSImage = '/scripts/series/shows/'.$MSSID.'.jpg';

		echo '<div id="ItemFrame">';
		echo "<div id='NameFrame'>$MSName</div>";
		echo "<div id='PlotFrame'>".ucfirst(strtolower($MSPlot))."</div>";
		echo "<div id='GenreFrame'>$MSGenres</div>";
		echo "<div id='ExtraFrame'></div>";
		
		if ($MSIMDB == $null) {
			echo "<div id='LinksFrame'>No extra info yet</div>";
		}
		else {
			echo "<div id='LinksFrame'><a href='http://www.imdb.com/title/".strtolower($MSIMDB)."' target='_blank'>IMDB</a> <font style='color: #000;'>//</font> Runtime ".$MSRun."min <font style='color: #000;'>//</font> Season ".$MSSeasons."</div>";
		}
		
		// IMAGE: Checking if there is file for image.
		if (file_exists($MSImage)) {
			echo "<div id='ItemImageReleases'><img height='200px' src='https://leo.mindinet.org/data/image/shows/$MSSID.jpg'/></div>";
		}
		else {
			echo "<div id='ItemImageReleases'><img height='200px' src='https://leo.mindinet.org/data/image/shows/nope.jpg'/></div>";
		}
				
		echo '</div>';
		
		$MSListCount++;
    }
	echo '</div>';
}
echo "</div>";

/*
echo '<div id="BottomFrame">';
echo "<br><img src=https://leo.mindinet.org/data/image/line.png><br>";
echo'<font id="content" style="font-family: visit2; font-size: 12px; letter-spacing: 0.4px;">TV Guide Redux v'.$tv_version.'</font>';
echo '</div>';
*/
?>