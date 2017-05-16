<!DOCTYPE html>
<html>
	<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<link rel="stylesheet" href="https://demos.jquerymobile.com/1.4.0/theme-classic/theme-classic.css" />
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/base/jquery-ui.css" />
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/base/jquery-ui.css" />
<link rel="stylesheet" href="css/noblesapp.css?v=36" />
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?v=3&sensor=false&language=en"></script>
<script src="jquery/noblesapp.js?v=49"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
<link rel="apple-touch-icon" sizes="72x72" href="favicon.png?v=1" />

<?php

require_once("includes/session.php");

function getImage(){   
    $link = mysql_connect('127.0.0.1');
	if (!$link) {
    	die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('LostandFound', $link) or die('Could not select database.');
	$res = mysql_query("SELECT Image from Items WHERE  id = 1 ", $link);
	if (!$res) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
	}
	
	
	while ($row = mysql_fetch_assoc($res)) 
	{

    	echo '<li>'.$row{'Image'}." ".'</a></li>';
	}
	
	mysql_free_result($result);
	
	mysql_close($link);
}


session_start();

?>
	
	<head>
		

		</head>
	<body>
		
        
		<div>
		<div> 
		
		<div>
	      <div>
		     <ul>
		        <li><a href="#">Jacket</a></li>
		        <li><a href="#">Water Bottle</a></li>
		     </ul>
		 </div>
	    </div>
		 
		 <div>
	     </div>
		
	
		</div>
		  			
			
			<div>
			<div>
			<ul>
			
		<?php
		   	echo getImage();
		?>			
		</ul>
			</div>
			</div><!-- /content -->
			<div 
		    </div>

	
 			
		</div><!-- /page -->

	</body>
<script>

</script>
</html>

