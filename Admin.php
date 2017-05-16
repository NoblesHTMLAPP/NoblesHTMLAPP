<!DOCTYPE html>
<html>
	<head>
<?php

require_once("includes/session.php");

function getImage(){   
    $link = mysql_connect('127.0.0.1');
	if (!$link) {
    	die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('LostandFound', $link) or die('Could not select database.');
	$res = mysql_query("SELECT Image from Items WHERE id = 1 ", $link);
	if (!$res) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
	}
	
	
	while ($row = mysql_fetch_assoc($res)) 
	{

    	echo '<li>'.$row{'Image'}." ".'</li>';
	}
	
	mysql_free_result($result);
	
	mysql_close($link);
}
?>


<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "LostandFound";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from Items WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Description: ". $row["long_description"]. " - Image" . $row["Image"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?> 

</body>


</html>

