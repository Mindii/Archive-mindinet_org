<?php 
$tinynote = $_GET["tinynote"];
$query = $db->exec("UPDATE 'Settings' SET 'TinyNote' = '$tinynote' WHERE ROWID = 1");
?>