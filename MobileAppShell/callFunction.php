<?php
$response = array();
$status = "success";
$address = "";
$addresses=array();


if (!isset($_SESSION["callStack"]))
	$_SESSION["callStack"][]="myChildren";

if ($_POST["menuItem"] != "")
{
	$_SESSION["callStack"][]=$_POST["menuItem"];

}

// Changes by Mrs. Smith 1/18/17
// If we are marking a student as present (as indicated in the noblesapp.js file, do the following...
if ($_POST["menuItem"] == "markAsPresent")
{
	
	$studentID = $_POST["studentID"];
    $link = mysql_connect('127.0.0.1', 'webuser', 'compsci2016');
	if (!$link) {
    	die('Could not connect: ' . mysql_error());
	}
	//
	
	mysql_select_db('EmergencyAttendance', $link) or die('Could not select database.');
	
	// Standard SQL Update comment below.  
	if ("isPresent=0"){
	$res = mysql_query("Update Students Set isPresent=1 where id=" . $studentID, $link);
	if (!$res) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
	}
	}else{
	$res = mysql_query("Update Students Set isPresent=0 where id=" . $studentID, $link);
	if (!$res) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
	}
	}
}


header('Content-type: application/json');
header('Access-Control-Allow-Origin: https://nobilis.nobles.edu');
$returnVal=array("status" => $status,
					"address" => $address,
					"addresses" => $_SESSION["CommuterMapAddresses"]);
echo json_encode($returnVal);
?>
