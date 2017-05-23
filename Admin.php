<!DOCTYPE html>
<html>
<head>


<style>
	input[type=text], select {
    width: 50%;
    padding: 14px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	text-align: center;
	}
	input[type=submit] {
    width: 100%;
    background-color: rgb(50,0,180);
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
	color: rgb(0,0,0);
	text-align: center;
	width: 100%;
}

.date {
	height: 30px;
}
</style>

</head>
<body>

<!--connects to mysql server-->
<?php
//$link = mysqli_connect('localhost', 'root', 'root', 'LostandFound');
//	if (!$link)
//	{
//		echo 'here';
//    	die('Could not connect: ' . mysqli_error());
//	}
//$sql = "SELECT * from Items";
//$query = mysqli_query($link, $sql);
//if (!$query) {
//   die ('SQL Error: ' . mysqli_error($link));
//}
//reports a table with values of database
//	echo '<table>
//        <thead>
//            <tr>
//                <th>ID</th>
//                <th>Description</th>
//                <th>Claimed</th>
//            </tr>
//        </thead>';
//    while($row = mysqli_fetch_array($query)) {
//       echo '<tr>
//            <td>'.$row['id'].'</td>
//            <td>'.$row['long_description'].'</td>
//            <td>'.$row['claimed'].'</td>
//        </tr>';
//    }
?>


<!-- HTML Form -->

<form method="POST" action=":action_page.php">
	<div class="input" type="text">
	Item Category:<br/>
		<select name='short_description'>
			<option value="Bag">Bag</option>			
			<option value="Backpack">Backpack</option>
			<option value="Binder">Binder</option>
			<option value="Book">Book</option>
			<option value="Jacket">Jacket</option>
			<option value="Pants">Pants</option>
			<option value="Shirt">Shirt</option>
			<option value="Water Bottle">Water Bottle</option>
			<option value="Other">Other</option>
		</select> <br/>
	</div>
	<div class="input" type="text">
		If Other: <br/>
		<input id="description" name="short_description" type="text" value="" size="30" /> <br/>
		
	</div>
	<div class="input" type="text">
		Item Description:<br/>
		<input id="description" name="long_description" type="text" value="" size="30" /> <br/>
		Image:<br/>
		<input type="file" name="image" accept="image/*" capture="camera" />
	</div>
	<div>
		Date Found: <br/>
		<input type="date" name="date" placeholder="mm-dd-yyyy">
	</div>
	<div>
		Claimed:<br/>
		<input name="claimed" type="radio" value='yes'>Yes<br/>
		<input name="claimed" type="radio" value='no'>No<br/>
		</div>
	<div class="input" type="submit">
		<input id="submit_button" type="submit" value="Submit Item" />
	</div>
</form>

		
</body>
</html>