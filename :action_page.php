<!DOCTYPE php>
<html>
<body>
<?php

	$shortDesc = $_POST["short_description"];
	$longDesc = $_POST["long_description"];
	$image = $_POST["image"];
	$dateFound = $_POST["date"];
	$link = mysqli_connect('localhost', 'root', 'root', 'LostandFound');
		

	if (!$link)
	{
    	die('Could not connect: ' . mysqli_error());
	}
		$sql = "INSERT INTO Items (short_description, long_description, claimed, date_found, Image)
		values('$shortDesc', '$longDesc', '$claimed', '$dateFound', '$image')";
	$query = mysqli_query($link, $sql);
	if (!$query) {
   die ('SQL Error: ' . mysqli_error($link));
	}
?>
<!--Submit another button-->
<form action="Admin.php">
	<div align="center">
		<input type="submit" value="Submit Another Item" />
	</div>
</form>
<!--connects to mysql server-->
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
//reports a table with values of database
	echo '<table>
        <thead>
            <tr>
				<th>Item Number</th>
                <th>Type</th>
				<th>Description</th>
				<th>Date Found</th>
				<th>Image</th>
            </tr>
        </thead>';
    while($row = mysqli_fetch_array($query)) {
       echo '<tr>
			<td>'.$row['id'].'</td>
			<td>'.$row['short_description'].'</td>
            <td>'.$row['long_description'].'</td>
			<td>'.$row['date_found'].'</td>
			<td>'.$row['Image'].'</td>
        </tr>';
    }
?>
<div>
	<form method="GET">
		<input name='item#' type=text placeholder='Item Number'>
		<input type=submit value='Mark Item as Claimed'>
	
<?php

$itemNum = $_GET["item#"];
if (!$link)
	{
    	die('Could not connect: ' . mysqli_error());
	}
		$sql = "DELETE FROM Items where id='$itemNum'";
	$query = mysqli_query($link, $sql);
	if (!$query) {
   die ('SQL Error: ' . mysqli_error($link));
	}
	if(isset($_GET['item#'])){
		echo "<meta http-equiv='refresh' content='0'>";
	}

?>
</form>
</div>

</body>
</html>

