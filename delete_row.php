<!DOCTYPE html>

<html>

<body>
<?php
echo 'here';
$link = mysqli_connect('localhost', 'root', 'root', 'LostandFound');
	if (!$link)
	{
    	die('Could not connect: ' . mysqli_error());
	}
if (isset($_POST['btnDelete'])) {
    $sql = "Delete from Items where id = 1";
    $query = mysqli_query($link, $sql);
    if (!$query) {
        die ('SQL Error: ' . mysqli_error($link));
    }
}
?>


</body>
</html>