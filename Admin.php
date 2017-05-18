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

<style>
div {
	width: 500px;
	align-content: center;
	table-layout: auto
}

.date {
	height: 30px;
}
</style>

</head>
<body>


<?php /*
$link = mysqli_connect('localhost', 'root', 'root', 'LostandFound');
	if (!$link)
	{
		echo 'here';
    	die('Could not connect: ' . mysqli_error());
	}
$sql = "SELECT * from Items";
$query = mysqli_query($link, $sql);
if (!$query) {
   die ('SQL Error: ' . mysqli_error($link));
}
echo '<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>Claimed</th>
            </tr>
        </thead>';
    while($row = mysqli_fetch_array($query)) {
       echo '<tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['long_description'].'</td>
            <td>'.$row['claimed'].'</td>
        </tr>';
    }
*/?>


<!-- HTML Form -->

<form method="POST" action="#">
	<div class="row">
		<label for="short_descroption">Item Category:</label><br />
		<select>
			<option value="Jacket">Jacket</option>
			<option value="Water Bottle">Water Bottle</option>
		</select> <br/>
	</div>
	<div class="row">
		<label for="long_descpription">Item Descpription:</label><br/>
		<input id="description" name="long_description" type="text" value="" size="30" /> <br/>
	</div>
	<div class="row" class="date">
		<label for="Date found">Date Found:</label><br/>
		 <select name='month' class="date">
	                <option value=' ' selected='selected'> </option>
	                <option value='1'>1</option>
					<option value='2'>2</option>
					<option value='3'>3</option>
					<option value='4'>4</option>
					<option value='5'>5</option>
					<option value='6'>6</option>
					<option value='7'>7</option>
					<option value='8'>8</option>
					<option value='9'>9</option>
					<option value='10'>10</option>
					<option value='11'>11</option>
					<option value='12'>12</option>      
	            </select>
		<select name='day' class="date">
					<option value=' ' selected='selected'> </option>
					<option value='1'>1</option>
					<option value='2'>2</option>
					<option value='3'>3</option>
					<option value='4'>4</option>
					<option value='5'>5</option>
					<option value='6'>6</option>
					<option value='7'>7</option>
					<option value='8'>8</option>
					<option value='9'>9</option>
					<option value='10'>10</option>
					<option value='11'>11</option>
					<option value='12'>12</option>
					<option value='13'>13</option>
					<option value='14'>14</option>
					<option value='15'>15</option>
					<option value='16'>16</option>
					<option value='17'>17</option>
					<option value='18'>18</option>
					<option value='19'>19</option>
					<option value='20'>20</option>
					<option value='21'>21</option>
					<option value='22'>22</option>
					<option value='23'>23</option>
					<option value='24'>24</option>
					<option value='25'>25</option>
					<option value='26'>26</option>
					<option value='27'>27</option>
					<option value='28'>28</option>
					<option value='29'>29</option>
					<option value='30'>30</option>
					<option value='31'>31</option>

	         </select>
		 <br/>
	</div>
	<div class="row">
		<input id="submit_button" type="submit" value="Submit Item" />
	</div>
</form>						

</div>
</body>
</html>