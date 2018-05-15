<?php
	// Variables
		$LastVisitDate = date('d.m.Y');
		$LastVisitTime = date('H:i:s');
		$VisitorIP = $_SERVER[HTTP_X_FORWARDED_FOR];
		$resultVisits = $Tinysqcon->query("SELECT * FROM UsersWIP");
		$UserVisitCount = $resultVisits->num_rows;
		$sql = "SELECT * FROM UsersWIP WHERE ip = '$VisitorIP'";
		$resultUser = $Tinysqcon->query($sql);
		$row = $resultUser->fetch_assoc();
		$VisitorUserName = $row['User'];
		$VisitorVisits = $row['Visits'];
	
	// if user is visiting first time write user info to db.
	if ($VisitorVisits == 0) { 
		$UserVisitCount = $UserVisitCount+1;
		$sql = "INSERT INTO UsersWIP (id, Visits, Ip, LastVisitDate, LastVisitTime) 
		VALUES ('$UserVisitCount', '1', '$VisitorIP', '$LastVisitDate', '$LastVisitTime')";
	
	} 
	
	// Update visit times and visits if not first time.
	else { 
		$VisitorVisits = $VisitorVisits+1;
		$sql = "UPDATE UsersWIP SET Visits='$VisitorVisits', LastVisitDate='$LastVisitDate', LastVisitTime='$LastVisitTime' WHERE IP='$VisitorIP'";
	} 

	// debug
	
	
	if ($Tinysqcon->query($sql) === TRUE) {
		
	} 
?>