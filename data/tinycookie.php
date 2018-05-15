<?php
	$cookie_password = $_COOKIE["Userpass"];
	$cookie_user = $_COOKIE["user"];
	$password = $_GET['password'];
	$dbu = new SQLite3('../sql/users.sqlite3');
	$user_salt = $dbu->querySingle('SELECT salt FROM salts WHERE Name LIKE "'.$cookie_user.'"');
	$user_pass = crypt(''.$password.'',''.$user_salt.'');
	Echo '<div 
	style="
	background: #424242;
	width: 720;
	padding: 10px;
	"><font color="#FFFFFF">
	<font color="#FFBB42">User from cookie:</font>'.$cookie_user.'<br> 
	<font color="#FFBB42">Password entered now:</font> '.$password.' <br> 
	<font color="#FFBB42">User Salt from db:</font> '.$user_salt.' <br> 
	<font color="#FFBB42">Password + Salt:</font> '.$user_pass.' <br> 
	<font color="#FFBB42">Hash Password from cookie:</font> '.$cookie_password.'<br><br>';
	if ($user_pass == $cookie_password) { echo '<font color="#D6FF00">Password ok, nice job.</font>'; }
	else { echo '<font color="#FF7866">Password is wrong, please try again.</font>'; }
	echo '</font><div>';
?>