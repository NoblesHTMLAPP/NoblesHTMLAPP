<?php
if(isset($_POST['Login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == "admin" && $password == "mypassword")
        {
        echo "Success";
        } else {
            echo "Login Failed";
        }
}

?>