<?php
$db = new SQLite3('sql/tinyui.sqlite3');
$Linkkejä = $db->querySingle('SELECT COUNT(*) FROM Links');
$Links="0";
$Linknf=$Linkkejä;
echo "Linkbin (<a href='/links.php' target='_blank' id='Button'>$Linkkejä</a>) "; 
while($Links<=$Linkkejä)
    {
	$LName = $db->querySingle('SELECT Name FROM Links LIMIT 1 OFFSET '.$Linknf.'');
	$LLink = $db->querySingle('SELECT Link FROM Links LIMIT 1 OFFSET '.$Linknf.'');
	$LComment = $db->querySingle('SELECT Comment FROM Links LIMIT 1 OFFSET '.$Linknf.'');
	echo "<a href='$LLink' target='_blank' id='Button'>$LName</a> $LComment ";
    $Links++;
	$Linknf--;
    } 
?>