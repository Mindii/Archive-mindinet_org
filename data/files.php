<link rel="stylesheet" type="text/css" href="data/files.css">
<?php
echo "
	<table id='files'>
	<tr>
    <th id='filesnametitle'>Name</th>
	<th id='filessizetitle'>Type</th>
    <th id='filessizetitle'>Size</th>
	<th id='filescreatetitle'>Date</th>
	</tr>";
	
include "filesize.php";
$files2 = opendir('./dl/');
while ($ltied22 = readdir($files2)) {
	
    if (is_dir($ltied22) or ($ltied22 == ".htaccess")) {}
    else
        {
		$filepath = 'dl/'.$ltied22.'';
		$filesize = filesize($filepath);
		$filesize = FileSizeConvert($filesize);
		$filedate = date('d.m.Y', filemtime($filepath));
		$fileext = pathinfo($filepath, PATHINFO_EXTENSION);
		$filename = pathinfo($filepath, PATHINFO_FILENAME);
		$filelink = rawurlencode("$ltied22");

	
	// Let's check if filetype have icon	
	$filetypeicon = 'data/image/files/'.$fileext.'.png';
	if (file_exists($filetypeicon)) {

	}
	else {
		$filetypeicon = 'data/image/files/default.png';
	}	
	
		
	echo "
	<tr>
    <td><a href=http://mindinet.org/dl/$filelink>$filename</a></td>
	<td id='filessize'><img src='$filetypeicon'></td>
	<td id='filessize'>$filesize</td>
	<td id='filescreate'>$filedate</td>
	</tr>";
        $tied22++;
    }
}
closedir($files2);
		if ($tied22 == NULL){$tiedostoa = "0"; $paate2 = "File";} 
		else{
			$tiedostoa = "$tied22";
			if ($tiedostoa == 1) { $paate2 = "File"; }
			else { $paate2 = "Files"; }
		}
echo "</table>";
echo "<br><br><br> This is just a demo, and downloading is disabled right now.";
?>
</div>