<style>
#totalstyle {
	position: absolute;
	width: 576px;
}
</style>


<?php
	// Variables
		$Tinysqcon=mysqli_connect("","","",""); //database connection
		$result = $Tinysqcon->query("SELECT * FROM UsersWIP");
		$UserVisitCount = $result->num_rows;
		$uipresult = mysqli_query($Tinysqcon,"SELECT * FROM UsersWIP ORDER BY id DESC LIMIT 0, $UserVisitCount");
	
	// border style mess and field names
	echo '<table border="" style="position: relative; left: 44px; font-family: visit2; font-size: 13px;"><tr><td>Username</td><td>IP</td><td>Country</td><td>City</td><td>Visits</td></tr>';
	
		while($uiprow = mysqli_fetch_array($uipresult)) {
			$uip = ''.$uiprow['Ip'].'';
			$ipapi = file_get_contents('http://ip-api.com/json/'.$uip.'');
			$IPLA = json_decode($ipapi, true);
			$sql = "SELECT * FROM UsersWIP WHERE ip = '$uip'";
			$result = $Tinysqcon->query($sql);
			$row = $result->fetch_assoc();
			$VisitorUserName = $row['User'];
			$VisitorVisits = $row['Visits'];
		
			if ($VisitorUserName == $null) { $VisitorUserName = 'Unknown'; }
		
			echo '<tr><td>'.$VisitorUserName.' </td>';
			echo '<td>'.$uip.' </td>';
			echo '<td>'.$IPLA['country'].'</td>';
			echo '<td>'.$IPLA['city'].'</td>';
			echo '<td>'.$VisitorVisits.'</td></tr>';
		}
		echo '<tr><td>Total Visits</td>';
		echo '<td id="Totalstyle">'.$UserVisitCount.'</td></tr>';
	echo '</tr></table><br>';
?>