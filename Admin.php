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
		
        
		<div data-role="page" height="100%" class="ui-responsive-panel" id="main_page">
		<div data-role ="header" data-theme="b" id="main_header" data-position="fixed"> 
		

		<h2 class="ui-title" role="heading">&nbsp;</h2>
		<div class="ui-btn-left" data-role="controlgroup" data-type="horizontal">
		  <a href="#popupMenu" data-rel="popup" data-role="button" data-inline="true" data-transition="slidedown"  data-theme="b">Menu</a>
	      <div data-role="popup" id="popupMenu" data-theme="b">
		     <ul data-role="listview" data-inset="true" style="min-width:210px;" data-theme="b">
		        <li id="menuitem1"><a href="#">Jacket</a></li>
		        <li id="menuitem2"><a href="#">Water Bottle</a></li>
		     </ul>
		 </div>
	    </div>
		 
		 <div class="ui-btn-right" data-role="controlgroup" data-type="horizontal">
		      <a href="#" data-icon="refresh" id="refreshButton" data-role="button" data-inline="true" >&nbsp;</a>
	     </div>
		
	
		</div>
		  			
			
			<div data-role="content" data-theme="b" id="main_content">
			<div id="main_content_refresh">
			<ul data-filter="true" data-role="listview" class="ui-listview-outer" data-inset="true">
			
		<?php
		   	echo '<li date-iconpos="right" data-icon="arrow-r" data-value="7" class="studentName"><a href="#">Jackson Smith</a></li>';
		   	echo '<li date-iconpos="right" data-icon="arrow-r" data-value="8" class="studentName"><a href="#">Andrew Johnson</a></li>';
		?>			
		</ul>
			</div>
			</div><!-- /content -->
			<div data-role="footer" class="ui-bar" data-position="fixed" data-theme="b" >
			 	<a href="#" data-role="button" data-icon="back" id="backButton" >Back</a>
		    </div>

	
 			
		</div><!-- /page -->

	</body>
<script>

</script>
</html>

