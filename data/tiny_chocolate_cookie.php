<?php
	$userip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	$userip2 = $_SERVER['REMOTE_ADDR'];
	if ($userip == null) { $userip = $userip2; };
	
	$username = 'User';
	
	$rand = rand();
	$userpassworld = 'WVhGBvmyg:k\u?U>Sy2W"K=XZNqSYga%{>7Sz[AX_W^QdMwG\JaBJ}^_JVt*WC';

	setcookie("user", "$username", time()+3600);
	setcookie("Userpass", "$userpassworld", time()+3600);
	setcookie("ip", "$userip", time()+3600);
	
	sleep(1);
	header("Location:../data/tinycookie.php");
?>