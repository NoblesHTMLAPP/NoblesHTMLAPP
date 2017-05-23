<!DOCTYPE php>
<html>
<body>

<?php

	if($_POST["claimed"] = "yes") {
			$claimed = 1;
	} else {
			$claimed = 0;
	}
	$shortDesc = $_POST["short_description"];
	$longDesc = $_POST["long_description"];
	$image = $_POST["image"];
	$dateFound = $_POST["date"];
	$link = mysqli_connect('localhost', 'root', 'root', 'LostandFound');

	if (!$link)
	{
		echo 'here';
    	die('Could not connect: ' . mysqli_error());
	}
		$sql = " INSERT INTO Items (short_description, long_description, claimed, date_found, Image)
		values('$shortDesc', '$longDesc', '$claimed', '$dateFound', '$image')";
	$query = mysqli_query($link, $sql);
	if (!$query) {
   die ('SQL Error: ' . mysqli_error($link));
	}

?>
</body>
</html>
