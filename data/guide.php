<?php
//$tgcount = $db->querySingle('SELECT COUNT(*) FROM tinyguide');
//$tgtitle = $db->querySingle('SELECT title FROM tinyguide_settings');
$timenow = date('H:i'); 
$datenow = date('d.m');

//include 'data/guiderecommend.php';
//include 'data/guidemovies.php';

$TGUserDate = $_GET['date'];
if ($TGUserDate == today) { $TGUserDate = $datenow; include 'data/guidetitles.php'; }
elseif ($TGUserDate == $null) { $TGUserDate = $datenow; include 'data/guidetitles.php'; }
elseif (ctype_alpha($TGUserDate)) { echo "<br><br><img src=data/image/error.png/><br>You need use this format DD.MM"; }
else { include 'data/guidetitles.php'; }
?>