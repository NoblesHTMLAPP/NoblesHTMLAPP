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
		$sql = "SELECT * from Items";
		$sql = '"INSERT INTO" Items ("shortDesc", "longDesc", "image", "dateFound")';
	$query = mysqli_query($link, $sql);
	if (!$query) {
   die ('SQL Error: ' . mysqli_error($link));
	}
?>
</body>
</html>
