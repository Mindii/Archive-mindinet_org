<?php
	include "data/config.php";
	// **************************** Pass and user check *******************************

	// Database check
		//Settings
		$Enter_User = $_GET[User];
		$Enter_Pass = $_GET[Password];
		$Redirect_File = 'http://mindinet.org';
	
	//Database
		$Users = mysqli_query($Tinysqcon,'SELECT * FROM Users WHERE User = "'.$Enter_User.'"');
	while($srow = mysqli_fetch_array($Users)) {
		$TinyUser = $srow['User'];
		$TinySalt = $srow['Salt'];
	}
		$User_Crypt = crypt(''.$Enter_Pass.'',''.$TinySalt.'');
	
	if ($TinySalt == $User_Crypt) { 
		setcookie("User", $TinyUser, time()+3600);
		setcookie("Salt", $User_Crypt, time()+3600);
		echo '<script type="text/javascript">window.location.href = "'.$Redirect_File.'"</script>';
	}
	else  { 
		echo "<br><br><img src=data/image/forbidder.png><br>"; 
	}
?>