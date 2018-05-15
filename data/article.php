<?php
// Settings
	$pageid = $_GET['id'];
	$Ahowmany = '5';
	$nextpage = $pageid+1;
	$prewpage = $pageid-1;
	
// Cheeking what page number is.
	if ($pageid < 1) { 
	$rpage = '0';
	} 
	elseif ($pageid > 0) { 
	$rpage = $pageid*$Ahowmany;
	}
	
// Database and includes
	$result = mysqli_query($Tinysqcon,"SELECT * FROM Articles ORDER BY id DESC LIMIT $rpage, $Ahowmany");
	$artcount = $result->num_rows;
	$allresult = mysqli_query($Tinysqcon,"SELECT * FROM Articles ORDER BY id DESC");
	$allarticles = $allresult->num_rows;
	$howmanypages = ceil($allarticles/$Ahowmany);
	$Articles = 1;

while($row = mysqli_fetch_array($result))
    {
	$FirstT = ''.$row['Name'].'';
	$First = ''.$row['Article'].'';
	$ArticleTime = ''.$row['Time'].'';
	$PostUser = ''.$row['User'].'';
	$RDate = date("d.m.Y",strtotime("$ArticleTime"));
	$RTime = date("H:i",strtotime("$ArticleTime"));
	$PostImg = './data/image/art/'.$FirstT.'.png';
	
	$posttitle1 = substr($FirstT, 0, 1);
	$posttitlem = substr($FirstT, 1);
	// TinyUi's BBCode converter
	$bbtext = $First;
	include 'data/bbcode.php';
	$First = $bbtext;
	
		if ($Articles == $artcount) { echo "<div id='titlesframe'>"; }
		else { echo "<div id='titlesframesec'>"; }
		echo '<div id="titlestext"><br><b><div id="titlestitle"><font color="#FF7A00">'.$posttitle1.'</font>'.$posttitlem.'</div></b><br>';
	

		// Post Images
		// Cheeking if there is image for post
		if (file_exists($PostImg)) { echo '<div id="Postimg"><img src="'.$PostImg.'" width="720" height="60" style="border-bottom-left-radius: 10px;"><br><br></div>'; }
		

		
		// Cheeking if there is default image setted on
		else { if ($defaultpostimage == 1) { echo '<div id="Postimg"><img src="./data/image/art/default.png" width="720" height="60"><br><br></div>'; } }
	
	echo ''.$First.'<br></div>
	<div id="titlesbottom"><img src="./data/image/icons/clock_8.png" width="8" height="8">  '.$RDate.', '.$RTime.' <img src=../data/image/icons/comment_8.png  width="8" height="8"><font style="color:#FF8500"> '.$PostUser.' </font></div>
	</div>';
    $Articles++;
    } 
	
?>