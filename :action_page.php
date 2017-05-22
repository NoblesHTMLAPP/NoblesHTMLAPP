<!DOCTYPE php>
<html>
<body>

<?php


	$shortDesc = $_POST["short_description"];
	$longDesc = $_POST["long_description"];
	$image = $_POST["image"];
	$dateFound = $_POST["month" . "-" . "day"];
	$link = mysqli_connect('localhost', 'root', 'root', 'LostandFound');
	if (!$link)
	{
		echo 'here';
    	die('Could not connect: ' . mysqli_error());
	}
		$sql = " INSERT INTO Items (short_description, long_description, claimed, date_found, Image)
		values('shortDesc', 'longDesc', '0', 'image', 'dateFound')";
	$query = mysqli_query($link, $sql);
	if (!$query) {
   die ('SQL Error: ' . mysqli_error($link));
	}

?>
</body>
</html>
