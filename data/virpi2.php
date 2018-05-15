<style>
	@font-face {
		font-family: 'stink';
		src: url('fonts/StinkD.woff') format('woff'),
		url('fonts/StinkD.ttf') format('truetype');
	}
</style>

<?php 
	// Start of the Virpi In Web
	// link to project http://mindinet.org/?t=media
	// *******************************************


	// Main Variables
	$VIRPICON = mysqli_query($Tinysqcon,"SELECT * FROM Virpi");
	$VIRPIQUES = $_GET['q'];
	$VIRPIVER = '0.15';
	$VIRPISTART = '';

	// Specials from => to.
	$VIRPIWords = array(
    'heippa' => 'hei',
    'tervehdys' => 'hei',
    'hoi' => 'hei',
    'howdy' => 'hei',
	);

  foreach ($VIRPIWords as $VIRPIWord => $VIRPIWordTo) {
      	if (strpos(strtolower($VIRPIQUES),$VIRPIWord) !== false) {
			$VIRPISWord = ''.$VIRPIWord.'';
			$VIRPISWordTo = ''.$VIRPIWordTo.'';
			//DEBUG: echo '('.$VIRPISWordTo.' '.$VIRPISWord.')';
			break;
		}
    }
  /*
	
	elseif (strpos(strtolower($VIRPIQUES),'ketä olet') !== false) {
		$VIRPISPECIAL = 'ketä olet';
		$VIRPISPECIALTO = 'kuka olet';
	}
	
	elseif (strpos(strtolower($VIRPIQUES),'ketä nä') !== false) {
		$VIRPISPECIAL = 'ketä nä';
		$VIRPISPECIALTO = 'kuka olet';
	}
	
		elseif (strpos(strtolower($VIRPIQUES),'ketä sinä') !== false) {
		$VIRPISPECIAL = 'ketä sinä';
		$VIRPISPECIALTO = 'kuka olet';
	}
	
	elseif (strpos(strtolower($VIRPIQUES),'kukas sinä') !== false) {
		$VIRPISPECIAL = 'kukas sinä';
		$VIRPISPECIALTO = 'kuka olet';
	}	
	
		
	elseif (strpos(strtolower($VIRPIQUES),'kukas nä') !== false) {
		$VIRPISPECIAL = 'kukas nä';
		$VIRPISPECIALTO = 'kuka olet';
	}	
	*/
	// Virpi Vastaukset
	// *******************************************
	while($VIRPILINE = mysqli_fetch_array($VIRPICON)) {
		$VIRPIW = $VIRPILINE['Word'];
		$VIRPIA = $VIRPILINE['Answer'];
	
		// Start variations.
		if (strpos(strtolower($VIRPIQUES),$VIRPIWord) !== false && $VIRPIW == $VIRPIWordTo) {
			$VIRPIARR = explode(',,', $VIRPIA);
			$VIRPIAC = count($VIRPIARR);
			$VIRPIAC--;
			$VIRPIRAND = rand(0,$VIRPIAC);
			$VIRPISAY = $VIRPIARR[$VIRPIRAND];
		}
	
		// if nothing special run this.
		elseif (strpos(strtolower($VIRPIQUES),$VIRPIW) !== false) {
			$VIRPIARR = explode(',,', $VIRPIA);
			$VIRPIAC = count($VIRPIARR);
			$VIRPIAC--;
			$VIRPIRAND = rand(0,$VIRPIAC);
			$VIRPISAY = $VIRPIARR[$VIRPIRAND];
		}
	
		// here else for everything else.	
		
	}
	// Virpi Vastaukset end.
	echo '<font id="content" style="font-family: stink; font-size: 20px; letter-spacing: 0.4px;">';
	

		echo ''.$VIRPISTART.' '.$VIRPISAY.'';
	
	echo '</font>';
	
	// Virpi Form & Footer
	// *******************************************
	echo "
	<br><br><form action='index.php?t=virpi&q=$VIRPIQUES' method='get'>
	<input type='hidden' name='t' value='virpi'>
	<input id='TextField' type='text' name='q' value=''> 
	<input type='submit' value='Say'><br><br>";
	
	echo '<font id="content" style="font-family: visit2; font-size: 12px; letter-spacing: 0.4px;">Virpi v'.$VIRPIVER.'</font>';
?>

	<script>
		document.getElementById("TextField").focus();
	</script>