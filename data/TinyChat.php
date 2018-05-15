<style>
#ChatterBox {
	width: 600px;
	position: relative;
	z-index: 9;
	left: 13%;
	top: 20px;
	color: #000000;
	background: #ffffff;
	margin-top: 5px;
	box-shadow: 0px 0px 6px #A0A0A0;
	border-bottom-left-radius: 1px;
	border-bottom-right-radius: 1px;
}

#ChatterText {
width: 521px;
height: 60px;
position: absolute;
left: 75px;
font-family: Verdana, Geneva, sans-serif;
top: 10px;
font-size: 10px;
text-align: inherit;
word-wrap: break-word;
text-indent: 0px;
}

#ChatterName {
	position: absolute;
	z-index: 9;
	font-size: 10px;
	top: -15px;
	left: 5px;
	margin-top: 10px;
	text-transform: uppercase;
	font-weight: normal;
	background: #FFF;
	display: inline-block;
	margin-left: -10px;
	font-family: visit2;
	font-size: 14;
	padding: 1;
	padding-right: 2px;
	box-shadow: 0px 0px 1px #000;
	text-indent: 0px;
	text-align: justify;
}

#ChatterInfo {
	position: absolute;
	z-index: 9;
	font-size: 10px;
	bottom: -5px;
	right: -5px;
	margin-top: 10px;
	text-transform: uppercase;
	font-weight: normal;
	background: #FFF;
	display: inline-block;
	margin-left: -10px;
	padding: 1;
	padding-right: 2px;
	box-shadow: 0px 0px 1px #000;
}

</style>


<?php

	// Main Variables
	$Tinysqcon=mysqli_connect("","","",""); //database connection
	$result = $Tinysqcon->query("SELECT * FROM TinyChat");
	$CommentCount = $result->num_rows;
	$Chatresult = mysqli_query($Tinysqcon,"SELECT * FROM TinyChat LIMIT 0, $CommentCount");
	

	$NR = 0;
	while($ChatRow = mysqli_fetch_array($Chatresult)) {
			$sql = "SELECT * FROM TinyChat WHERE Id = '$NR' AND Article = '$FirstT'";
			$result = $Tinysqcon->query($sql);
			$ChatRow = $result->fetch_assoc();
			$TinyChatUser = $ChatRow['User'];
			$TinyChatComment = $ChatRow['Comment'];
			$TinyChatTime = $ChatRow['Time'];
			$TinyChatTime = date("H:i",strtotime("$TinyChatTime"));
			$TinyChatDate = $ChatRow['Date'];
			$TinyChatDate = date("d.m.Y",strtotime("$TinyChatDate"));
			$TinyChatEmail = $ChatRow['Email'];

		
			if ($TinyChatUser != $null) {
				// Gravatar
				$default = "default.png";
				$size = 70;
				$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $TinyChatEmail ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
				if ($TinyChatEmail == $null) { $grav_url = './data/image/DefaultAvatar.png'; }
		
		
			echo '
			<div id="ChatterBox"> 
					<div id="ChatterName"><font color="#FF7A00">'.$TinyChatUser.'</font></div>
					<img src="'.$grav_url.'" alt="" style=" width: '.$size.'px; position: inherit; left: -50;"/>
					<div id="ChatterText"><font color="#FF7A00">'.$TinyChatComment.'</font></div>
					<div id="ChatterInfo"><font color="#FF7A00">'.$TinyChatDate.', '.$TinyChatTime.'</font></div>
			</div><br>';
		
				
				// debug for text from db
				// echo '('.$TinyChatTime.', '.$TinyChatDate.') '.$TinyChatUser.' - '.$TinyChatComment.'<br>';
			}
			
		++$NR;
	}









?>