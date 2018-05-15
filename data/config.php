<?php
date_default_timezone_set("Europe/Helsinki");
$timenow = date('H:i');
$datetoday = date('d.m');
$yearnow = date('Y');
include 'data/bakaconnect.php';
$title = 'Mindinet.org';

$stats = mysqli_query($Tinysqcon,"SELECT * FROM Stats");
while($srow = mysqli_fetch_array($stats)) {
  $Versio = $srow['Tui_Versio'];
  $Files = $srow['File_Count'];
  $tinynote = $srow['Tinynote'];
  $smoke = $srow['Logosmoke'];
}

$tbar = 1;
$defaultpostimage = 0;
$folder = '';
$versiosmall = ''.$Versio.'';
$Versiolong = 'V<font style ="color:#646464">'.$Versio.'</font>';
$linuxbutton = 'on';
$gamebutton = 'off';
$livebutton = 'off';
$filebutton = 'off';
$imagebutton = 'off';
$musicbutton = 'off';
$aboutbutton = 'on';
$virpibutton = 'off';
$ironbutton = 'off';
$guidebutton = 'off';

// TinyUi's BBCode converter
$bbtext = $tinynote;
include 'data/bbcode.php';
$tinynote = $bbtext;
?>