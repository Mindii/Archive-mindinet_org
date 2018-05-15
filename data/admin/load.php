<?php
echo "Please wait a second..";
include "data/admin/tinynote.php";
sleep(4);
header("Location:../index.php?t=admin");
?>