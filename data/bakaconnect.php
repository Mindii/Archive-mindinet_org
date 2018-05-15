<?php
	// MYSQL Database Variables
	// User
	$MYLRFDSUSR = '';
	// Password
	$MYLRFDSPSW = '';
	// Server
	$MYLRFDSSRV = 'localhost';
	// Database
	$MYLRFDSDAT = '';
	
	// MYSQL Database Connection
	$Tinysqcon=mysqli_connect("$MYLRFDSSRV","$MYLRFDSUSR","$MYLRFDSPSW","$MYLRFDSDAT");
?>