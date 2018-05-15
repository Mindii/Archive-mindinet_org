<link rel="stylesheet" type="text/css" href="data/admin/admin.css">
<?php
//die("<br>Please log in, you don't have permission go to this page.<br>");
/*$Username = $_COOKIE['user'];
if (stripos($userip, "192.168.0.") !== false) { echo 'User: <font color="#FFBB42"> '.$Username.' </font><br>'; }
else { die("<br>Please log in, you don't have permission go to this page."); }
$Tinynote_now = $db->querySingle('SELECT TinyNote FROM settings');
echo "$title administrator panel";
echo "<div id='administrator_form'><form><div id='administrator_form'>
	<form action='index.php?t=load' method='get'>
	<input type='hidden' name='t' value='load'>
	TinyNote:<br> <input type='text' id='administrator_tinynote' name='tinynote' value='$Tinynote_now'><br>
	<input type='submit' value='Save'><br>
	</form></div></div><br>";
	
echo "
<div id='rss_app'>
<a href='..$folder/data/rsswriter.php' title='Write Rss Feeds' id='Button'>
<img src=../$folder/data/image/admin/rss.png/></a><br>
Update RSS</div>;
*/

// **************************** Pass and user check *******************************

// Database check
	//Settings
	$Enter_User = $_COOKIE["User"];
	$User_Crypt = $_COOKIE["Salt"];
	
	//Database
	$Users = mysqli_query($Tinysqcon,'SELECT * FROM Users WHERE User = "'.$Enter_User.'"');
	while($srow = mysqli_fetch_array($Users)) {
		$TinyUser = $srow['User'];
		$TinySalt = $srow['Salt'];
	}
	//$User_Crypt = crypt(''.$Enter_Pass.'',''.$TinySalt.'');
	if (!isset($_COOKIE["Salt"])) { echo "<br><br><img src=data/image/forbidder.png><br>"; }
	elseif (!isset($_COOKIE["Salt"])) { echo "<br><br><img src=data/image/forbidder.png><br>"; }
	Else {
		if ($TinySalt == $User_Crypt) { 
	
		echo 'Nice, password ok.<br><br>'; 
	
		// rss app
		echo '
		<div id="rss_app">
		<a href="../index.php?t=rss_update" title="Write Rss Feeds" id="Button">
		<img src="../data/image/admin/rss.png"/></a><br>
		Update RSS</div>';

		// images app
		echo '
		<div id="thumb_app">
		<a href="../index.php?t=images_update" title="Write Thumbs Feeds" id="Button">
		<img src="../data/image/admin/img.png"/></a><br>
		Update IMG</div>';
		}
		else  { echo "<br><br><img src=data/image/forbidder.png><br>"; }
	}
?>