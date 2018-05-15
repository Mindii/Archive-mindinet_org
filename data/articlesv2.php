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
	//include 'module1.php';
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
	$PostImg = '/data/image/art/'.$FirstT.'.png';
	
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
		if (@getimagesize('https://leo.mindinet.org'.$PostImg)) { echo '<div id="Postimg"><img src="https://leo.mindinet.org'.$PostImg.'" width="720" height="60" style="border-bottom-left-radius: 25px;"><br><br></div>'; }
		else { if ($defaultpostimage == 1) { echo '<div id="Postimg"><img src="https://leo.mindinet.org/data/image/art/default.png" width="720" height="60" style="border-bottom-left-radius: 25px;"><br><br></div>'; } }
	
	echo ''.$First.'<br></div>
	<div id="titlesbottom"><img src="https://leo.mindinet.org/data/image/icons/clock_8.png" width="8" height="8">  '.$RDate.', '.$RTime.' By <font style="color:#FF8500">'.$PostUser.'</font> <img src=https://leo.mindinet.org/data/image/icons/comment_8.png  width="8" height="8"> <font style="color:#6F6F6F">0</font> <a href="http://mindinet.org/demo/">Comments</a></div>
	</div>';
    $Articles++;
    } 
	
	// rounding test watch if this work when article number is higher
	//$overallcalc = round($allarticles/$pageid);
	
	//Debugtool
	//echo 'Debug R:'.$overallcalc.' A:'.$allarticles.' ID:'.$pageid.'   HM:'.$howmanypages.' PL:'.$pagelink.'';
	echo "<br><img src=https://leo.mindinet.org/data/image/line.png><br>";
	echo '<div id="Changepage">';
	if ($prewpage > -1) {
		echo '<a href="../?id='.$prewpage.'"> <- Prew </a>';
	}
	else {
		echo '<img src="https://leo.mindinet.org/data/image/empty.png">';
	}
	
	// echo page numbers
	$pagewhile = 1;
		while($pagewhile <= $howmanypages) {
			
			$pagelink = $pagewhile-1;		
			
			if (!($pageid == $pagelink)) { 
				
				echo '<a href="../?id='.$pagelink.'"> '.$pagewhile.' </a>';

			}
			
			else { 
				echo ' '.$pagewhile.' '; 
			}
			
			$pagewhile++;
		}

		if ($artcount == $Ahowmany) {
			echo '<a href="../?id='.$nextpage.'"> Next -> </a>';
		}
		else {
			echo '<img src="https://leo.mindinet.org/data/image/empty.png">';
		}
	
	echo '</div>';
	
?>