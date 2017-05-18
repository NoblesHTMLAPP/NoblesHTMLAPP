<!DOCTYPE html>
<html>
<head>
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
        </thead>
        <tbody>';

    while($row = mysqli_fetch_array($query)) {
       echo '<tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['long_description'].'</td>
            <td>'.$row['claimed'].'</td>

        </tr>';
    }
?>

</body>
</html>