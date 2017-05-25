<!DOCTYPE html>
<html>
<head>
</head>
<body>
>
<!-- this form is user to store images-->
<form action="index.php" method="post"  enctype="multipart/form-data">
Enter the Image Name:<input type="text" name="image_name" id="" /><br />

<input name="image" id="image" accept="image/JPEG" type="file"><br /><br />
<input type="submit" value="submit" name="submit" />
</form>
<br /><br />
<!-- this form is user to display all the images-->
<form action="index.php" method="post"  enctype="multipart/form-data">
Retrive all the images:
<input type="submit" value="submit" name="retrive" />
</form>



<?php
//THIS IS INDEX.PHP PAGE
//connect to database.db name is images
        mysql_connect("", "", "") OR DIE (mysql_error());
        mysql_select_db ("") OR DIE ("Unable to select db".mysql_error());
//to retrive send the page to another page
if(isset($_POST['retrive']))
{
    header("location:search.php");

}

//to upload
if(isset($_POST['submit']))
{
if(isset($_FILES['image'])) {
        $name=$_POST['image_name'];
        $email=$_POST['mail'];
        $fp=addslashes(file_get_contents($_FILES['image']['tmp_name'])); //will store the image to fp
        }
                // our sql query
                $sql = "INSERT INTO images VALUES('null', '{$name}','{$fp}');";
                            mysql_query($sql) or die("Error in Query insert: " . mysql_error());
} 
?>



<?php
//SEARCH.PHP PAGE
    //connect to database.db name = images
         mysql_connect("localhost", "root", "") OR DIE (mysql_error());
        mysql_select_db ("image") OR DIE ("Unable to select db".mysql_error());
//display all the image present in the database

        $msg="";
        $sql="select * from images";
        if(mysql_query($sql))
        {
            $res=mysql_query($sql);
            while($row=mysql_fetch_array($res))
            {
                    $id=$row['id'];
                    $name=$row['name'];
                    $image=$row['image'];

                  $msg.= '<a href="search.php?id='.$id.'"><img src="data:image/jpeg;base64,'.base64_encode($row['image']). ' " />   </a>';

            }
        }
        else
            $msg.="Query failed";
?>
<div>
<?php
echo $msg;
?>

</body>
	
</html>