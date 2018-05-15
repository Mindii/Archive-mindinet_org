<?php
$imagesDir = 'data/image/logo/';
$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
$logorand = $images[array_rand($images)];
$logonow = str_replace("/data/image/logo/", "", "$logorand");
?>