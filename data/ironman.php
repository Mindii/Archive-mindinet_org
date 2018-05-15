<style>
#IM {
width: 600px;
height: 400px;
position: relative;
z-index: 9;
left: 110px;
top: 20px;
color: #000000;
background: url(http://eu.battle.net/static-render/eu/*);
background-repeat: round;
padding-bottom: 10px;
margin-bottom: 20px;
margin-top: 10px;
box-shadow: 0px 0px 6px #646464;
border-radius: 3px;
opacity: 0.8;
}

#IMLev {
font-family: visit;
font-size: 45px;
color: #FF922D;
text-indent: 15;
}

#IMName {
font-family: visit;
font-size: 30px;
color: #FF922D;
text-indent: 0;
position: absolute;
right: 15px;
top: 20px;
}

#IMStats {
font-family: visit2;
font-size: 16px;
color: #FFFFFF;
text-indent: 0;
position: absolute;
left: 15px;
letter-spacing: 1.5px;
text-transform: lowercase;
bottom: 20px;
}

#IMRealm {
font-family: visit;
font-size: 30px;
color: #FFFFFF;
text-indent: 0;
position: absolute;
right: 15px;
top: 0px;
}

#IMText {
font-family: visit2;
font-size: 13px;
color: #FFFFFF;
right: 10px;
bottom: 10px;
position: absolute;
text-transform: uppercase;
text-indent: 15;
letter-spacing: 0.5;
}

</style>


<?php
	// **************
	// Stats Api Data
	$ironapi = file_get_contents('http://eu.battle.net/api/wow/character/silvermoon/NAME?fields=stats');
	$ironstats = json_decode($ironapi, true);
	
	// Stats Variables
	$IRLevel = $ironstats['level'];
	$IRName = $ironstats['name'];
	$IRRealm = $ironstats['realm'];
	$IRArmor = $ironstats['stats'][armor];
	$IRHealth = $ironstats['stats'][health];
	// --------------
	
	
	// **************
	// Items Api Data
	$ironapiI = file_get_contents('http://eu.battle.net/api/wow/character/silvermoon/NAME?fields=items');
	$ironstatsI = json_decode($ironapiI, true);
	
	// Stats Variables
	$IRILev = $ironstatsI['items'][averageItemLevel];
	// --------------
	
?>

<?php 
echo '<font face="visit" size="20">Ironman Challenger</font>';
// Content, Frames etc.
echo '<div id="IM">';

echo '<div id="IMLev">'.$IRLevel.'</div>';
echo '<div id="IMRealm">'.$IRRealm.'</div>';
echo '<div id="IMName">'.$IRName.'</div>';

echo '<div id="IMStats">
Health: <font color="#FF922D">'.$IRHealth.'</font><br>
Armour: <font color="#FF922D">'.$IRArmor.'</font><br>
Deaths: <font color="#FF922D">0</font><br>
ILev: <font color="#FF922D">'.$IRILev.'</font><br>
</div>';

echo '<div id="IMText">
<a href="http://eu.battle.net/wow/en/character/silvermoon/NAME/" target="_blank">Armory</a>
 // 
<a href="http://wowironman.com/rules" target="_blank">Rules</a>
 // 
<a href="http://wowironman.com/" target="_blank">List</a>
</div>';

echo '</div>';
?>