<!DOCTYPE html>
<html>
<head>


<style>
	input[type=text], select {
    width: 100%;
    padding: 14px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	}
	input[type=submit] {
    width: 100%;
    background-color: rgb(50,0,250);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: rgb(50,0,180);
}
.input {
	color: rgb(0,0,0);
	font-family: monospace;
}
body {
	color: white;
	text-align: center;
	width: 100%;
}

.date {
	height: 30px;
}
</style>

</head>
<body>


<?php
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
?>


<!-- HTML Form -->

<form method="POST" action=":action_page.php">
	<div class="input" type="text">
		<label for="short_description">Item Category:</label><br/>
		<select name="short-description">
			<option value="Jacket">Jacket</option>
			<option value="Water Bottle">Water Bottle</option>
		</select> <br/>
	</div>
	<div class="input" type="text">
		<label>Item Description:</label><br/>
		<input id="description" name="long_description" type="text" value="" size="30" /> <br/>
		<label">image:</label><br/>
		<input type="file" name="image" accept="image/*" capture="camera" />
	</div>
	<div class="input" class="date">
		<label>Date Found:</label><br/>
		 <select name='month'>
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
		<select name='day'>
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
	<div class="input" type="submit">
		<input id="submit_button" type="submit" value="Submit Item" />
	</div>
</form>						

</body>
</html>