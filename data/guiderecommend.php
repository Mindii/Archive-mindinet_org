<?php
$reccount = $db->querySingle('SELECT COUNT(*) FROM tinyguide_recommend');

echo "<div id='recommend_window'>";
echo "<div id='tinyguide_reco_title'>Recommended Shows</div><br>";
$recshows="0";
while($recshows<$reccount)
    {
	$recname = strtoupper ($db->querySingle('SELECT name FROM tinyguide_recommend LIMIT 1 OFFSET '.$recshows.''));
	$recgenre = $db->querySingle('SELECT Genre FROM tinyguide_infos WHERE Name LIKE "'.$recname.'"');
	$recyear = $db->querySingle('SELECT Year FROM tinyguide_infos WHERE Name LIKE "'.$recname.'"');
	$reclink = $db->querySingle('SELECT Link FROM tinyguide_infos WHERE Name LIKE "'.$recname.'"');
	
	echo "<div id='tinyguide_reco'>$recyear // $recgenre</div><br>";
	echo "<a href='$reclink' target='_blank'><img src='../$folder/data/image/tinyguide_rec/$recname.png'/></a><br>";
	echo "<div id='tinyguide_reco_showtitle'>$recname</div><br><br>";

	
    $recshows++;
    }
echo "</div>";
?>