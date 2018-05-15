<style>

	#gallerypic{
		border:1px solid #;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		-moz-margin-start: 50px;
		border-radius: 5px;
		box-shadow: 0px 0px 10px #222222;
		margin-bottom: 20px;
	}
</style>

<?php
$folder = './i/';
$filetype = '*.png';
$files = glob($folder.$filetype);
echo '<br>This will be simple gallery and that first image is kinda one button screen share thing.<br><br>';
echo '<table>';
for ($i=0; $i<count($files); $i++) {
    echo '<tr><td>';
    echo '<a name="'.$i.'" href="'.$files[$i].'"><img id="gallerypic" height="auto" width="700" src="./i/thumb/'.$i.'.png" /></a>';
    echo '</td></tr>';
}
echo '</table>';
?>