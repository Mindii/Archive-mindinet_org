<?php	
$files = opendir('./upload/files/');
while ($ltied2 = readdir($files)) {
if (is_dir($ltied2) or ($ltied2 == "index.php")) {}
else
    {	
    $tied2++;
	}
}
	closedir($files);
	if ($tied2 == NULL){$tiedostoa = "0";} 
	else { $tiedostoa = "$tied2"; }
	echo "<img src=../$folder/data/image/icons/save.png/> $tiedostoa ";
?>