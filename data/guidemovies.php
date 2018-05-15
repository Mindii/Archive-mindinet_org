<?php
$reccount = $db->querySingle('SELECT COUNT(*) FROM tinyguide_movies');

echo "<div id='recommend_movie'>";
echo "<div id='tinyguide_reco_title'>Recommended Movies</div><br>";
$recshows="0";
while($recshows<$reccount)
    {
	$recname = strtoupper ($db->querySingle('SELECT name FROM tinyguide_movies LIMIT 1 OFFSET '.$recshows.''));
	$recyear = $db->querySingle('SELECT Year FROM tinyguide_infos WHERE Name LIKE "'.$recname.'"');
	$recgenre = $db->querySingle('SELECT Genre FROM tinyguide_infos WHERE Name LIKE "'.$recname.'"');
	$reclink = $db->querySingle('SELECT Link FROM tinyguide_infos WHERE Name LIKE "'.$recname.'"');
	
	echo "<div id='tinyguide_reco'>$recyear // $recgenre</div><br>";
	echo "<a href='$reclink' target='_blank'><img src='../$folder/data/image/tinyguide_movies/$recname.png'/></a><br>";
	echo "<div id='tinyguide_reco_showtitle'>$recname</div><br><br>";

	
    $recshows++;
    }
echo "</div>";
?>