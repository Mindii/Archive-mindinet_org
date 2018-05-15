<?php
include './data/thumb.php';
$folder = './i/';
$filetype = '*.png';
$files = glob($folder.$filetype);
for ($i=0; $i<count($files); $i++) {
	// Thumb maker
	$src = ''.$files[$i].'';
	$dest = './i/thumb/'.$i.'.png';
	$desired_width = '700';
	make_thumb($src, $dest, $desired_width);
	
	$dest = './i/mini/'.$i.'.png';
	$desired_width = '55';
	make_thumb($src, $dest, $desired_width);
}

echo 'TinyGallery Update.';
?>