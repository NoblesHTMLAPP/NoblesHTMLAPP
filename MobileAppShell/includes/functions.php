<?php

$weekdays=array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
$weekdays_abbr = array("S","M","T","W","Th","F","S");
$months_abbr = array("Jan", "Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");



function getStudents(){
    
    
    $link = mysql_connect('127.0.0.1', 'webuser', 'compsci2016');
	if (!$link) {
    	die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('EmergencyAttendance', $link) or die('Could not select database.');
	$res = mysql_query("SELECT * from Students", $link);
	if (!$res) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
	}
	
	
	
	while ($row = mysql_fetch_assoc($res)) 
	{
    		//<January 11 2017
    		echo $row['Type'] . " " . $row['FirstName'] . " " . $row['LastName'] ." " . $row['isPresent']."".'<br>';
//	>january 11 2017
    	
	}
	
	mysql_free_result($result);
	
	mysql_close($link);
}



?>


